<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="SudituBau">

    <title>SudituBau</title>


    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">


    <!--[if lte IE 8]>

    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-old-ie-min.css">

    <![endif]-->
    <!--[if gt IE 8]><!-->

    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">

    <!--<![endif]-->


    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">


    <!--[if lte IE 8]>
    <link rel="stylesheet" href="css/layouts/marketing-old-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
    <link rel="stylesheet" href="css/layouts/marketing.css">
    <!--<![endif]-->
    <link rel="stylesheet" href="css/main.min.css">
    <link rel="stylesheet" href="css/ideal-image-slider.min.css">
    <link rel="stylesheet" href="fancybox/jquery.fancybox.css" type="text/css" media="screen"/>
</head>
<body>

<div class="header">
    <div class="home-menu pure-menu pure-menu-horizontal pure-menu-fixed">
        <img src="/img/logo1.png" height="70px" width="150px" style="margin-left: 20px; margin-bottom: -15px">

        <div class="text-motto">Professionalität ist unsere Stärke</div>
    </div>
</div>

<div class="orbit-container">
@include('layouts/slider')
</div>

<div class="content-wrapper">
@include('layouts/about')

    <div class="ribbon l-box-lrg pure-g">
        @include('/layouts/gallery')
    </div>

    @include('layouts/contact');

</div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>
<script src="/js/ideal-image-slider.js" type="text/javascript"></script>
<script src="/js/caption.slider.js" type="text/javascript"></script>
<script src="/js/masonry.min.js" type="text/javascript"></script>
<script src="/js/multipleFilterMasonry.js" type="text/javascript"></script>
<script type="text/javascript" src="/fancybox/jquery.fancybox.pack.js"></script>
<script type="text/javascript">
    $(window).load(function () {
        var slider = new IdealImageSlider.Slider({
            selector: '#slider',
            height: 500,
            effect: 'fade',
            interval: 3000
        });
        slider.addCaptions();
        slider.start();
        var $container = $('#masonryContainer');

        $container.multipleFilterMasonry({
            itemSelector: '.grid-item',
            filtersGroupSelector: '.filters',
            columnWidth: 170,
            percentPosition: false,
            gutter: 5
        });
        /* This will create two galleries */

        $("a.grouped_elements").fancybox();
    });
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-74195867-1', 'auto');
ga('send', 'pageview');

</script>
</body>
</html>
