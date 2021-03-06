<!-- CODE FOR LIST GOES HERE -->
@extends('site.layouts.default')

{{-- Content --}}
@section('content')
<h1>Group List: 
    @if (Auth::user()->user_is_adm_or_moder())
<a href="{{{ URL::to('groups/create') }}}" type="button" class="btn btn-info btn-lg">
  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Add Group
</a>
    @endif
</h1>
<div class="page-header">
    <h3>

    </h3>
</div>

<div class="user_container">
@foreach ($groups as $group)
    <div class="well col-xs-8 col-sm-8 col-md-8 col-lg-8 col-xs-offset-2 col-sm-offset-2 col-md-offset-2 col-lg-offset-2">
        <div class="row user-row">
            <div class="col-xs-3 col-sm-2 col-md-1 col-lg-1">
                <img class="img-circle"
                     src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=50"
                     alt="User Pic">
            </div>
            <div class="col-xs-8 col-sm-9 col-md-10 col-lg-10">
                <strong>{{ $group->name }}</strong><br>
                <span class="text-muted">{{ $group->address }}</span>
            </div>
            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 dropdown-user" data-for=".cyruxx">
                <i class="glyphicon glyphicon-chevron-down text-muted"></i>
            </div>
        </div>
        <div class="row user-infos cyruxx">
            <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xs-offset-0 col-sm-offset-0 col-md-offset-1 col-lg-offset-1">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Group information</h3>
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
                                <strong>Group</strong><br>
                                <dl>
                                    <dt>Email:</dt>
                                    <dd>{{ $group->email }}</dd>
                                    <dt>Address:</dt>
                                    <dd>{{ $group->address }}</dd>
                                    <dt>Telephone:</dt>
                                    <dd>{{ $group->telephone }}</dd>
                                    <dt>Name:</dt>
                                    <dd>{{ $group->name }}</dd>
                                </dl>
                            </div>
                            <div class=" col-md-9 col-lg-9 hidden-xs hidden-sm">
                                <strong>{{ $group->name }}</strong><br>
                                <table class="table table-user-information">
                                    <tbody>
                                    <tr>
                                        <td>Email</td>
                                        <td>{{ $group->email }}</td>
                                    </tr>
                                    <tr>
                                        <td>Address</td>
                                        <td>{{ $group->address }}</td>
                                    </tr>
                                    <tr>
                                        <td>Telephone</td>
                                        <td>{{ $group->telephone }}</td>
                                    </tr>
                                    <tr>
                                        <td>Name</td>
                                        <td>{{ $group->name }}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <a href="{{ URL::to('groups/detail/' . $group->id) }}" class="btn btn-sm btn-warning" type="button"
                                    data-toggle="tooltip"
                                    data-original-title="Details"><i class="glyphicon glyphicon-search"></i></a>
                        <span class="pull-right">
                            @if ($group->user_in_group())
                                <form method="get" action="{{ URL::to('groups/quit/' . $group->id) }}">
                                <button class="btn btn-sm btn-danger" type="submit"
                                        data-toggle="tooltip"
                                        data-original-title="Quit"><i class="glyphicon glyphicon-remove"></i></button>
                                </form>
                            @else
                                <form method="get" action="{{ URL::to('groups/enter/' . $group->id) }}">
                                <button class="btn btn-sm btn-primary" type="submit"
                                    data-toggle="tooltip"
                                    data-original-title="Enter"><i class="glyphicon glyphicon-plus"></i></button>
                                </form>
                            @endif

                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- expr --}}
@endforeach
</div>


@stop

{{-- Scripts --}}
@section('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            var panels = $('.user-infos');
            var panelsButton = $('.dropdown-user');
            panels.hide();

            //Click dropdown
            panelsButton.click(function() {
                //get data-for attribute
                var dataFor = $(this).attr('data-for');
                var idFor = $(dataFor);

                //current button
                var currentButton = $(this);
                idFor.slideToggle(400, function() {
                    //Completed slidetoggle
                    if(idFor.is(':visible'))
                    {
                        currentButton.html('<i class="glyphicon glyphicon-chevron-up text-muted"></i>');
                    }
                    else
                    {
                        currentButton.html('<i class="glyphicon glyphicon-chevron-down text-muted"></i>');
                    }
                })
            });
        });
    </script>
@stop