@extends('layouts.app')

@section('content')
    <div class="container p-3">

        <div class="row mt-3">
            <div class="col-md-3"></div>
            <form class="col-md-6 bg-light p-3"
                  action="{{ route('login') }}" method="post" NOVALIDATE>
                <div class="text-center mb-3">
                    <p class="h3 mx-auto">Login</p>
                </div>

                @if(session('status'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                @csrf


                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                           id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="Enter email" name="email" value="{{ old('email') }}">
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                           id="exampleInputPassword1" placeholder="Password"
                           name="password">
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary px-5 mt-3">Login</button>
                </div>

            </form>
            <div class="col-md-3"></div>
        </div>
    </div>
@endsection
