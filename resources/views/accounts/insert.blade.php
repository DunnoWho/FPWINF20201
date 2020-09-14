@extends('_layout.masterform')
@section('title', "Insert Account")
@section('content-header', "Account")
@section('box-title', "Insert Account")
@section('form-action', "/accounts/store")

@section('form-content')
@foreach (array(
"username", "join_date", "highscore"
) as $i)
<div class="form-group">
    <label for="{{ $i }}-txt">{{ ucwords(str_replace("_", " ", $i)) }}</label>
    <input type="text" class="form-control" id="{{ $i }}-txt" name="{{ $i }}" value="@yield($i."val")">
</div>
@endforeach
<div class="form-group">
    <label for="country-cb">Country</label>
    <select name="country" id="country-cb" class="form-control">
        @foreach ($countries as $i)
        <option value="{{ $i->id }}">{{ $i->name }}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="awards-cb">Awards</label>
    <select name="awards[]" id="awards-cb" class="form-control" multiple>
        @foreach ($awards as $i)
        <option value="{{ $i->id }}">{{ $i->name }}</option>
        @endforeach
    </select>
</div>
<script>
    $(document).ready(function () {
        $("#country-cb").select2();
        $("#awards-cb").select2();
        $("#country-cb").val(@yield("countryval", 1)).trigger("change");
        $("#awards-cb").val([@yield("awardval")]).trigger("change");
    });
</script>
@endsection
