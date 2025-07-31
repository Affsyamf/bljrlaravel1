<x-layout>
    <h1>about, i am {{$data}} umur saya adalah {{ $umur }} </h1>
   {{-- <p>ini umur saya {{ $umur }} </p> --}}
    @if ($umur > 18)
      <p>Punya ktp</p>  
    @else
      <p>Belum punya ktp</p>
    @endif
    <x-slot:footer>
       <strong>About Page</strong>
    </x-slot:footer>
</x-layout>

