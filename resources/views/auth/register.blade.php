@extends('master')

@section('content')
<div class="container">
    <div class="row center-vertically">
        <form method="POST" action="/auth/register">
            {{ csrf_field() }}
            <div class="row">
                <div class="input-field col s12">
                    <input id="name" type="text" class="validate" name="name" value="{{ old('name') }}">
                    <label for="name">Name</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="email" type="email" class="validate" name="email" value="{{ old('email') }}">
                    <label for="email">Email</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="password" type="password" class="validate" name="password">
                    <label for="password">Password</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="password_confirmation" type="password" class="validate" name="password_confirmation">
                    <label for="password_confirmation">Confirm Password</label>
                </div>
            </div>
            <div class="group right-align">
                <button class="btn waves-effect waves-light teal lighten-2"  type="submit">Sign me up!
                    <i class="material-icons right">send</i>
                </button>
            </div>
        </form>
    </div>
</div>
@endsection