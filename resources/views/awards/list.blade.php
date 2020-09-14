@extends('_layout.master')
@section('title', "Awards")
@section('content-header', "Awards")
@section('sidebar-menu-awards-active', "active")
@section('model', "award")
@section('insert-link', "/awards/create")
@section('data-table')
<tr>
    <th>Name</th>
    <th>Icon</th>
    <th>Action</th>
</tr>
@foreach ($awards as $i)
<tr>
    <td>{{ $i->name }}</td>
    <td><i class="fa fa-{{ $i->icon }}" style="color:{{ $i->color }}"></i></td>
    <td><a href="/awards/edit/{{ $i->id }}" class="btn btn-primary btn-xs">Edit</a> <a
        href="/awards/destroy/{{ $i->id }}" class="btn btn-danger btn-xs">Delete</a></td>
</tr>
@endforeach
@endsection
@section('form-action',"/awards")

@section('search-form')
@foreach (array("name", "icon", "color") as $i)
<div class="form-group">
    <label for="{{ $i }}-txt">{{ ucwords(str_replace("-", " ", $i)) }}</label>
    <input type="text" class="form-control" id="{{ $i }}-txt" name="{{ $i }}" value="{{ old("$i") }}">
</div>
@endforeach
@endsection
