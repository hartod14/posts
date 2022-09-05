@if ($post->comments->count() > 0)
    <hr style="opacity:0.1;border-top:1px solid">
    <div class="container pt-2">
        <div class="me-4 ms-5">
            @foreach ($post->comments as $comment)
                <div class="d-flex">
                    <div class="">
                        <img src={{ $comment->user->photo_profile }} class="rounded-circle" style="object-fit:cover"
                            width="40px" height="40px">
                    </div>
                    <div class="row me-0 ms-2 mb-3" style="width:100%">
                        <div class="d-flex justify-content-between ps-0 pt-0 mb-2 mt-2 border-0">
                            <div class="d-flex justify-content-between align-items-center">
                                <h6 class="mb-0">
                                    @if ($comment->user->status == 'admin')
                                        <span class="badge text-bg-info">Admin</span>
                                    @endif{{ $comment->user->name }}
                                </h6>
                            </div>
                            <small class="text-secondary" style="font-size: .700em">
                                {{ $comment->created_at->diffForHumans() }}
                            </small>
                        </div>
                        <div class="ps-0">
                            <p class="">{{ $comment->body }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
            @include('home.create-comment')
        </div>
    </div>
@else
    <hr style="opacity:0.1;border-top:1px solid">
    <div class="container pt-2">
        <div class="me-4 ms-5">
            @include('home.create-comment')
        </div>
    </div>
@endif
