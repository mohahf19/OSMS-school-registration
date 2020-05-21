@extends('layouts.app')
@section('content')
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div>
                    <div class="widget-heading">PROFILE</div>
                </div>
            </div>
        </div>
    </div>
    <form method="POST" action="/profile-update">
        @csrf

        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <h5 class="card-title">Basic Details</h5>
                        <div>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="btn btn-secondary">Name</span>
                                </div>
                                <input type="text" class="form-control" name="name" value="{{$user->name}}" disabled>
                            </div>
                            <br>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="btn btn-secondary">Surname</span>
                                </div>
                                <input type="text" class="form-control" name="surname" value="{{$user->surname}}" disabled>
                            </div>

                            <br>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="btn btn-secondary">Bilkent ID</span>
                                </div>
                                <input type="number" class="form-control" name="id" value="{{$user->id}}" disabled>
                            </div>
                            <br>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="btn btn-secondary">Password</span>
                                </div>
                                <input type="password" class="form-control" name="password" value="***">
                            </div>
                            <br>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="btn btn-secondary">Email Address</span>
                                </div>
                                <input type="email" class="form-control" name="email" value="{{$user->email}}">
                            </div>
                            <br>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="btn btn-secondary">Phone Number</span>
                                </div>
                                <input type="text" class="form-control" name="phone" value="{{$user->phone}}">
                            </div>

                            <br>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <div>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="btn btn-secondary">Address</span>
                                </div>
                                <input type="text" class="form-control" name="address" value="{{$user->address}}">
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="input-group-postpend" style="margin-top: 10px">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
</div>
@endsection