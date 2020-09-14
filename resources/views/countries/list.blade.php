@extends('_layout.master')
@section('title', "Countries")
@section('content-header', "Countries")
@section('sidebar-menu-countries-active', "active")
@section('model', "country")
@section('insert-link', "/countries/create")
@section('data-table')
<tr>
    <th>Name</th>
    <th>Country code</th>
    <th>Flag</th>
    <th>Action</th>
</tr>
@foreach ($countries as $i)
<tr>
    <td>{{ $i->name }}</td>
    <td>{{ $i->code }}</td>
    <td><span class="flag-icon flag-icon-{{ $i->code }}"></span></td>
    <td><a href="/countries/edit/{{ $i->id }}" class="btn btn-primary btn-xs">Edit</a> <a
        href="/countries/destroy/{{ $i->id }}" class="btn btn-danger btn-xs">Delete</a></td>
</tr>
@endforeach
@endsection
@section('form-action',"/countries")

@section('search-form')
@foreach (array("name", "code") as $i)
<div class="form-group">
    <label for="{{ $i }}-txt">{{ ucwords(str_replace("-", " ", $i)) }}</label>
    <input type="text" class="form-control" id="{{ $i }}-txt" name="{{ $i }}" value="{{ old("$i") }}">
</div>
@endforeach
@endsection
