@extends('layouts.admin')

@section('top_bar')
    <li class="crumb-active">
        <a href="{{ route('dashboard') }}">Dashboard</a>
    </li>

    <li class="crumb-link">
        <a href="{{ route('user.index') }}">Users</a>
    </li>

    {{-- <li class="crumb-trail">Dashboard</li> --}}
@stop

@section('content')

    <div class="col-md-1 col-md-offset-11" style="margin-bottom:10px;">
        <a href="{{ route('user.create') }}" class="btn btn-success animated zoomIn">create</a>
    </div>

    <div class="mw1000 center-block">

        <!-- Begin: Content Header -->
        <div class="content-header">
            
            @include('layouts.messages')
        </div>

        <!-- Begin: Admin Form -->
        <div class="admin-form">

            <div class="panel heading-border">
                <div class="panel-body bg-light">

                    <div class="section-divider mb40" id="spy1">
                        <span>User List</span>
                    </div>

                    <table class="table table-responsive">

                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Actions</th>
                            </tr>
                        </thead>

                        <tbody>

                            @foreach($users as $user)

                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        buttons
                                    </td>
                                </tr>

                            @endforeach

                        </tbody>

                    </table>

                </div>
            </div>

        </div>

    </div>

@stop
