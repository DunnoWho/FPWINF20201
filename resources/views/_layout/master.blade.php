@extends('_layout.main')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        @yield('content-header')
    </h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">@yield('content-header') List</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse">
                            <i class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <p>
                         <a class="btn btn-success" href="@yield('insert-link')">Add @yield('model')</a>
                    </p>
                    <table class="table table-hover table-bordered">
                        @yield('data-table')
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
                <div class="box-header with-border">
                    <h3 class="box-title">Search Form</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="GET" action="@yield('form-action')">
                    <div class="box-body">
                        @yield('search-form')
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>
@endsection
