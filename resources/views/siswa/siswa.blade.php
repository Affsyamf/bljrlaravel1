<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Siswa Page</title>
</head>
<body>
    <h1>daftar siswa</h1>
    <ul>
        @foreach ($data as $item )
            <li>
                 {{$item['nama']}} :
                 {{ $item['nim'] }}
            </li>
        @endforeach
        {{-- <li> {{ $data[0]['nama'] }} </li>
        <li> {{ $data[1]['nama'] }} </li>
        <li> {{ $data[2]['nama'] }} </li> --}}
    </ul>
</body>
</html>