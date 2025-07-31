<x-layout>
    <h1>daftar siswa</h1>
    <ul>
        @foreach ($data as $item )
            <li>
                 {{$item['nama']}} :
                 {{ $item['nim'] }}
            </li>
        @endforeach
    <x-slot:footer>
       <strong>Siswa Page</strong>
    </x-slot:footer>
</x-layout>

