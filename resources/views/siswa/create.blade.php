<x-layout>

    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        
        {{-- Judul Form --}}
        <h1 class="text-2xl font-bold text-gray-800 mb-6">Tambah Data Siswa Baru</h1>

        {{-- Form Container --}}
        <div class="bg-white p-6 rounded-lg shadow-md">
            <form method="POST" action=" {{ route('siswa.store') }} ">
                {{-- 
                    @csrf adalah directive Blade untuk keamanan. 
                    Meskipun backend belum ada, ini adalah praktik yang baik untuk selalu menyertakannya.
                --}}
                @csrf

                <!-- Input untuk NIM -->
                <div class="mb-5">
                    <label for="nim" class="block mb-2 text-sm font-medium text-gray-900">NIM</label>
                    <input type="text" name="nim" id="nim"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 
                           placeholder="Contoh: 6702223001" required value="{{ old('nim') }}">

                    @error('nim')
                        <div class="text-red-500 text-sm"> {{ $message }} </div>
                    @enderror
                </div>

                <!-- Input untuk Nama -->
                <div class="mb-5">
                    <label for="nama" class="block mb-2 text-sm font-medium text-gray-900">Nama Lengkap</label>
                    <input type="text" name="nama" id="nama"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                           placeholder="Masukkan nama lengkap" required value="{{ old('nama') }}">
                           @error('nama')
                        <div class="text-red-500 text-sm"> {{ $message }} </div>
                    @enderror
                </div>

                <!-- Input untuk Tanggal Lahir -->
                <div class="mb-5">
                    <label for="tanggal_lahir" class="block mb-2 text-sm font-medium text-gray-900">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" id="tanggal_lahir"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                           required value="{{ old('tanggal_lahir') }}">
                    @error('tanggal_lahir')
                        <div class="text-red-500 text-sm"> {{ $message }} </div>
                    @enderror
                        </div>

                <!-- Input untuk Jurusan -->
                <div class="mb-5">
                    <label for="jurusan" class="block mb-2 text-sm font-medium text-gray-900">Jurusan</label>
                    <input type="text" name="jurusan" id="jurusan"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                           placeholder="Contoh: Teknik Informatika" required value="{{ old('jurusan') }}">
                    @error('jurusan')
                        <div class="text-red-500 text-sm"> {{ $message }} </div>
                    @enderror
                        </div>

                <!-- Dropdown untuk Mentor -->
                <div class="mb-5">
                    <label for="mentor_id" class="block mb-2 text-sm font-medium text-gray-900">Pilih Mentor</label>
                    <select name="mentor_id" id="mentor_id"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 value="{{ old('mentor_id') }}"">
                        <option selected disabled>-- Pilih seorang mentor --</option>
                        @foreach ( $mentors as $mentor )
                            <option value=" {{ $mentor->id }} "> {{ $mentor->nama }} </option>
                        @endforeach
                    </select>
                    @error('mentor_id')
                        <div class="text-red-500 text-sm"> {{ $message }} </div>
                    @enderror
                </div>

                <!-- Tombol Simpan -->
                <div class="mt-6 text-right">
                    <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
                        Simpan Data
                    </button>
                </div>

                {{-- @if (errors->any())
                    <div>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li class="text-red-500 text-sm"> {{ $error }} </li>
                            @endforeach
                        </ul>
                    </div>
                @endif --}}

            </form>
        </div>
    </div>
     <x-slot:footer>
       <strong>Siswa Page</strong>
    </x-slot:footer>
</x-layout>