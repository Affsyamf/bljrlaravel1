<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Page</title>
</head>
<body>
    <h1>about, i am {{$data}} umur saya adalah {{ $umur }} </h1>
   {{-- <p>ini umur saya {{ $umur }} </p> --}}
    @if ($umur > 18)
      <p>Punya ktp</p>  
    @else
      <p>Belum punya ktp</p>
    @endif
</body>
</html>