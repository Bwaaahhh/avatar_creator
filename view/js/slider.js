jQuery(document).ready(function ($) {

        var jssor_1_SlideshowTransitions = [
          {$Duration:800,$Opacity:2}
        ];

        var jssor_1_options = {
          $AutoPlay: false,
          $SlideshowOptions: {
            $Class: $JssorSlideshowRunner$,
            $Transitions: jssor_1_SlideshowTransitions,
            $TransitionsOrder: 1
          },
          $ArrowNavigatorOptions: {
            $Class: $JssorArrowNavigator$
          },
          $BulletNavigatorOptions: {
            $Class: $JssorBulletNavigator$
          }
        };

        var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
        var jssor_2_slider = new $JssorSlider$("jssor_2", jssor_1_options);
        var jssor_3_slider = new $JssorSlider$("jssor_3", jssor_1_options);
        var jssor_4_slider = new $JssorSlider$("jssor_4", jssor_1_options);

        /*responsive code begin*/
        /*you can remove responsive code if you don't want the slider scales while window resizing*/
        function ScaleSlider() {
                window.setTimeout(ScaleSlider, 30);
        }
        ScaleSlider();
        $(window).bind("load", ScaleSlider);
        $(window).bind("resize", ScaleSlider);
        $(window).bind("orientationchange", ScaleSlider);
        /*responsive code end*/
    });
