@extends('_layout.main')
@section('title', "429")
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        429 Error Page
    </h1>
</section>

<!-- Main content -->
<section class="content">

    <div class="error-page">
        <h2 class="headline text-red">429</h2>

        <div class="error-content">
            <h3><i class="fa fa-warning text-red"></i> Oops! You sent too many requests...</h3>
            <p>
                We limit every users with 3 requests per minute to lighten the load to our server so that everybody can access our server. Thank you for your understanding...
            </p>
        </div>
    </div>
    <!-- /.error-page -->

</section>
<!-- /.content -->
@endsection
