@extends('layouts.auth')

@section('content')

    <div class="admin-form theme-info mw500" id="login">

        <!-- Login Logo -->
        @include('layouts.template.auth_logo')

        <!-- Login Panel/Form -->
        <div class="panel mt30 mb25">

            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}

                <div class="panel-body bg-light p25 pb15">
                    <!-- Username Input -->

                    <div class="section">
                        {!! Field::email('email', null, ['placeholder' => 'Email'], ['icon' => 'fa fa-user']) !!}
                    </div>

                    <!-- Password Input -->
                    <div class="section">
                        {!! Field::password('password', ['placeholder' => 'Password'], ['icon' => 'fa fa-lock']) !!}
                    </div>

                </div>

                <div class="panel-footer clearfix">
                    <button type="submit" class="button btn-primary mr10 pull-right">Sign In</button>
                    <label class="switch ib switch-primary mt10">
                        <input type="checkbox" name="remember" id="remember" checked>
                        <label for="remember" data-on="YES" data-off="NO"></label>
                        <span>Remember me</span>
                    </label>
                </div>

            </form>
        </div>

        <!-- Registration Links -->
        <div class="login-links">
            <p>
                <a href="{{ route('password.request') }}" class="active" title="Sign In">Forgot Password?</a>
            </p>
        </div>

    </div>
@endsection
