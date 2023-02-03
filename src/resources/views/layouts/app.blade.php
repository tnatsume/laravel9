<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Site Info -->
    @yield('title')

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@3.0.2/destyle.min.css">
    <link rel="stylesheet" href="{{asset('common/css/style.min.css')}}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Klee+One:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <header id="header">
            @yield('header')
        </header>

        <main id="main">
            @yield('main')
        </main>

        <footer id="footer">
            <amall>&copy; 2023 Natsume</small>
        </footer>

    </div>
</body>
</html>