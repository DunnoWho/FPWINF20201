@extends('_layout')
@section('title', "Tambah Mahasiswa")
@section('content')
<section class="content-header">
    <h1>
        @yield('content-header',"Tambah Mahasiswa")
    </h1>
</section>
<!-- Main content -->
<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Quick Example</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="nrptxt">NRP</label>
                  <input type="text" class="form-control" id="nrptxt" placeholder="NRP" value="@yield('nrpval')" @yield('nrpdisabled')>
                </div>
                <div class="form-group">
                    <label for="namatxt">Nama</label>
                    <input type="text" class="form-control" id="namatxt" placeholder="Nama" value="@yield('namaval')">
                  </div>
                  <div class="form-group">
                    <label for="emailtxt">Email</label>
                    <input type="email" class="form-control" id="emailtxt" placeholder="Email" value="@yield('emailval')">
                  </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

        </div>
        <!--/.col (left) -->
      </div>
</section>
<!-- /.content -->
@endsection
