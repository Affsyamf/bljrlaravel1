<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>
<body>
    <nav>
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/contact">Contact</a>
        <a href="/siswa">Siswa</a>
    </nav>
    <main>
        {{ $slot }}
    </main>
    
    <footer>
        ini footer <span> {{ $footer }} </span>
    </footer>
</body>
</html>