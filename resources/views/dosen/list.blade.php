@extends('_layout')
@section('title', "Daftar Dosen")
@section('content')
<section class="content-header">
    <h1>
        Daftar Dosen
    </h1>
</section>
<!-- Main content -->
<section class="content">
    <div class="row">
        @foreach ($dosen as $d)
        @php
        $color = "";
        if($d["rating"] > 5){
        $color = "bg-aqua-active";
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
                    <h3 class="widget-user-username">{{ $d["nama"] }}</h3>
                    <h5 class="widget-user-desc"></h5>
                </div>
                <div class="widget-user-image">
                    <img class="img-circle" src="{{ $d["propic"] }}" alt="User Avatar">
                </div>
                <div class="box-footer">
                    <div class="row">
                        <div class="col-sm-4 border-right">
                            <div class="description-block">
                                <h5 class="description-header">{{ $d["mahasiswa"] }}</h5>
                                <span class="description-text">MAHASISWA</span>
                            </div>
                            <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 border-right">
                            <div class="description-block">
                                <h5 class="description-header">{{ $d["rating"] }}</h5>
                                <span class="description-text">RATING</span>
                            </div>
                            <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4">
                            <div class="description-block">
                                <h5 class="description-header">{{ $d["sks"] }}</h5>
                                <span class="description-text">SKS</span>
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
