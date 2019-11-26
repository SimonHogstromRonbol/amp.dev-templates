<!doctype html>
<html ⚡>

<head>
  <meta charset="utf-8">
  <title>Gallery Template</title>
  <link rel="canonical" href="https://amp.dev/documentation/templates/inner.amp">
  <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">

  <script async src="https://cdn.ampproject.org/v0.js"></script>

  <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>


  <script custom-element="amp-iframe" src="https://cdn.ampproject.org/v0/amp-iframe-0.1.js" async=""></script>
  <script custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js" async></script>
  <script custom-element="amp-carousel" src="https://cdn.ampproject.org/v0/amp-carousel-0.1.js" async></script>

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,600" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Oswald:400" rel="stylesheet">

  <style amp-custom>
    <?php 
      echo file_get_contents('./style/main-inner.css');
      echo file_get_contents('./style/sidebar-toggle-inner.css');
      echo file_get_contents('./style/amp-sidebar.css');
      echo file_get_contents('./style/hero-gallery.css');
      echo file_get_contents('./style/article-sections.css');
      echo file_get_contents('./style/other-exibits.css');
      echo file_get_contents('./style/map-section.css');
    ?>
  </style>  
</head>
<body>
  
  <?php
  
  require_once('/chunks/sidebar-toggle.php');
  require_once('/chunks/amp-sidebar.php'); ?>
  
  <main id="content" role="main">
    <svg class="inner-svg inner-svg-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 388 809" aria-hidden="true">
      <path d="M7 142.5C7 245 124.5 286 124.5 373s-77 206.367-77 306c0 99.633 93 123 150.5 123s140 1.5 140-130.5-16.5-111-16.5-227S381 274 381 134 268.5 8 203 8 7 40 7 142.5z" fill="#f5f6fd"></path>
    </svg>
    <svg class="inner-svg inner-svg-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1167 599" aria-hidden="true">
      <path d="M8 359.5c0 143.5 56.5 179 177.5 179s150.054-30 286-30S737 594 879.5 594 1159 543.5 1159 299.5 1062.734 5 902 5C741.266 5 689 220 568 220s-333.383-72.5-425-72.5c-91.617 0-135 68.5-135 212z" fill="#f5f6fd"></path>
    </svg>

    <?php

    require_once('/chunks/hero-gallery.php');
    require_once('/chunks/article-section-1.php');
    require_once('/chunks/article-section-2.php');
    require_once('/chunks/article-section-3.php');
    require_once('/chunks/other-exibits.php');
    require_once('/chunks/map-section.php');

    ?>
    
  </main>
</body>
</html>