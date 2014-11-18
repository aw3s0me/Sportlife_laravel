@extends('site.layouts.default')


{{-- Content --}}
@section('content')
<div class="page-header">
    <h1>Add statistics</h1>
</div>
<h4>Weightlifting</h4>
<form class="form-horizontal" method="POST" action="{{ URL::to('users/addstat') }}" accept-charset="UTF-8">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="type" value="weightlifting">
    <fieldset>
        <div class="form-group">
            <label class="col-md-2 control-label" for="wliftspent"></label>
            <div class="col-md-10">
                <input class="form-control" tabindex="1" placeholder="Minutes spent" type="number" name="wliftspent" id="wliftspent">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label" for="wliftcount"></label>
            <div class="col-md-10">
                <input class="form-control" tabindex="1" placeholder="Lifts count" type="number" name="wliftcount" id="wliftcount">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label" for="wlifweight"></label>
            <div class="col-md-10">
                <input class="form-control" tabindex="1" placeholder="Weight" type="number" name="wliftweight" id="wliftweight">
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-offset-2 col-md-10">
                <button tabindex="3" type="submit" class="btn btn-primary">Add</button>
            </div>
        </div>
</fieldset>
</form>

<h4>Football</h4> 
<form class="form-horizontal" method="POST" action="{{ URL::to('users/addstat') }}" accept-charset="UTF-8">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="type" value="football">
    <fieldset>  
        <div class="form-group">
            <label class="col-md-2 control-label" for="ftblspent"></label>
            <div class="col-md-10">
                <input class="form-control" tabindex="1" placeholder="Minutes" type="number" name="ftblspent" id="ftblspent">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label" for="ftblcount"></label>
            <div class="col-md-10">
                <input class="form-control" tabindex="1" placeholder="Goals" type="number" name="ftblcount" id="ftblcount">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label" for="ftblyel"></label>
            <div class="col-md-10">
                <input class="form-control" tabindex="1" placeholder="Yellow cards" type="number" name="ftblyel" id="ftblyel">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label" for="ftblred"></label>
            <div class="col-md-10">
                <input class="form-control" tabindex="1" placeholder="Red cards" type="number" name="ftblred" id="ftblred">
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-offset-2 col-md-10">
                <button tabindex="3" type="submit" class="btn btn-primary">Add</button>
            </div>
        </div>
</fieldset>
</form>

<h4>Jogging</h4>
<form class="form-horizontal" method="POST" action="{{ URL::to('users/addstat') }}" accept-charset="UTF-8">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="type" value="jogging">
    <fieldset>
        
        <div class="form-group">
            <label class="col-md-2 control-label" for="jgspent"></label>
            <div class="col-md-10">
                <input class="form-control" tabindex="1" placeholder="Minutes" type="number" name="jgspent" id="jgspent">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label" for="jgcount"></label>
            <div class="col-md-10">
                <input class="form-control" tabindex="1" placeholder="Miles run" type="number" name="jgcount" id="jgcount">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label" for="jgplace"></label>
            <div class="col-md-10">
                <input class="form-control" tabindex="1" placeholder="Where" type="text" name="jgplace" id="jgplace">
            </div>
        </div>  
        <div class="form-group">
            <label class="col-md-2 control-label" for="jgpulse"></label>
            <div class="col-md-10">
                <input class="form-control" tabindex="1" placeholder="Your pulse" type="number" name="jgpulse" id="jgpulse">
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-offset-2 col-md-10">
                <button tabindex="3" type="submit" class="btn btn-primary">Add</button>
            </div>
        </div>
    </fieldset>
</form>

@stop
