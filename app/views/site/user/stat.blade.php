@extends('site.layouts.default')


{{-- Content --}}
@section('content')
<div class="page-header">
    <h1>Add statistics</h1>
</div>
<h4>Weightlifting</h4>
    <ul class="list-group">
        <li class="list-group-item">
            <span class="badge">$wlift->spent</span>
            Minutes spent in total
        </li>
        <li class="list-group-item">
            <span class="badge">$wlift->num</span>
            Number of lifts
        </li>
        <li class="list-group-item">
            <span class="badge">$wlift->weight</span>
            Weight
        </li>
    </ul>

<h4>Football</h4> 
    <ul class="list-group">
        <li class="list-group-item">
            <span class="badge">$football->spent</span>
            Minutes spent in total
        </li>
        <li class="list-group-item">
            <span class="badge">$football->num</span>
            Number of lifts
        </li>
        <li class="list-group-item">
            <span class="badge">$football->yel</span>
            Yellow cards
        </li>
        <li class="list-group-item">
            <span class="badge">$football->red</span>
            Red cards
        </li>
    </ul>
        
<h4>Jogging</h4>
    <ul class="list-group">
        <li class="list-group-item">
            <span class="badge">$jog->spent</span>
            Minutes spent in total
        </li>
        <li class="list-group-item">
            <span class="badge">$jog->num</span>
            Number of miles
        </li>
        <li class="list-group-item">
            <span class="badge">$jog->place</span>
            Place
        </li>
        <li class="list-group-item">
            <span class="badge">$jog->pulse</span>
            Pulse
        </li>
    </ul>


@stop
