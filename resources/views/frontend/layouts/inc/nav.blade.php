<nav>
    <div class="wrapper">
        <div class="grid_layout">
            <a href="/" style="text-decoration: none">

                <div>
                    <h1 style="color:white">Digital<span style="color:orange ">Krishi</span></h1>
                </div>
            </a>
            <div class="nav__links">

                <ul>
                    <li><a href="/">Home</a></li>
                    <li>
                        <a href="/services">Services</a>
                    </li>
                    <li>
                        <a href="/seed">Seeds</a>
                    </li>
                    <li>
                        <a href="/diseases">Diseases</a>
                    </li>
                    <li>
                        <a href="/about-us">About</a>
                    </li>

                    <li>
                        <a href="/contact">Contact</a>
                    </li>
                </ul>

            </div>
            <div class="nav__links-mobl hidden " id="menu-responsive">

                <a href="/">Home</a>

                <a href="/services">Services</a>

                <a href="/seed">Seeds</a>

                <a href="/disease-solutions">Diseases</a>

                <a href="/about-us">About</a>

                <a href="/contact">Contact</a>

                <div style="display:grid">
                    <center>
                        <a href="{{ route('login') }}" style="text-decoration: none">
                            <button style="width:80%;display:flex;justify-content: center ">login</button>
                        </a>
                    </center>
                </div>

            </div>
            <div class="nav__button ">
                <a href="login">
                    <button>login</button>
                </a>
            </div>
            <div class="cross hidden" id="ham-menu">
                <div id="top-bar" class="top "></div>
                <div id="middle-bar" class="middle "></div>
                <div id="bottom-bar" class="bottom "></div>

            </div>

        </div>
    </div>
</nav>
