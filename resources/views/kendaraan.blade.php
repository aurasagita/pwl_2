@extends('layout.template')

@section('content')
<section class="content">
    



<!-- Default box -->
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Kendaraan</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
          <i class="fas fa-minus"></i>
        </button>
        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
          <i class="fas fa-times"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
      <table class="table">
      <thead>
        <tr>
          <th>no</th>
          <th>merek</th>
          <th>jenis</th>
          <th>tahun buat</th>
          <th>warna</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($kendaraan as $no => $m)
        <tr>
          <td>{{$no}}</td>
          <td>{{$m->merek}}</td>
          <td>{{$m->jenis}}</td>
          <td>{{$m->tahun_2}}</td>
          <td>{{$m->warna}}</td>
        </tr>
            
        @endforeach
      </tbody>
      </table>

    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      Footer
    </div>
    <!-- /.card-footer-->
  </div>
  <!-- /.card -->

</section>
  @endsection