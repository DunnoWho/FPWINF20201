@extends('_layout.masterform')
@section('title', "Insert Countries")
@section('content-header', "Countries")
@section('box-title', "Insert Countries")
@section('form-action', "/countries/store")

@section('form-content')
@foreach (array(
"name", "code"
) as $i)
<div class="form-group">
    <label for="{{ $i }}-txt">{{ ucwords(str_replace("_", " ", $i)) }}</label>
    <input type="text" class="form-control" id="{{ $i }}-txt" name="{{ $i }}" value="@yield($i."val")">
</div>
@endforeach
@endsection
