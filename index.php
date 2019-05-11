<?php include 'inc/header.php';?>

<?php
$title = "Time";
$metaD = "For Time Management!";
?>

   <h1>Heading 1</h1>

   <p>Some text.</p>

   <h2>Heading 2</h2>

   <p>Some more text.</p>

<?php
$path = $_SERVER['QUERY_STRING'];
echo $path;
echo '<br>';
$url = substr($path, strpos($path, "/") + 1);
echo $url;
echo '<br>';
$final_path = substr($url, strpos($url, "/") + 1);
echo $final_path;
?>

<?php include 'inc/footer.php';?>