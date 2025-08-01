<?php

namespace App\Http\Controllers;

use App\Models\Mentor;
use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaContoller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = Siswa::with('mentor')->orderBy('id', 'asc')->paginate(10);
        return view ('siswa.siswa', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $mentors = Mentor::all();
        return view('siswa.create', ['mentors' => $mentors]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'nama' => 'required|string|min:3',
            'nim' => 'required|integer|max:20|unique:siswa,nim',
            'tanggal_lahir' => 'required|date',
            'jurusan' => 'required|string|max:100',
            'mentor_id' => 'nullable|exists:mentors,id',
        ]);

        Siswa::create([
            'nama' => $validated ['nam'],
            'nim' => $validated ['nim'],           
            'tanggal_lahir' => $validated ['tanggal_lahir'],
            'jurusan' => $validated ['jurusan'],
            'mentor_id' => $validated ['mentor_id'],
        ]);

        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $siswa = Siswa::with('mentor')->findOrFail($id); 
        return view ('siswa.show', ['siswa' => $siswa ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();

        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil dihapus.');
    }
}
