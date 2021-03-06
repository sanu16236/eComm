@extends('master')
@section('content')
    <div class="cotaier custom-login">
        <div class="row m-0">
            <div class="col-sm-4 mx-auto">
                <form action="login" method="post">
                    <div class="form-group">
                        @csrf
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>
        
                    <button type="submit" class="btn btn-primary">Login</button>
                    </form>
            </div>
        </div>
    </div>
@endsection