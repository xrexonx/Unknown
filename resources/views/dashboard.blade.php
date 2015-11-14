@extends('master')

@section('content')
    <nav>
        <div class="nav-wrapper teal darken-2">
            <a href="#" class="left brand-logo">Dashboard Confessional</a>
            <ul id="nav-mobile" class="right">
                <li><a href="auth/login">Rexon</a></li>
                <li><a href="auth/logout">Logout</a></li>
            </ul>
        </div>
    </nav>

<!-- Page Layout here -->
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
 sdfsdfds
    </div>

</div>
    <div id="modal1" class="modal modal-fixed-footer">
        <div class="modal-content">
            <h4>Add Unknown</h4>
            <div class="row">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="name" type="text" class="validate">
                            <label for="name">Unknown Name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="desc" type="text" class="validate">
                            <label for="desc">Unknown Description</label>
                        </div>
                    </div>
                    <div class="row input-field col s12">
                        <select>
                            <option value="" disabled selected>Choose Unknown category</option>
                            <option value="1">Unknown 1</option>
                            <option value="2">Unknown 2</option>
                            <option value="3">Unknown 3</option>
                        </select>
                        <label>Unknown Category</label>
                    </div>
                    <div class="row input-field col s12">
                        <select multiple>
                            <option value="" disabled selected>Choose Unknown skill</option>
                            <option value="1">Unknown skill 1</option>
                            <option value="2">Unknown skill 2</option>
                            <option value="3">Unknown skill 3</option>
                        </select>
                        <label>Required Unknown skill</label>
                    </div>
                </form>
            </div>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Agree</a>
        </div>
    </div>
@endsection