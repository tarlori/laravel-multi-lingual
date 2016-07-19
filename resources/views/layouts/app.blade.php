<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title', "Contact us")</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

        <link href="/assets/css/main.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container">
            <div class="pull-left menu">
                <a href="{{ Helper::format_uri('') }}">Home</a> |
                <a href="{{ Helper::format_uri('about') }}">About us</a> |
                <a href="{{ Helper::format_uri('services') }}">Services</a>
            </div>
            <div class="pull-right lang-switcher">
                <a href="{{ Helper::switch_language('en') }}" class="{{ (App::getLocale() == 'en' || !in_array(App::getLocale(), config('app')['supported_languages'])) ? 'active': '' }}">EN</a> |
                <a href="{{ Helper::switch_language('fr') }}" class="{{ App::isLocale('fr') ? 'active': '' }}">FR</a>
            </div>
        </div>
        <div class="container">
            @yield('content')
        </div>

        <!-- JavaScripts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

        <script src="/assets/js/main.js"></script>
    </body>
</html>
