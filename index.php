<?php
function renderThumbnails(){
  $dirname = "assets/thumbnail/";
  $images = glob($dirname . "*.jpg");
  foreach($images as $image) {
    $id = substr($image,17,4);
    echo "\t";
    echo '<li class="span2">';
    echo '<a href="/' . $id . '" class="thumbnail">';
    echo '<img alt="Thumbnail ' . $id . '" src="' . $image . '">';
    echo '</a>';
    echo '</li>';
    echo "\n";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>WindOut - Artwork created by WindOut, an interactive installation by Chris Riebschlager.</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Artwork created by WindOut, an interactive installation by Chris Riebschlager.">
  <meta name="author" content="Chris Riebschlager">
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,400">
  <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap-responsive.min.css">
  <link rel="stylesheet" type="text/css" href="/assets/css/main.css">
</head>

<body>
  <div class="container-fluid">
    <h1>WindOut</h1>
    <h4>Artwork created by WindOut, an interactive installation by <a href="http://the816.com">Chris Riebschlager</a>.</h4>
    <iframe src="http://player.vimeo.com/video/72313392" width="940" height="529" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
    <ul class="thumbnails">
<?php renderThumbnails(); ?>
    </ul>
  </div>
</body>
</html>
