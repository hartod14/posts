@extends('profile.view')

@section('container')
    <div class="col-md-9 ms-sm-auto col-lg-10">
        @include('home.create')
        <div class="container mt-4">
            @if ($posts->count() > 0)
                <h1 class="text-center mb-3">{{ $title }}</h1>
                <div class="container">
                    @foreach ($posts as $post)
                        @if ($post->user->id == auth()->user()->id)
                            <div class="row justify-content-center">
                                <div class="col-sm-8 mb-5">
                                    <div class="card">
                                        <div class="card-body pt-4 pb-0 px-4">
                                            <small class="d-flex justify-content-between align-items-center mb-3">
                                                <div class="d-flex align-items-center">
                                                    <img src={{ $post->user->photo_profile }} class="rounded-circle"
                                                        style="object-fit:cover" width="40px" height="40px">
                                                    <h5 class="mb-0 ms-2">
                                                        @if ($post->user->status == 'admin')
                                                            <span class="badge text-bg-info">Admin</span>
                                                        @endif
                                                        {{ $post->user->name }}
                                                    </h5>
                                                </div>
                                                <small class="text-secondary">
                                                    {{ $post->created_at->diffForHumans() }}
                                                </small>
                                            </small>
                                            <p class="card-text">{{ $post->body }}</p>
                                        </div>
                                        @include('home.create-comment')
                                        @include('home.comment')
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            @else
                <p class="text-center fs-4">No Post Found!</p>
            @endif
        </div>
    </div>
@endsection
