@extends('master')

@section('content')
    <nav>
        <div class="nav-wrapper teal darken-2">
            <a href="#" class="left brand-logo">Dashboard Confessional</a>
            <ul id="nav-mobile" class="right">
                <li>
                    <a class='dropdown-button' href='#' data-activates='dropdown1'>{{ $name }}</a>
                    <ul id='dropdown1' class='dropdown-content'>
                        <li><a href="#!">{{ $name }}</a></li>
                        <li><a href="#!">Profile</a></li>
                        <li><a href="#!">Settings</a></li>
                        <li class="divider"></li>
                        <li><a href="auth/logout">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

<div class="row">

    <div class="col s12 m4 l3 blue-grey lighten-2">
        <br>
        <div class="row center-align fadeMeIn">
            <a class="modal-trigger waves-effect waves-light btn" href="#modal1">Add Unknown</a>
        </div>

        <ul class="collection unknownList with-header">
            <li class="collection-item"><h4>Unknown List</h4></li>
            <li class="collection-item"><a href="#!" >Unknown</a></li>
            <li class="collection-item"><a href="#!" >Unknown</a></li>
            <li class="collection-item"><a href="#!" >Unknown</a></li>
            <li class="collection-item"><a href="#!" >Unknown</a></li>
            <li class="collection-item"><a href="#!" >Unknown</a></li>
            <li class="collection-item"><a href="#!" >Unknown</a></li>
            <li class="collection-item"><a href="#!" >Unknown</a></li>
            <li class="collection-item"><a href="#!" >Unknown</a></li>
            <li class="collection-item"><a href="#!" >Unknown</a></li>
            <li class="collection-item"><a href="#!" >Unknown</a></li>
            <li class="collection-item"><a href="#!" >Unknown</a></li>
            <li class="collection-item"><a href="#!" >Unknown</a></li>
            <li class="collection-item"><a href="#!" >Unknown</a></li>
        </ul>
    </div>

    <div class="col s12 m8 l9 grey lighten-3">
 asfasdfssdfasdf
    </div>

</div>
@include('common.addUnknown')
@endsection