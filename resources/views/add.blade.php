@extends('layout')
@section('pageContent')
<div class="row justify-content-center">
    <div class="col-md-6 pt-4">
        <h2 class="text-white mb-4">Upload Fotomu!</h2>
        <div class="row">
            <div class="col-md-12">
                <p class="mb-5">Upload fotomu menggunakan formulir di bawah! Jangan lupa untuk mengisi judul dari fotomu dan isi juga detail emailmu agar kami bisa memberitahumu ketika foto sudah selesai diupload!</p>
                <div class="row">
                    <div class="col-md-12">
                        <form action="/do-add" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label class="text-white" for="subject">Foto</label>
                                    <input type="file" name="photo" id="photo" class="form-control" required>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label class="text-white" for="title">Judul foto</label>
                                    <input type="text" name="title" id="title" class="form-control" required>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label class="text-white" for="title">Email</label>
                                    <input type="email" name="email" id="email" class="form-control" required>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <input type="submit" value="Upload Photo" class="btn btn-primary btn-md text-white">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
