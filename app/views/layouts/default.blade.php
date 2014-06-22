<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <title>Bulgarian SSL Sites</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dimitar Rekinov">
    @if(!empty(Config::get('app.google_translate_id')))
    <meta name="google-translate-customization" content="{{ Config::get('app.google_translate_id') }}">
    @endif
    <link rel="shortcut icon" href="{{ URL::asset('assets/img/favicon.ico') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ URL::asset('assets/img/opened-lock-152-188460.png') }}">
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="msapplication-TileImage" content="{{ URL::asset('assets/img/opened-lock-152-188460.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="{{ URL::asset('assets/img/opened-lock-152-188460.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ URL::asset('assets/img/opened-lock-152-188460.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="{{ URL::asset('assets/img/opened-lock-152-188460.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ URL::asset('assets/img/opened-lock-152-188460.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ URL::asset('assets/img/opened-lock-152-188460.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ URL::asset('assets/img/opened-lock-152-188460.png') }}">
    <link rel="icon" href="{{ URL::asset('assets/img/opened-lock-152-188460.png') }}" sizes="32x32">
    <!-- Bootstrap core CSS -->
    <link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="//cdnjs.cloudflare.com/ajax/libs/datatables/1.10.0/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- Custom styles -->
    <link href="{{ URL::asset('assets/css/main.css') }}" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ URL::route('index') }}">Bulgarian SSL Sites</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="{{ URL::route('sites.index') }}">Sites</a></li>
                <li><a href="{{ URL::route('about') }}">About</a></li>
                <li><a href="{{ URL::route('knowledge.index') }}">Knowledge base</a></li>
                <li><a href="https://twitter.com/drekinov" target="_blank"><i class="entypo-social twitter"></i>@drekinov</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>

<div class="container">
    <div class="row">

        @yield('content')

        <div id="google_translate_element"></div>

    </div>
</div>
<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/datatables/1.10.0/js/jquery.dataTables.min.js"></script>
<script>@yield('footer_inline_js')</script>
@if(!empty(Config::get('app.google_translate_id')))
<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.FloatPosition.TOP_LEFT}, 'google_translate_element');
    }
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
@endif
@if(!empty(Config::get('app.google_analytics_id')))
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', '{{Config::get('app.google_analytics_id')}}', 'drekinov.com');
    ga('send', 'pageview');

</script>
@endif
</body>
</html>