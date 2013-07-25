<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Art - The816</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Artwork created by WindOut, an interactive installation by Chris Riebschlager.">
  <meta name="author" content="Chris Riebschlager">
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,400">
  <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap-responsive.min.css">
  <link rel="stylesheet" type="text/css" href="/assets/css/main.css">
  <script type="text/javascript">
    var switchTo5x = true;
  </script>
  <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
  <script type="text/javascript">
    stLight.options({
      publisher: "ff38693b-e5bb-440d-a07d-789b019f1b50",
      doNotHash: true,
      doNotCopy: true,
      hashAddressBar: false
    });
  </script>
</head>

<body>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <h1>Your Artwork</h1>
      </div>
    </div>
    <div class="row-fluid">
      <div class="span12">
        <?php
          $imgTag = "<img id=\"artwork\" src=\"https://dl.dropboxusercontent.com/u/3308391/windout/" . $_GET['id'] . ".jpg\" class=\"img-polaroid\">";
          echo $imgTag;
        ?>
      </div>
    </div>
    <div class="row-fluid">
      <div class="span6">
        <p>Thanks for creating some artwork with me. Would you like a print of your artwork?<br /></p>
      </div>
      <div class="span6" style="text-align:right;">
        <p>Share your artwork:&nbsp;
          <span class="st_facebook" displayText="Facebook"></span>
          <span class="st_twitter" displayText="Tweet"></span>
          <span class="st_pinterest" displayText="Pinterest"></span>
          <span class="st_email" displayText="Email"></span>
        </p>
      </div>
    </div>
  </div>
  <script src="/assets/js/jquery-1.10.2.min.js"></script>
  <script src="/assets/js/bootstrap.min.js"></script>
  <script>
    (function(i, s, o, g, r, a, m) {
      i['GoogleAnalyticsObject'] = r;
      i[r] = i[r] || function() {
        (i[r].q = i[r].q || []).push(arguments)
      }, i[r].l = 1 * new Date();
      a = s.createElement(o),
      m = s.getElementsByTagName(o)[0];
      a.async = 1;
      a.src = g;
      m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-160935-24', 'the816.com');
    ga('send', 'pageview');
  </script>
</body>

</html>
