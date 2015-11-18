<nav>
    <div class="nav-wrapper teal darken-2">
        <a href="#" class="left brand-logo">Dashboard</a>
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