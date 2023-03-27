@extends('layout.template')

@section('content')
<section class="content">
    
<!-- Default box -->
<div class="card">
    <div class="card-header">
      <h3 class="card-title">SELAMAT DATANG!!</h3>

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
      Selamat Datang Di Website Saya <br>
      Website Pemograman Web Lanjut <br>
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

  @push('alert')
    <script>
        alert('Welcome To My Website >.<');
    </script>
  @endpush