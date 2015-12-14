<?php
$images = glob("./images/*.jpg");
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="css/flexslider.css">
  <style type="text/css">
  body {
    padding:10px;
    margin:0;
    overflow-x: hidden;
  }
  .flexslider {
    padding:0;
    margin:0;
    border:0;
  }
  .flexslider .flex-direction-nav .flex-prev, .flexslider .flex-direction-nav .flex-next {
    display: none;
   }
.flexslider:hover .flex-direction-nav .flex-prev {
 display: block;
}
.flexslider:hover .flex-direction-nav .flex-next {
  display: block;
}
#slider{
    margin: auto;
}
#slider .slides > li {
    background-attachment: local;
    background-size: cover;
    height: 500px;
}

#slider {
    margin-bottom: 20px;
}

  </style>
</head>
<body>
<!-- Place somewhere in the <body> of your page -->
<div id="slider" class="flexslider">
          <ul class="slides">
            <?php foreach($images as $image) : ?>
            <li style="background-image:url(<?php echo $image ?>)">
            </li>
            <?php endforeach; ?>
          </ul>
        </div>
        <div id="carousel" class="flexslider">
          <ul class="slides">
          <?php foreach($images as $image) : ?>
            <li>
                <img src="<?php echo $image ?>" />
                </li>
            <?php endforeach; ?>
            
          </ul>
        </div>

 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>

  <!-- FlexSlider -->
  <script defer src="js/jquery.flexslider.js"></script>

  <script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('#carousel').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        itemWidth: 210,
        itemMargin: 5,
        asNavFor: '#slider'
      });

      $('#slider').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        sync: "#carousel",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>


  <!-- Syntax Highlighter -->
  <script type="text/javascript" src="js/shCore.js"></script>
  <script type="text/javascript" src="js/shBrushXml.js"></script>
  <script type="text/javascript" src="js/shBrushJScript.js"></script>

  <!-- Optional FlexSlider Additions -->
  <script src="js/jquery.easing.js"></script>
  <script src="js/jquery.mousewheel.js"></script>
  <script defer src="js/demo.js"></script>


</div>
</body>
</html>