@extends('mainapps')
@section('title')
    Create
@endsection
@section('content')
    <div class="container py-3">
        <h3 class="fw-bold">Tambahkan Blog</h3>
        <div class="card">
            <div class="card-body">
                <form method="post" action="/saveblog" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="penulis" class="form-label">Penulis</label>
                        <input type="text" class="form-control" id="penulis" name="penulis_post"
                            placeholder="nama penulis">
                    </div>
                    <div class="mb-3">
                        <label for="judul-post" class="form-label">Judul Post</label>
                        <input type="text" class="form-control" id="judul-post" name="judul_post"
                            placeholder="judul post">
                    </div>
                    <div class="mb-3">
                        <label for="isi-post" class="form-label">Isi Post</label>
                        <textarea class="form-control" name="isi_post" id="isi-post" cols="30" rows="5"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="gambar-post" class="form-label">Gambar Post</label>
                        <input type="file" class="form-control" id="gambar-post" name="gambar_post" accept="image/*">
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn btn-pink">Post</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
