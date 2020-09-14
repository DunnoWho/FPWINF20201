@extends('_layout.main')
@section('title', "Basic Query")
@section('sidebar-menu-basic-active', "active")
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Basic Queries
    </h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Accounts List</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse">
                            <i class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover table-bordered">
                        <tr>
                            <th>Username</th>
                            <th>Join Date</th>
                            <th>Highscore</th>
                            <th>Country</th>
                            <th>Awards</th>
                        </tr>
                        @foreach ($accounts as $i)
                        <tr>
                            <td>{{ $i->username }}</td>
                            <td>{{ $i->join_date }}</td>
                            <td>{{ $i->highscore }}</td>
                            <td><span class="flag-icon flag-icon-{{ $i->country_code }}"></span> {{ $i->country_name }}</td>
                                <td>
                                    @if ($i->icons)
                                        @php
                                            $arr = array();
                                            $icons = explode(",", $i->icons);
                                            $colors = explode(",", $i->colors);
                                            for ($j=0; $j < count($icons); $j++) {
                                                $arr[] = array("icon" => $icons[$j], "color" => $colors[$j]);
                                            }
                                        @endphp
                                        @foreach ($arr as $j)
                                        <i class="fa fa-{{ $j["icon"] }}" style="color:{{ $j["color"] }}"></i>
                                        @endforeach
                                    @else
                                        &nbsp;
                                    @endif
                                </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Country List</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse">
                            <i class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover table-bordered">
                        <tr>
                            <th>Name</th>
                            <th>Country code</th>
                            <th>Flag</th>
                        </tr>
                        @foreach ($countries as $i)
                        <tr>
                            <td>{{ $i->name }}</td>
                            <td>{{ $i->code }}</td>
                            <td><span class="flag-icon flag-icon-{{ $i->code }}"></span></td>
                        </tr>
                        @endforeach
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Award List</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse">
                            <i class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover table-bordered">
                        <tr>
                            <th>Name</th>
                            <th>Icon</th>
                        </tr>
                        @foreach ($awards as $i)
                        <tr>
                            <td>{{ $i->name }}</td>
                            <td><i class="fa fa-{{ $i->icon }}" style="color:{{ $i->color }}"></i></td>
                        </tr>
                        @endforeach
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>
@endsection
