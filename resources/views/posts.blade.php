@extends('home')

@section('container')
    @include('create')
    <div class="container mt-4">
        @if ($posts->count() > 0)
            <h1 class="text-center mb-3">{{ $title }}</h1>
            <div class="container">
                @foreach ($posts as $post)
                    <div class="row justify-content-center">
                        <div class="col-md-8 mb-5">
                            <div class="card">
                                <div class="card-body pt-4 pb-0 px-4">
                                    <small class="d-flex justify-content-between align-items-center mb-3">
                                        <h5>{{ $post->user->name }}</h5>
                                        {{ $post->created_at->diffForHumans() }}
                                    </small>
                                    <p class="card-text">{{ $post->body }}</p>
                                </div>
                                {{-- <div class="-container"> --}}
                                @include('comment')
                                {{-- </div> --}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-center fs-4">No Post Found!</p>
        @endif
    </div>
@endsection
