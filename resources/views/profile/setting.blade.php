@extends('profile.view')

@section('container')
    <div class="col-md-9 ms-sm-auto col-lg-10">
        <div class="container col-6 mt-5">
            <h1 class="mb-5">Edit Profile</h1>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Name</label>
                <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="Your Name">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="input-group mb-3">
                <label for="inputGroupFile01"></label>
                <input type="file" class="form-control" id="inputGroupFile01">
            </div>
        </div>
    </div>
@endsection
