<?php
// menu.php
if (isset($_GET['d'])) {
    $d = $_GET['d'];
}else {
    $d = false;
}
?>
<!DOCTYPE html>
<html>
<?php include 'header.php'; ?>
<body>
<?php include 'menu.php'; ?>
<?php include 'bgsound.php'; ?>

<iframe src="https://christianpdf.com/?dir=./02-Books-by-Category-வகை-வாரியாக/05-Bible-College-Notes-and-Books/01-Good-News-Bible-Study-Collection&embed=1" style="width:100%; height:90vh; border:none;">
    Your browser doesn't support iframes
</iframe>

<?php include 'footer.php'; ?>
</body>
</html>