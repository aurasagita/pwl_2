<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Mahasiswa;
use App\Models\MahasiswaModel;
use App\Models\MataKuliahModel;
use App\Models\MhsMatkul;
use App\Models\MhsMatkulModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\PDF;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mhs = MahasiswaModel::all();
        return view('mahasiswa')
                    ->with('mhs', $mhs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = Kelas::all();
        return view('create_mahasiswa', ['kelas'=>$kelas])
                    ->with('url_form', url('/mahasiswa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'nim'=>'required|string|max:10|unique:mahasiswa,nim',
            'nama'=>'required|string|max:50',
            'foto' => 'required|image|mimes:jpeg,png,jpg',
            'kelas_id'=>'required',
            'jk'=>'required|in:l,p',
            'tempat_lahir'=>'required|string|max:50',
            'tanggal_lahir'=>'required|date',
            'alamat'=>'required|string|max:255',
            'hp'=>'required|digits_between:6,15'
        ]);

        // MahasiswaModel::insert($request->except(['_token']));
        $image_name = $request->file('foto')->store('images', 'public');

        MahasiswaModel::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'foto' => $image_name,
            'kelas_id' => $request->kelas_id,
            'jk' => $request->jk,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'hp' => $request->hp,

        ]);

        //$data = MahasiswaModel::create($request->except(['_token']));
        return redirect('mahasiswa')
            ->with('success', 'Mahasiswa Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Mahasiswa = MahasiswaModel::where('id',$id)->get();
        return view('Mahasiswa.detail', ['Mahasiswa' => $Mahasiswa[0]]);
    }
    public function nilai($id)
    {
        $Mahasiswa = MahasiswaModel::where('id',$id)->get();
        $matkul = MhsMatkulModel::where('mahasiswa_id',$id)->get();
        return view ('Mahasiswa.matakuliah',  ['Mahasiswa' => $Mahasiswa[0]])
                // -with('Mahasiswa',$Mahasiswa[0])
                ->with('matkul',$matkul);
                
                
    }
    /**;
     * Show the form for editing the specified resource.,
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mahasiswa = MahasiswaModel::where('id',$id)->get();
        $kelas = kelas::all();
        return view('create_mahasiswa', ['kelas'=>$kelas])
            ->with('mhs', $mahasiswa[0])
            ->with('url_form', url('/mahasiswa/'.$id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nim'=>'required|string|max:10|unique:mahasiswa,nim,'.$id,
            'nama'=>'required|string|max:50',
            'foto' => 'image|mimes:jpeg,png,jpg',
            'kelas_id'=> 'required',
            'jk'=>'required|in:l,p',
            'tempat_lahir'=>'required|string|max:50',
            'tanggal_lahir'=>'required|date',
            'alamat'=>'required|string|max:255',
            'hp'=>'required|digits_between:6,15'
        ]);

        // MahasiswaModel::where('id', '=', $id)->update($request->except(['_token', '_method']));

        $image_name = $request->file('foto')->store('images', 'public');

        MahasiswaModel::where('id', $id)->update([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'foto' => $image_name,
            'jk' => $request->jk,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'hp' => $request->hp,
            'kelas_id' => $request->kelas_id,
        ]);

        return redirect('mahasiswa')
            ->with('success', 'Mahasiswa Berhasil Ditambahkan');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mahasiswa = MahasiswaModel::where('id', $id)->first();
        Storage::disk('public')->delete($mahasiswa->foto);
        $mahasiswa->delete();

        return redirect('mahasiswa')
        ->with('success', 'Mahasiswa Berhasil Dihapus');
    }

    public function cetak_pdf($id) {
        $mahasiswa = MahasiswaModel::where('id',$id)->first();
        $matkul = MhsMatkulModel::where('mahasiswa_id',$id)->get();
        // return view('mahasiswa.mahasiswa_pdf')
        //         ->with('mahasiswa', $mahasiswa)
        //         ->with('khs', $khs);
        $pdf = Pdf::loadview('mahasiswa.mahasiswa_pdf', ['mahasiswa' => $mahasiswa, 'matkul' => $matkul]);
        return $pdf->stream();
    }
}

