<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <meta property="og:title" content="VeloVibes - Your happy pace">
    <meta property="og:description" content="Discover a world of biking bliss at VeloVibes, your one-stop-shop for all things bicycle-related.">
    <meta property="og:image" content="https://www.velovibes.shop/{{ asset('assets/images/og.png') }}"> <!-- URL to your website's thumbnail or logo image -->
    <meta property="og:url" content="https://www.velovibes.shop">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>
    <link href="https://fonts.bunny.net/css?family=poppins:400,500,600&display=swap" rel="stylesheet"/>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.js"></script>
</head>

<body class="font-sans antialiased">
<div class="min-h-screen mx-auto max-w-7xl">
    <header>
        <div class="bg-blue-300 flex justify-center p-2 font-bold uppercase mb-14">
            Free shipping on orders $499+
            <svg viewBox="0 0 14 10" fill="none" aria-hidden="true" focusable="false"
                 class="icon icon-arrow h-4 w-4 pt-2 ml-2"
                 xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M8.537.808a.5.5 0 01.817-.162l4 4a.5.5 0 010 .708l-4 4a.5.5 0 11-.708-.708L11.793 5.5H1a.5.5 0 010-1h10.793L8.646 1.354a.5.5 0 01-.109-.546z"
                      fill="currentColor">
                </path>
            </svg>
        </div>
        <div class="flex justify-center mb-20">
            <div class="flex justify-between h-20 items-center  align-middle text-2xl font-bold w-3/4">
                <a href="/">Home</a>
                <a href="#">Bikes</a>
                <a href="#">Accessories</a>
                <img alt="logo" class="h-24" src="{{ asset('assets/images/logo.png') }}"/>
                <a href="#">Clothing</a>
                <a href="#">Tires & Tubes</a>
                <a href="#">Sale</a>
            </div>
        </div>

    </header>
    <div>
        <div id="hero" class="flex justify-end items-end rounded-md mb-10 h-[450px] bg-cover bg-right-top"
             style="background-image: url('{{ asset('assets/images/hero.png') }}')">

        </div>
        <h2 class="text-2xl mb-4">
            New arrivals
        </h2>
        <div class="grid grid-cols-3 gap-5">
            @foreach($products as $product)
                <div>
                    <div><img alt="Product{{ $product->id }}" src="{{ asset($product->picture) }}" class="rounded-md"></div>
                    <div class="p-3">
                        <h3 class="text-xl font-bold">{{ $product->title }}</h3>
                        <div>{{ $product->price }}</div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <p class="mt-20 p-5 bg-zinc-900 text-white flex justify-center">
            VeloVibes is not a real company. It is used for <a href="https://www.x-rator.com" class="mx-1 text-amber-200">XRATOR</a> demo purposes only. No orders will be processed.
    </p>
    <div class="p-5 bg-zinc-800 text-white flex justify-center">
        Copyright {{ \Carbon\Carbon::now()->year }}
    </div>
</div>
</body>

</html>