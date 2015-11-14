@extends('master')

@section('content')
<div class="container">
    <form method="POST" action="/auth/login">

        {!! csrf_field() !!}

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

        <div class="group right-align">
            <button class="btn waves-effect waves-light teal lighten-2" type="submit">Log me In
                <i class="material-icons right">send</i>
            </button>
        </div>

    </form>
</div>

@endsection

