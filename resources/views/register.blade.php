@extends('home')

@section('container')
<main class="form-register">
    <form action="/register" method="POST">
        @csrf
        <h1 class="h3 mb-3 fw-normal text-center">Register</h1>
        <div class="form-floating">
            <input type="text" name="name" class="form-control rounded-top @error('name')is-invalid @enderror" id="name" placeholder="name" required value="{{old('name')}}">
            <label for="name">Name</label>
            @error('name')
            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                {{ $message }}
            </div> 
            @enderror
        </div>
        <div class="form-floating">
            <input type="email" name="email" class="form-control @error('email')is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{old('email')}}">
            <label for="email">Email address</label>
            @error('email')
            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-floating">
            <input type="password" name="password" class="form-control rounded-bottom @error('password')is-invalid @enderror" id="password" placeholder="Password" required>
            <label for="password">Password</label>
            @error('password')
            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Register</button>
    </form>
    <small class="d-block text-center mt-2">Already Registered? <a href="/login">Login Now!</a></small>
</main>
@endsection