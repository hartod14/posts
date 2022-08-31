<div class="row justify-content-center align-items-center">
    <form method="POST" action="{{ route('comment.add') }}" class="">
        <div class="px-4 mb-4 mt-4">
            @csrf
            <div class="mb-3">
                <textarea type="text" name="body" class="form-control  @error('body') is-invalid @enderror" id="body"
                    rows="2" placeholder="type comment here..."></textarea>
                <input type="hidden" name="post_id" value="{{ $post->id }}">
            </div>
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">Reply</button>
            </div>
            @error('body')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </form>
</div>
<hr style="opacity:0.1;border-top:2px solid">
