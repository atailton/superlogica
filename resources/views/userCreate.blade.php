@extends('layouts.layoutAdmin')

@section('content')
    <div class="content-wrapper">
        <div class="content">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>User Create</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('userStore') }}">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="name">Name</label>
                                <!-- is-valid or is-invalid -->
                                <input type="text"
                                    class="form-control @error('name') is-invalid {{ $message }} @enderror"
                                    id="name" placeholder="Name" value="{{ old('name') }}" name="name">
                                <div class="invalid-feedback">
                                    @error('name')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="userName">User Name</label>

                                <input type="text" class="form-control @error('userName') is-invalid @enderror"
                                    id="userName" placeholder="User Name" value="{{ old('userName') }}" name="userName">
                                <div class="invalid-feedback">
                                    @error('userName')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="email">Email</label>

                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    id="email" placeholder="Email" value="{{ old('email') }}" name="email">
                                <div class="invalid-feedback">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="zipCode">Zip Code</label>

                                <input type="text" class="form-control @error('zipCode') is-invalid @enderror"
                                    id="zipCode" placeholder="Zip Code" value="{{ old('zipCode') }}" name="zipCode">
                                <div class="invalid-feedback">
                                    @error('zipCode')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="password">Password</label>

                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                    id="password" placeholder="Password" name="password">
                                <div class="invalid-feedback">
                                    @error('password')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
