@extends('master')

@section('content')
    <div class="container center-vertically">
        <form method="POST" action="/auth/login">

            {{ csrf_field() }}

            <div class="row">
                <div class="input-field col s12 m12 l4 offset-l4">
                    <input id="email" type="email" class="validate" name="email" value="{{ old('email') }}">
                    <label for="email">Email</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12 m12 l4 offset-l4">
                    <input id="password" type="password" class="validate" name="password">
                    <label for="password">Password</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12 m12 l4 offset-l4">
                    <input type="submit" class="btn waves-effect waves-light teal lighten-2" value="Log me In">
                </div>
            </div>
            
        </form>
    </div>

@endsection

