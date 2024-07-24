@guest
    <nav class="nav">
        <img src="images/title-menu.svg" alt="Menu" class="title-menu">
        <menu>
            <a href="{{ url('login') }}">
                <img src="images/ico-login.svg" alt="Login">
                Login
            </a>
            <a href="{{ url('register') }}">
                <img src="images/ico-register.svg" alt="Register">
                Register
            </a>
            <a href="{{ url('catalogue') }}">
                <img src="images/ico-catalogue.svg" alt="Catalogue">
                Catalogue
            </a>
        </menu>
    </nav>
@endguest

@auth
    <nav class="nav">
        <img src="images/group-user.svg">
        <menu>
            <section>

                <div>
                    <label>
                        <a href="my-profile.html">My Profile</a>
                    </label>
                </div>

                <div>
                    <label>
                        <a href="">Dashboard</a>
                    </label>
                </div>

                <div>
                    <label>
                        <a href="">LogOut</a>
                    </label>
                </div>
            </section>
        </menu>
    </nav>
@endauth
