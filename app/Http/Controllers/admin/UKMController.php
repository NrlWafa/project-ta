<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\UkmNurulWafa;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UKMController extends Controller
{

    public function index()
    {
        $ukm = UkmNurulWafa::all();

        $data = [
            'title' => 'Data UKM',
            'ukm' => $ukm,
        ];
        return view("admin.ukm.index", $data);
    }


    public function create()
    {
        $ukm = UkmNurulWafa::all();
        $data = [
            'title' => 'Tambah Daftar UKM',
            'url' => url('Data_UKM/store'),
            'ukm_nurulwafa' => $ukm,
        ];
        return view('admin.ukm.form', $data);
    }

    public function store(Request $request)
    {
        try {
            $data = $request->validate(
                [
                    'ukm' => 'required|string',
                    'deskripsi' => 'required|string',

                ]
            );


            $ukm = UkmNurulWafa::create($data);
            // if ($request->hasFile('surat_file') && $request->file('surat_file')->isValid()) {
            //     if ($mahasiswa->addMediaFromRequest('surat_file')->toMediaCollection('surat_file')) {
            flash()->addSuccess('Data Mahasiswa berhasil ditambahkan');
            //         return redirect()->route('keluar.detail', $mahasiswa->id);
            //     }
            // }
            return redirect('Data_UKM');
        } catch (Exception $er) {
            flash()->addError($er->getMessage());
            return redirect()->back();
        }
    }

    public function print()
    {
        $ukm = UkmNurulWafa::joinJenisUkmDeskripsi()
            ->where('id_jenis_surat', 2)
            ->get();
        $data = [
            'title' => 'Data UKM',
            'ukm' => $ukm,
        ];
        return view('admin.ukm.print', $data);
    }

    public function edit($id)
    {
        $ukm = UkmNurulWafa::findOrFail($id);
        $data = [
            'title' => 'Edit Data UKM',
            'url' => url('Data_UKM/' . $id),
            'ukm' => $ukm,
        ];

        return view('admin.ukm.form', $data);
    }

    public function update(Request $request, $id)
    {
        try {
            $ukm = UkmNurulWafa::findOrFail($id);
            $data = $request->validate(
                [
                    'ukm' => 'required|string',
                    'deskripsi' => 'required|string',
                ]
            );

            $ukm->update($data);

            flash()->addSuccess('Data UKM berhasil diperbarui');
            return redirect('Data_UKM');
        } catch (Exception $er) {
            flash()->addError($er->getMessage());
            return redirect()->back();
        }
    }

    public function destroy($id)
    {
        try {
            $ukm = UkmNurulWafa::findOrFail($id);
            $ukm_nama = $ukm->nama;
            $ukm->delete();
            flash()->addSuccess('Data UKM ' . $ukm_nama . ' berhasil dihapus');
            return redirect('Data_UKM');
        } catch (Exception $er) {
            flash()->addError($er->getMessage());
            return redirect()->back();
        }
    }
}
