<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mas Ganteng</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <nav>
        <div class="logo">
            <h4>Mas Ganteng</h4>
        </div>
        <ul>
            <li class="active"><a href="/">Home</a></li>
            <li><a href="/product">Product</a></li>
            <li><a href="/service">Service</a></li>
            <li><a href="/gallery">Gallery</a></li>
            <li><a href="/about">About</a></li>
        </ul>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2024 Mas Ganteng. All Rights Reserved.</p>
    </footer>
</body>
</html>
