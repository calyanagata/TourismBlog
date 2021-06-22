@extends('layouts.member_app')
@section('content')
<div class="container">
<br>
    <h2 class="display-5 text-center title-catalog text-uppercase"><b>Update Profile</b></h2>
    <br><br>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Please fill the form below correctly.') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('update') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                            <div class="col-md-6">
                                <input value="{{$user->name}}" class="form-control" name="name" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                            <div class="col-md-6">
                                <input value="{{$user->email}}" class="form-control" name="email" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>
                            <div class="col-md-6">
                                <input value="{{$user->phone}}" class="form-control" name="phone" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button name="profile" type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    <br>
                    
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection