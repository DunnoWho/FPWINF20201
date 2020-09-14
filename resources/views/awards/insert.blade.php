@extends('_layout.masterform')
@section('title', "Insert Awards")
@section('content-header', "Awards")
@section('box-title', "Insert Awards")
@section('form-action', "/awards/store")

@section('form-content')
@foreach (array(
"name", "icon"
) as $i)
<div class="form-group">
    <label for="{{ $i }}-txt">{{ ucwords(str_replace("_", " ", $i)) }}</label>
    <input type="text" class="form-control" id="{{ $i }}-txt" name="{{ $i }}" value="@yield($i."val")">
</div>
@endforeach
<div class="form-group" for="color-txt">
    <label>Color picker:</label>
    <input type="text" class="form-control" id="color-txt" name="color" value="@yield("colorval")">
</div>
<script>
    $(document).ready(function () {
        $('#color-txt').colorpicker();
    });
</script>
@endsection
