<!DOCTYPE html>
<html>

<head>
    <title>Users Main Page</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="CSS/newStyle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--Adobe Edge Runtime-->
    <script type="text/javascript" charset="utf-8" src="http://animate.adobe.com/runtime/6.0.0/edge.6.0.0.min.js"></script>
    <!--Adobe Edge Runtime End-->
    <script>
        AdobeEdge.loadComposition('Prova-Pulsante', 'EDGE-168615556', {
            scaleToFit: "none"
            , centerStage: "none"
            , minW: "0px"
            , maxW: "undefined"
            , width: "550px"
            , height: "400px"
        }, {
            "style": {
                "${symbolSelector}": {
                    "isStage": "true"
                    , "rect": ["undefined", "undefined", "550px", "400px"]
                }
            }
            , "dom": {}
        }, {
            "dom": {}
        });
        AdobeEdge.loadComposition('Video%20Intro', 'VideoINTRO', {
            centerStage: "none"
            , minW: "0px"
            , maxW: "undefined"
            , width: "1280px"
            , height: "550px"
        }, {
            "style": {
                "${symbolSelector}": {
                    "isStage": "true"
                    , "rect": ["undefined", "undefined", "1280px", "550px"]
                    , "fill": ["rgba(255,255,255,1)"]
                }
            }
            , "dom": {}
        }, {
            "dom": {}
        });

           AdobeEdge.loadComposition('IntroResize', 'EDGE-170594673', {
    scaleToFit: "both",
    centerStage: "none",
    minW: "0px",
    maxW: "undefined",
    width: "720px",
    height: "900px"
}, {"dom":{}}, {"dom":{}});
    </script>



       </head>

<body class="body">
    <header class="mainHeader">
        <input type="checkbox" id="resizeMenu">
        <label for="resizeMenu"><img class="buttonMenu" src="images/menu.png" alt=""></label> <img src="images/logo.png" id="logo_resize">
        <nav class="menu">
            <ul class="logo">
                <li><img src="images/logo.png" id="logo_fisso"></li>
            </ul>
            <ul>
                <li class="active"><a href="index.html">Home</a></li>
                <li><a href="#">Offerte</a></li>
                <li><a href="#">Progetti</a></li>
                <li><a href="#">Assistenza</a></li>
            </ul>
        </nav>
    </header>
    <div class="mainContent">
        <div class="content">
          <ul>
           <li><div id="Stage" class="VideoINTRO"></li>
           <li><div id="Stage3" class="EDGE-170594673"></li>
            </ul>
        </div>
    </div>
    <div>
    <!-- Slider Begin -->

    <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="js/jssor.slider.mini.js"></script>
    <!-- use jssor.slider.debug.js instead for debug -->
    <script>
        jQuery(document).ready(function ($) {

            var jssor_1_options = {
              $AutoPlay: true,
              $SlideDuration: 800,
              $SlideEasing: $Jease$.$OutQuint,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1920);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>

    <style>

        /* jssor slider bullet navigator skin 05 css */
        /*
        .jssorb05 div           (normal)
        .jssorb05 div:hover     (normal mouseover)
        .jssorb05 .av           (active)
        .jssorb05 .av:hover     (active mouseover)
        .jssorb05 .dn           (mousedown)
        */
        .jssorb05 {
            position: absolute;
        }
        .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
            position: absolute;
            /* size of bullet elment */
            width: 16px;
            height: 16px;
            background: url('images/Slider/b05.png') no-repeat;
            overflow: hidden;
            cursor: pointer;
        }
        .jssorb05 div { background-position: -7px -7px; }
        .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
        .jssorb05 .av { background-position: -67px -7px; }
        .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }

        /* jssor slider arrow navigator skin 22 css */
        /*
        .jssora22l                  (normal)
        .jssora22r                  (normal)
        .jssora22l:hover            (normal mouseover)
        .jssora22r:hover            (normal mouseover)
        .jssora22l.jssora22ldn      (mousedown)
        .jssora22r.jssora22rdn      (mousedown)
        */
        .jssora22l, .jssora22r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 40px;
            height: 58px;
            cursor: pointer;
            background: url('images/Slider/a22.png') center center no-repeat;
            overflow: hidden;
        }
        .jssora22l { background-position: -10px -31px; }
        .jssora22r { background-position: -70px -31px; }
        .jssora22l:hover { background-position: -130px -31px; }
        .jssora22r:hover { background-position: -190px -31px; }
        .jssora22l.jssora22ldn { background-position: -250px -31px; }
        .jssora22r.jssora22rdn { background-position: -310px -31px; }
    </style>


    <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1300px; height: 550px; overflow: hidden; visibility: hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 550px; overflow: hidden;">
            <div data-p="225.00" style="display: none;"> <img data-u="image" src="images/Slider/slider_1.png" /> </div>
                            <div data-p="225.00" style="display: none;"> <img data-u="image" src="images/Slider/slider_2.png" /> </div>
                            <div data-p="225.00" style="display: none;"> <img data-u="image" src="images/Slider/slider_3.png" /> </div>
                            <div data-p="225.00" style="display: none;"> <img data-u="image" src="images/Slider/slider_4.png" /> </div>
                            <div data-p="225.00" style="display: none;"> <img data-u="image" src="images/Slider/slider_5.png" /> </div>


        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:16px;height:16px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora22l" style="top:0px;left:12px;width:40px;height:58px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora22r" style="top:0px;right:12px;width:40px;height:58px;" data-autocenter="2"></span>
    </div>

    <!--  Slider End --></div>
    <div>
    <ul class="sezione 3">
    <li class="sez3-Primo"><div id="Stage2" class="EDGE-168615556"></li>


    </ul>
	</div>
	</div>
</body>
<footer class="footer">
    <div class="mainFooter">
        <nav>
            <ul>
                <li>
                    <p>Copyright &copy; 2016 <a href="#">ZFT</a></p>
                </li>
            </ul>
        </nav>
    </div>
</footer>

</html>
