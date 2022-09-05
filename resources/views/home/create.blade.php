<div class="bg-light">
    <div class="row justify-content-center align-items-center p-3">
        <div class="col-sm-6 mb-3">
            {{-- @auth --}}
            <form method="POST" action="/" class="">
                @csrf
                <div class="mb-3 mt-4">
                    <label for="body" class="form-label">Create Post</label>
                    <textarea type="text" name="body" class="form-control  @error('body') is-invalid @enderror" id="body"
                        rows="3" placeholder="update your post here..."></textarea>
                </div>
                <button type="submit" class="btn btn-primary float-end">Create Post</button>
                @error('body')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </form>
            {{-- @endauth --}}
        </div>
    </div>
</div>
