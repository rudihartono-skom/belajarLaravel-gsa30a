@extends('mainapps')
@section('title')
    Home
@endsection
@section('content')
    <section id="header" class="header">
        <div class="container">
            <h1 class="judul-header">Selamat Datang Di <br> Blog Palcomtech</h1>
        </div>
    </section>

    <section id="blog" class="py-5">
        <div class="container">
            <a href="/create" class="btn btn-warning fw-bold">Tambahkan Blog Anda</a>
            @foreach ($posts as $post)
                <div class="card mb-3 mt-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('storage/' . $post->gambar_post) }}" width="100%" height="250"
                                class="rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <div class="d-flex justify-content-end">
                                    <button type="button" class="btn btn-sm" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="bi bi-three-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="/edit/{{ $post->id }}">Edit</a></li>
                                        <li><a class="dropdown-item" href="/delete/{{ $post->id }}">Delete</a></li>
                                    </ul>
                                </div>
                                <h4 class="card-title fw-bold">{{ $post->judul_post }}</h4>
                                <p class="card-text">{{ $post->isi_post }}</p>
                                <p class="card-text">
                                    <small class="text-body-secondary">{{ $post->penulis_post }}</small>
                                    <a href="" class="btn"><i class="bi bi-hand-thumbs-up"></i> Like</a>
                                    <a href="" class="btn"><i class="bi bi-chat-text"></i> Comment</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection

