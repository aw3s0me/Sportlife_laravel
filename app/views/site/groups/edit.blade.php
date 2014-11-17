@extends('site.layouts.default')

{{-- Content --}}
@section('content')
<div class="page-header">
    <h1>Edit group 
        @if ($group->is_user_admin())
            <form method="POST" action="{{  URL::to('groups/remove/' . $group->id ) }}" accept-charset="UTF-8">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" class="btn btn-danger">
                  <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>Delete group
                </button>
            </form>
        @endif
    </h1>
</div>
<form class="form-horizontal" method="POST" action="{{  URL::to('groups/edit/' . $group->id ) }}" accept-charset="UTF-8">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <fieldset>
        <div class="form-group">
            <label class="col-md-2 control-label" for="name">Name</label>
            <div class="col-md-10">
                <input class="form-control" tabindex="1" type="text" name="name" id="name" value="{{{ Input::old('name', $group->name) }}}" />
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label" for="email">Email</label>
            <div class="col-md-10">
                <input class="form-control" value="{{{ Input::old('email', $group->email) }}}" tabindex="1" type="text" name="email" id="email">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label" for="address">Address</label>
            <div class="col-md-10">
                <input class="form-control" tabindex="1" value="{{{ Input::old('address', $group->address) }}}" type="text" name="address" id="address">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label" for="telephone">Telephone</label>
            <div class="col-md-10">
                <input class="form-control" tabindex="1" value="{{{ Input::old('telephone', $group->telephone) }}}" type="text" name="telephone" id="telephone">
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-offset-2 col-md-10">
                <button tabindex="3" type="submit" class="btn btn-primary">Change</button>
            </div>
        </div>
    </fieldset>
</form>

@stop
