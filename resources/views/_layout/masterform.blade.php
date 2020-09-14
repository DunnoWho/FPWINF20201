@extends('_layout.main')
@section('content')
<section class="content-header">
    <h1>
        @yield('content-header')
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
                    <h3 class="box-title">@yield('box-title')</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="POST" action="@yield('form-action')">
                    @csrf
                    <div class="box-body">
                        @yield('form-content')
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
