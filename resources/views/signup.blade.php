@extends('layout.masterpage')
@section('content')
    <div class="col-lg-5 mx-auto" data-aos="fade-up" data-aos-delay="500">
        <form action="" method="post" class="form-box">
            <h3 class="h4 text-black mb-4">Sign Up</h3>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Email Addresss">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-group mb-4">
                <input type="password" class="form-control" placeholder="Re-type Password">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary btn-pill" value="Sign up">
            </div>
        </form>

    </div>
@endsection
