@extends('_layout.master')
@section('title', "Accounts")
@section('content-header', "Accounts")
@section('sidebar-menu-accounts-active', "active")
@section('model', "account")
@section('insert-link', "/accounts/create")
@section('data-table')
<tr>
    <th>Username</th>
    <th>Join Date</th>
    <th>Highscore</th>
    <th>Country</th>
    <th>Awards</th>
    <th>Action</th>
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
        for ($j=0; $j < count($icons); $j++) { $arr[]=array("icon"=> $icons[$j], "color" => $colors[$j]);
            }
            @endphp
            @foreach ($arr as $j)
            <i class="fa fa-{{ $j["icon"] }}" style="color:{{ $j["color"] }}"></i>
            @endforeach
            @else
            &nbsp;
            @endif
    </td>
    <td><a href="/accounts/edit/{{ $i->id }}" class="btn btn-primary btn-xs">Edit</a> <a
            href="/accounts/destroy/{{ $i->id }}" class="btn btn-danger btn-xs">Delete</a></td>
</tr>
@endforeach
@endsection
@section('form-action',"/accounts")

@section('search-form')
@foreach (array("username", "join-date-min", "join-date-max", "highscore-min", "highscore-max") as $i)
<div class="form-group">
    <label for="{{ $i }}-txt">{{ ucwords(str_replace("-", " ", $i)) }}</label>
    <input type="text" class="form-control" id="{{ $i }}-txt" name="{{ $i }}" value="{{ old("$i") }}">
</div>
@endforeach
<div class="form-group">
    <label for="country-cb">Country</label>
    <select name="country[]" id="country-cb" class="form-control" multiple>
        @foreach ($countries as $i)
        <option value="{{ $i->id }}">{{ $i->name }}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="awards-cb">Awards</label>
    <select name="award[]" id="awards-cb" class="form-control" multiple>
        @foreach ($awards as $i)
        <option value="{{ $i->id }}">{{ $i->name }}</option>
        @endforeach
    </select>
</div>
<script>
    $(document).ready(function () {
        $("#country-cb").select2();
        $("#awards-cb").select2();
    });
</script>
@endsection
