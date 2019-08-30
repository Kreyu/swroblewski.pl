<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="msapplication-TileColor" content="#1c1c1c">
        <meta name="theme-color" content="#1c1c1c">

        <title>Sebastian Wróblewski</title>

        <link rel="apple-touch-icon" sizes="180x180" href="/assets/images/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon/favicon-16x16.png">
        <link rel="mask-icon" href="/assets/images/favicon/safari-pinned-tab.svg" color="#1c1c1c">
        <link rel="stylesheet" href="{{ mix('/css/main.css') }}">

        <script src="{{ mix('/js/main.js') }}"></script>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-146804022-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-146804022-1');
        </script>
    </head>
    <body class="antialiased font-sans">
        <div id="particles-js" class="w-screen h-screen"></div>
        @yield('content')

        <script src="/assets/js/particles.min.js"></script>
        @stack('scripts')
    </body>
</html>
