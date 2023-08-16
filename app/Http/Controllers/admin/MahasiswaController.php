<?php

namespace App\Http\Controllers\admin;

use Illuminate\Support\Facades\File as FacadesFile;
use App\Http\Controllers\Controller;
use App\Models\DeskripsiNurulWafa;
use App\Models\MahasiswaNurulWafa;
use App\Models\UkmNurulWafa;
use Exception;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = MahasiswaNurulWafa::all();

        $data = [
            'title' => 'Data Mahasiswa',
            'mahasiswa' => $mahasiswa,
        ];
        return view("admin.mahasiswa.index", $data);
    }

    public function detail($id)
    {
        $mahasiswa = MahasiswaNurulWafa::joinJenisUkmDeskripsi()->findOrFail($id);
        $data = [
            'title' => 'Surat Keluar Nomor ' . $mahasiswa->id,
            'mahasiswa' => $mahasiswa,
        ];
        return view('admin.mahasiswa.detail', $data);
    }

    public function create()
    {
        $mahasiswa = UkmNurulWafa::all();
        $data = [
            'title' => 'Tambah Daftar Mahasiswa',
            'url' => url('Data_Mahasiswa/store'),
            'unit_penerbit' => $mahasiswa,
        ];
        return view('admin.mahasiswa.form', $data);
    }

    public function store(Request $request)
    {
        try {
            $data = $request->validate(
                [
                    'nim' => 'required|string',
                    'nama' => 'required|string',
                    'tgl_lahir' => 'required|date',
                    'alamat' => 'required|string',
                ]
            );


            $mahasiswa = MahasiswaNurulWafa::create($data);
            // if ($request->hasFile('surat_file') && $request->file('surat_file')->isValid()) {
            //     if ($mahasiswa->addMediaFromRequest('surat_file')->toMediaCollection('surat_file')) {
            flash()->addSuccess('Data Mahasiswa berhasil ditambahkan');
            //         return redirect()->route('keluar.detail', $mahasiswa->id);
            //     }
            // }
            return redirect('Data_Mahasiswa');
        } catch (Exception $er) {
            flash()->addError($er->getMessage());
            return redirect()->back();
        }
    }

    public function print()
    {
        $mahasiswa = MahasiswaNurulWafa::joinJenisUkmDeskripsi()
            ->where('id_jenis_surat', 2)
            ->get();
        $data = [
            'title' => 'Data Surat Keluar',
            'mahasiswa' => $mahasiswa,
        ];
        return view('admin.keluar.print', $data);
    }

    public function edit($id)
    {
        $mahasiswa = MahasiswaNurulWafa::findOrFail($id);
        $data = [
            'title' => 'Edit Data Mahasiswa',
            'url' => url('Data_Mahasiswa/' . $id),
            'mahasiswa' => $mahasiswa,
        ];

        return view('admin.mahasiswa.form', $data);
    }



    public function update(Request $request, $id)
    {
        try {
            $mahasiswa = MahasiswaNurulWafa::findOrFail($id);
            $data = $request->validate(
                [
                    'nim' => 'required|string',
                    'nama' => 'required|string',
                    'tgl_lahir' => 'required|date',
                    'alamat' => 'required|string',
                ]
            );

            $mahasiswa->update($data);

            flash()->addSuccess('Data Mahasiswa berhasil diperbarui');
            return redirect('Data_Mahasiswa');
        } catch (Exception $er) {
            flash()->addError($er->getMessage());
            return redirect()->back();
        }
    }

    public function destroy($id)
    {
        try {
            $mahasiswa = MahasiswaNurulWafa::findOrFail($id);
            $mahasiswa_nama = $mahasiswa->nama;
            $mahasiswa->delete();
            flash()->addSuccess('Data Mahasiswa ' . $mahasiswa_nama . ' berhasil dihapus');
            return redirect('Data_Mahasiswa');
        } catch (Exception $er) {
            flash()->addError($er->getMessage());
            return redirect()->back();
        }
    }
}
