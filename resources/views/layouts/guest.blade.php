<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        Play | Free Tailwind CSS Template for Startup and SaaS By TailGrids
    </title>
    <link rel="shortcut icon" href={{ asset('assets/images/favicon.png') }} type="image/x-icon" />
    <link rel="stylesheet" href={{ asset('assets/css/animate.css') }} />
    <link rel="stylesheet" href={{ asset('assets/css/tailwind.css') }} />

    <!-- ==== WOW JS ==== -->
    <script src={{ asset('assets/js/wow.min.js') }}></script>
    <script>
        new WOW().init();
    </script>
</head>

<body class="bg-[#F4F7FF] min-h-screen">
    <div>
        {{ $slot }}
    </div>

</body>

</html>
