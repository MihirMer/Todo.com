@extends('layouts.app')

@section('content')
    <div class="container p-3">
        <div class="row mt-3">
            <div class="col-md-3"></div>
            <form class="col-md-6 bg-light p-3"
                  action="{{ route('register') }}" method="post" NOVALIDATE>

                <div class="text-center mb-3">
                    <p class="h3 mx-auto">Register</p>
                </div>

                @csrf
                <div class="form-group">
                    <label for="validationCustomUsername">Username</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                        </div>
                        <input type="text" class="form-control @error('username') is-invalid @enderror" id="validationCustomUsername" placeholder="Username"
                               aria-describedby="inputGroupPrepend" name="username" value="{{ old('username') }}" REQUIRED>
                        @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror

                    </div>
                </div>

                <div class="form-group row">
                    <div class="col">
                        <label for="first-name">First name</label>
                        <input type="text" class="form-control @error('first-name') is-invalid @enderror" placeholder="First name" id="first-name"
                        name="first-name" value="{{ old('first-name') }}">
                        @error('first-name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="last-name">Last name</label>
                        <input type="text" class="form-control @error('last-name') is-invalid @enderror" placeholder="Last name" id="last-name"
                        name="last-name" value="{{ old('last-name') }}">
                        @error('last-name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="Enter email" name="email" value="{{ old('email') }}">
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword1" placeholder="Password"
                    name="password">
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="exampleInputConfirmPassword1">Confirm Password</label>
                    <input type="password" class="form-control" id="exampleInputConfirmPassword1" placeholder="Re-enter Password"
                           name="password_confirmation">
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary px-5 mt-3">Register</button>
                </div>

            </form>
            <div class="col-md-3"></div>
        </div>
    </div>
@endsection
