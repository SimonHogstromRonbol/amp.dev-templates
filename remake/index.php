<!doctype html>
<html ⚡>

<head>
  <meta charset="utf-8">
  <title>Gallery Template</title>
  <link rel="canonical" href="https://amp.dev/documentation/templates/gallery.amp">
  <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">

  <script async src="https://cdn.ampproject.org/v0.js"></script>

  <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>


  <script custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js" async></script>
  <script custom-element="amp-carousel" src="https://cdn.ampproject.org/v0/amp-carousel-0.1.js" async></script>

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,600" rel="stylesheet">

  <style amp-custom>
    <?php 
      echo file_get_contents('./style/main-index.css');
      echo file_get_contents('./style/sidebar-toggle-index.css');
      echo file_get_contents('./style/amp-sidebar.css');
      echo file_get_contents('./style/content-index.css');
    ?>
  </style>  
</head>
<body>
  
  <?php
  
  require_once('/chunks/sidebar-toggle.php');
  require_once('/chunks/amp-sidebar.php');
  require_once('/chunks/content-index.php');
  
  ?>
  
</body>
</html>