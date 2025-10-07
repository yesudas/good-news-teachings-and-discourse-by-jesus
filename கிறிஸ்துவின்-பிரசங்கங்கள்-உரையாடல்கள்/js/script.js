
if ('serviceWorker' in navigator) {
    navigator.serviceWorker.register('/good-news-collections/கிறிஸ்துவின்-பிரசங்கங்கள்-உரையாடல்கள்/sw.js')
        .then(() => console.log("Service Worker Registered"))
        .catch(err => console.log("Service Worker Failed:", err));
}
        
document.addEventListener("DOMContentLoaded", () => {
  const installBtn = document.getElementById("installAppBtn");
  let deferredPrompt;

  window.addEventListener("beforeinstallprompt", (e) => {
    e.preventDefault();
    deferredPrompt = e;
    
    try {
        const urlParams = new URLSearchParams(window.location.search);
        // We check if the 'f' parameter is NOT 'app'.
        if (urlParams.get('f') !== 'app') {
            // If it's not the app, we find the button and make it visible.
            //const installAppBtn = document.getElementById('installAppBtn');
            if (installAppBtn) {
                // By setting display to an empty string, it reverts to the CSS default (in this case, 'block' or 'inline-block').
                installAppBtn.style.display = "inline-block"
            }
        }
    } catch (e) {
        // Log any errors for debugging.
        console.error("Error managing install button visibility:", e);
    }
  });

  installBtn.addEventListener("click", async () => {
    if (deferredPrompt) {
      deferredPrompt.prompt();
      const choice = await deferredPrompt.userChoice;
      console.log("User choice:", choice.outcome);
      deferredPrompt = null;
    }
  });
});

  let scale = 1;
  const wrapper = document.getElementById("container");

  function applyZoom() {
    wrapper.style.transform = `scale(${scale})`;
    wrapper.style.width = (100 / scale) + "vw";
    wrapper.style.height = (100 / scale) + "vh";
  }

  function zoomIn() {
    scale += 0.1;
    applyZoom();
  }

  function zoomOut() {
    if (scale > 0.3) {
      scale -= 0.1;
      applyZoom();
    }
  }

  function resetZoom() {
    scale = 1;
    applyZoom();
  }

  //applyZoom(); // initialize