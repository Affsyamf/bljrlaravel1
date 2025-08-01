<x-layout>
    <h1 class="px-2 mb-5 py-3 font-bold">Data siswa dengan id {{ $siswa->id }} </h1>

    <div class="flow-root">
  <dl class="-my-3 divide-y divide-gray-200 text-sm *:even:bg-gray-50">
    

    <div class="grid grid-cols-1 gap-1 p-3 sm:grid-cols-3 sm:gap-4">
      <dt class="font-medium text-gray-900">Nim</dt>

      <dd class="text-gray-700 sm:col-span-2"> {{ $siswa->nim }} </dd>
    </div>

    <div class="grid grid-cols-1 gap-1 p-3 sm:grid-cols-3 sm:gap-4">
      <dt class="font-medium text-gray-900">Nama</dt>

      <dd class="text-gray-700 sm:col-span-2">{{ $siswa->nama }}</dd>
    </div>

    <div class="grid grid-cols-1 gap-1 p-3 sm:grid-cols-3 sm:gap-4">
      <dt class="font-medium text-gray-900">Tanggal lahir</dt>

      <dd class="text-gray-700 sm:col-span-2">{{ $siswa->tanggal_lahir }}</dd>
    </div>

    <div class="grid grid-cols-1 gap-1 p-3 sm:grid-cols-3 sm:gap-4">
      <dt class="font-medium text-gray-900">Jurusan</dt>

      <dd class="text-gray-700 sm:col-span-2">
        {{ $siswa->jurusan }}
      </dd>
    </div>
    
    <div class="grid grid-cols-1 gap-1 p-3 sm:grid-cols-3 sm:gap-4">
      <dt class="font-medium text-gray-900">Mentor</dt>

      <dd class="text-gray-700 sm:col-span-2">
        {{ $siswa->mentor->nama ?? 'Tidak ada mentor' }}
      </dd>
    </div>

  </dl>
</div>

<form action="{{ route('siswa.destroy', $siswa->id) }}" method="post">
  @csrf
  @method('DELETE')
  <button type="submit" class="my-8 px-4 py-2 text-white rounded cursor-pointer bg-teal-600">
    Delete Siswa
  </button>
</form>
    <x-slot:footer>
       <strong>Siswa Page</strong>
    </x-slot:footer>
</x-layout>

