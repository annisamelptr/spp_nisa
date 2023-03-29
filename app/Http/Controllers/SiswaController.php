<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = Siswa::paginate(5);
        return view('admin.siswa.index', compact('siswa'));
    }

    public function create()
    {
        return view('admin.siswa.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nisn'      => 'required|max:10',
            'nis'       => 'required|max:8',
            'nama'      => 'required|max:255',
            'id_kelas'  => 'required|',
            'alamat'    => 'required|',
            'no_telp'   => 'required|min:11|max:13',
            'id_spp'    => 'required|'
        ]);

        $siswa = Siswa::create([
            'nisn'          => $request['nisn'],
            'nis'           => $request['nis'],
            'nama'          => $request['nama'],
            'id_kelas'      => $request['id_kelas'],
            'alamat'        => $request['alamat'],
            'no_telp'       => $request['no_telp'],
            'id_spp'        => $request['id_spp']
        ]);

        if ($siswa) {
            return redirect()
                ->route('siswa.index')
                ->with([
                    'success' => 'Data Siswa Berhasil Ditambahkan!'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Terjadi Kesalahan, Coba Lagi!'
                ]);
        }
    }

    public function edit($nisn)
    {
        $siswa = Siswa::findOrFail($nisn);
        return view('admin.siswa.edit', compact('siswa'));
    }
    
    public function update(Request $request, $nisn)
    {
        $this->validate($request, [
            'nisn'      => 'required|max:10',
            'nis'       => 'required|max:8',
            'nama'      => 'required|max:255',
            'id_kelas'  => 'required|',
            'alamat'    => 'required|',
            'no_telp'   => 'required|min:11|max:13',
            'id_spp'    => 'required|'
        ]);

        $siswa = Siswa::findOrFail($nisn);

        $siswa->update([
            'nisn'          => $request['nisn'],
            'nis'           => $request['nis'],
            'nama'          => $request['nama'],
            'id_kelas'      => $request['id_kelas'],
            'alamat'        => $request['alamat'],
            'no_telp'       => $request['no_telp'],
            'id_spp'        => $request['id_spp']
        ]);

        if ($siswa) {
            return redirect()
                ->route('siswa.index')
                ->with([
                    'success' => 'Data Siswa Berhasil Diperbarui!'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Terjadi Kesalahan, Coba Lagi!'
                ]);
        }
    }

    public function destroy($nisn)
    {
        $siswa = Siswa::findOrFail($nisn);
        $siswa->delete();

        if ($siswa) {
            return redirect()
                ->route('siswa.index')
                ->with([
                    'success' => 'Data Siswa Berhasil Dihapus!'
                ]);
        } else {
            return redirect()
                ->route('siswa.index')
                ->with([
                    'error' => 'Terjadi Kesalahan, Coba Lagi!'
                ]);
        }
    }
}