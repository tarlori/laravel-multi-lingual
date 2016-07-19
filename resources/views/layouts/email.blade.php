<!DOCTYPE html>
<html>
    <head>
        <title>LorandTar - @yield('title', "Email")</title>
        <style>
            a {
                color: white;
            }
        </style>
    </head>
    <body style="background: white;">
            <div style="text-align: left; padding: 20px; font-size: 15px; min-height: 250px;">
                @yield('content')

                <br><br>The XYZ Team
            </div>

    </body>
</html>