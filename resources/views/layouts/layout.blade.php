<!DOCTYPE html>
<html lang="en-NP">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Doko</title>
    <link rel="shortcut icon" href="{{ asset('icons/deer_logo.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    @vite('resources/css/app.css')
</head>

<body class="bg-[#111827] max-w-7xl mx-auto px-3 min-h-screen flex flex-col">
    @yield('content')
    @include('components.footer')
    <script src="{{ asset('js/particle.js') }}"></script>
    <script src="{{ asset('js/my.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
</body>

</html>
