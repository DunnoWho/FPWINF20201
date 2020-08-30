@extends('_layout')
@section('title', "Daftar Mahasiswa")
@section('content')
<section class="content-header">
    <h1>
        Daftar Mahasiswa
    </h1>
<a class="btn btn-success" href="{{ url("/mahasiswa/insert") }}">Tambah mahasiswa</a>
</section>
<!-- Main content -->
<section class="content">
    <div class="row">
        @foreach ($mahasiswa as $m)
        @php
        $color = "";
        if($m["ipk"] > 3){
        $color = "bg-aqua-active";
        }
        elseif ($m["ipk"] > 2) {
        $color = "bg-purple-active";
        }
        else{
        $color = "bg-red-active";
        }
        @endphp
        <div class="col-md-4">
            <!-- Widget: user widget style 1 -->
            <div class="box box-widget widget-user">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header {{ $color }}">
                    <h3 class="widget-user-username">
                    <a href="{{ url("/mahasiswa/update/$m[nrp]") }}">{{ $m["nama"] }}</a>
                    </h3>
                    <h5 class="widget-user-desc"></h5>
                </div>
                <div class="widget-user-image">
                    <img class="img-circle" src="{{ $m["propic"] }}" alt="User Avatar">
                </div>
                <div class="box-footer">
                    <div class="row">
                        <div class="col-sm-4 border-right">
                            <div class="description-block">
                                <h5 class="description-header">{{ $m["sks"] }}</h5>
                                <span class="description-text">SKS</span>
                            </div>
                            <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 border-right">
                            <div class="description-block">
                                <h5 class="description-header">{{ $m["ipk"] }}</h5>
                                <span class="description-text">IPK</span>
                            </div>
                            <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4">
                            <div class="description-block">
                                <h5 class="description-header">{{ $m["semester"] }}</h5>
                                <span class="description-text">SEMESTER</span>
                            </div>
                            <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
            </div>
            <!-- /.widget-user -->
        </div>
        @endforeach
    </div>
</section>
<!-- /.content -->
@endsection
