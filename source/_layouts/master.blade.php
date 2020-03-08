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

        @stack('stylesheets')

        <link rel="stylesheet" href="{{ mix('/css/main.css') }}">

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-146804022-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-146804022-1');
        </script>
    </head>
    <body class="antialiased font-sans bg-black text-white overflow-x-hidden h-screen">
        <div id="particles-js" class="w-screen h-screen pointer-events-none"></div>

        <nav class="font-sans py-8 px-4 h-1/10">
            <div class="mx-auto max-w-3xl overflow-hidden flex justify-between items-center">
                <ul class="flex list-none items-center p-0">
                    <li class="px-3 hover:text-orange-500 transition-faster">
                        <a href="/" class="no-underline">
                            <span class="align-middle">
                                <img src="/assets/images/logo.svg" alt="logo" style="width: 21px;">
                            </span>
                        </a>
                    </li>
                    <li class="px-3 cursor-default">
                        &bull;
                    </li>
                    <li class="px-3 hover:text-orange-500 transition-faster">
                        <a href="/products" class="no-underline">Products</a>
                    </li>
                    <li class="px-3 hover:text-orange-500 transition-faster">
                        <a href="/blog" class="no-underline">Blog</a>
                    </li>
                </ul>

                <ul class="flex list-none items-center p-0 pt-1">
                    <li class="mx-3 hover:text-orange-500 transition-faster">
                        <a href="mailto:kontakt@swroblewski.pl" class="no-underline">
                            <span class="align-middle">
                                <i class="icon-envelope"></i>
                            </span>
                        </a>
                    </li>
                    <li class="mx-3 hover:text-orange-500 transition-faster">
                        <a href="https://github.com/Kreyu" class="no-underline">
                            <span class="align-middle">
                                <i class="icon-github-alt"></i>
                            </span>
                        </a>
                    </li>
                    <li class="mx-3 hover:text-orange-500 transition-faster">
                        <a href="https://telegram.me/Kreyu" class="no-underline">
                            <span class="align-middle">
                                <i class="icon-telegram-plane"></i>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        @yield('body')

        <script src="/assets/js/particles.js"></script>
        <script src="{{ mix('/js/background.js') }}"></script>

        @stack('scripts')
    </body>
</html>
