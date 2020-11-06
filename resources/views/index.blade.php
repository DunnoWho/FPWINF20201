@extends('layout')
@section('pageContent')
<div class="row align-items-stretch">
    @foreach ($images as $i)
    <div class="col-6 col-md-6 col-lg-4 aos-init aos-animate" data-aos="fade-up">
        <a href="/download/{{$i->id}}" class="d-block photo-item">
            <img src="/storage/photos/{{$i->filename}}" alt="Image" class="img-fluid">
            <div class="photo-text-more">
                <div class="photo-text-more">
                    <h3 class="heading">{{$i->title}}</h3>
                    <span class="meta" style="padding: 10px">Diupload pada {{$i->diupload_pada}}
                        ({{$i->diupload_diff}}), kadaluarsa pada
                        {{$i->kadaluarsa_pada}}</span>
                </div>
            </div>
        </a>
    </div>
    @endforeach
</div>
@endsection
