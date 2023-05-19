@extends('layout.template')

@section('content')
<section class="content">

    <!--Default box-->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">NILAI MATA KULIAH</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widge="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widge="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>Nama : </b>{{$Mahasiswa->nama}}</li>
                <li class="list-group-item"><b>Kelas : </b>{{$Mahasiswa->kelas->nama_kelas}}</li>
                <li class="list-group-item"><b>Jk : </b>{{$Mahasiswa->jk}}</li>
                <li class="list-group-item"><b>Tempat_lahir : </b>{{$Mahasiswa->tempat_lahir}}</li>
                <li class="list-group-item"><b>Tanggal_lahir : </b>{{$Mahasiswa->tanggal_lahir}}</li>
                <li class="list-group-item"><b>Alamat : </b>{{$Mahasiswa->alamat}}</li>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Nama matkul</th>
                            <th>sks</th>
                            <th>jam</th>
                            <th>Semester</th>
                            <th>Nilai</th>

                        </tr>
                    </thead>
                    </tbody>

                    @if($matkul->count()>0)
              @foreach($matkul as $row)
              <tr>
                <td>{{$row->matakuliah->id}}</td>
                <td>{{$row->matakuliah->nama_matkul}}</td>
                <td>{{$row->matakuliah->sks}}</td>
                <td>{{$row->matakuliah->jam}}</td>
                <td>{{$row->matakuliah->semester}}</td>
                <td>{{$row->nilai}}</td>

                
              </tr>
              @endforeach
            @else
            <tr>
              <td colspan="6" class="text-center">Data tidak ada</td>
            </tr>
            @endif
                </table>
                <a href="{{ url('/mahasiswa/cetak_pdf/' . $Mahasiswa->id) }}" class="btn btn-primary">Cetak KRS</a>
            </ul>
        </div>
    </div>
      
    <!-- /.card -->

    </section>
@endsection