<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">

    <title>Teknik</title>
</head>
<body>
    <main>
        <div>
            <a id="logo" href="/">
                <img src="{{ asset('https://img2.pngdownload.id/20180511/chq/kisspng-mechanical-engineering-logo-clip-art-5af60129d5c396.8758087615260715938756.jpg') }}" alt="logo">
            </a>            
        </div>

        <div class="card">
            {{ $slot }}
        </div>
    </main>
</body>
</html>