@extends('layouts.admin')

@section('top_bar')
    <li class="crumb-active">
        <a href="{{ route('dashboard') }}">Dashboard</a>
    </li>

    <li class="crumb-link">
        <a href="{{ route('user.index') }}">Users</a>
    </li>

    <li class="crumb-trail">Create</li>
@stop

@section('content')

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <div class="mw1000 center-block">

        <!-- Begin: Content Header -->
        <div class="content-header">
            <h2> With <b>Admin Forms</b> you have everything you need.</h2>
        </div>

        <!-- Begin: Admin Form -->
        <div class="admin-form">

            <div class="panel heading-border">
                <div class="panel-body bg-light">

                    <div class="section-divider mb40" id="spy1">
                        <span>Create User</span>
                    </div>

                    {!! Form::open(['route' => 'user.store', 'method' => 'POST']) !!}

                        <div class="row">
                            <div class="col-md-6">
                                {!! Field::text('name', null, ['placeholder' => 'Name'], ['icon' => 'fa fa-user']) !!}
                            </div>
                            <div class="col-md-6">
                                {!! Field::email('email', null, ['placeholder' => 'Email'], ['icon' => 'fa fa-user']) !!}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                {!! Field::password('password', ['placeholder' => 'Password'], ['icon' => 'fa fa-lock']) !!}
                            </div>
                            <div class="col-md-6">
                                {!! Field::password('password_confirmation', ['placeholder' => 'Confirm Password'], ['icon' => 'fa fa-lock']) !!}
                            </div>
                        </div>

                        <div class="panel-footer">
                            <button type="submit" class="button btn-primary">Proceed to confirm</button>
                        </div>

                    {!! Form::close() !!}
                </div>
            </div>

        </div>

    </div>

@stop
