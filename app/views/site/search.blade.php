@extends('site.layouts.default')

{{-- Content --}}
@section('content')
<h1> Search Results:
</h1>

<h3>Groups: </h3>
<div class="user_container">
<ul class="list-group">
@foreach ($groups as $group)
  <li class="list-group-item">
    <a href="{{{ URL::to('groups/detail/' . $group->id ) }}}">
    {{ $group->name }}
    </a>
  </li>
@endforeach
</ul>
</div>

<h3>Users: </h3>
<div class="user_container">
<ul class="list-group">
@foreach ($users as $user)
  <li class="list-group-item">
    <a href="{{{ URL::to('users/' . $user->username ) }}}">
    {{ $user->username }}
    </a>
  </li>
@endforeach
</ul>
</div>

@stop