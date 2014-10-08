@extends('site.layouts.default')

{{-- Web site Title --}}
@section('title')
{{{ Lang::get('user/user.profile') }}} ::
@parent
@stop

{{-- Content --}}
@section('content')
<div class="page-header">
	<h1>User Profile</h1>
</div>
<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-xs-offset-2 col-sm-offset-2 col-md-offset-2 col-lg-offset-2">
            <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xs-offset-0 col-sm-offset-0 col-md-offset-1 col-lg-offset-1">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">User information</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-3 col-lg-3 hidden-xs hidden-sm">
                                <img class="img-circle"
                                     src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=100"
                                     alt="User Pic">
                            </div>
                            <div class="col-xs-2 col-sm-2 hidden-md hidden-lg">
                                <img class="img-circle"
                                     src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=50"
                                     alt="User Pic">
                            </div>
                            <div class="col-xs-10 col-sm-10 hidden-md hidden-lg">
                                <strong>Cyruxx</strong><br>
                                <dl>
                                    <dt>User level:</dt>
                                    <dd>{role}</dd>
                                    <dt>Registered since:</dt>
                                    <dd>{registration_date}</dd>
                                    <dt>Name:</dt>
                                    <dd>{name}</dd>
                                    <dt>Birth date:</dt>
                                    <dd>{birth_date}</dd>
                                </dl>
                            </div>
                            <div class=" col-md-9 col-lg-9 hidden-xs hidden-sm">
                                <strong>{{ $user->username }}</strong><br>
                                <table class="table table-user-information">
                                    <tbody>
                                    <tr>
                                        <td>User level:</td>
                                        <td>{role}</td>
                                    </tr>
                                    <tr>
                                        <td>Registered since:</td>
                                        <td>{registration_date}</td>
                                    </tr>
                                    <tr>
                                        <td>Name</td>
                                        <td>{name}</td>
                                    </tr>
                                    <tr>
                                        <td>Birth date</td>
                                        <td>{birth_date}</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <a href="#" class="btn btn-primary">My Statistics</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <button class="btn btn-sm btn-primary" type="button"
                                data-toggle="tooltip"
                                data-original-title="Send message to user"><i class="glyphicon glyphicon-envelope"></i></button>
                        <span class="pull-right">
                            <button class="btn btn-sm btn-warning" type="button"
                                    data-toggle="tooltip"
                                    data-original-title="Edit this user"><i class="glyphicon glyphicon-edit"></i></button>
                            <button class="btn btn-sm btn-danger" type="button"
                                    data-toggle="tooltip"
                                    data-original-title="Remove this user"><i class="glyphicon glyphicon-remove"></i></button>
                        </span>
                    </div>
                </div>
            </div>
    </div>

<!-- 
<table class="table table-striped">
    <thead>
    <tr>
        <th>#</th>
        <th>Username</th>
        <th>Signed Up</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>{{{$user->id}}}</td>
        <td>{{{$user->username}}}</td>
        <td>{{{$user->joined()}}}</td>
    </tr>
    </tbody>
</table> -->
@stop
