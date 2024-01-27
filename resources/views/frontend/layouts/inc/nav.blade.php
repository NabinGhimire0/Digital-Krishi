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
                        <a href="/our-expert">Experts</a>
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
                        <a href="/contact-us">Contact</a>
                    </li>

                    <li>
                        <a id="supportButton">Support</a>
                    </li>
                    <li>
                        <select style="background: transparent;" class="changeLanguage">
                            <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English
                            </option>
                            <option value="ne" {{ session()->get('locale') == 'ne' ? 'selected' : '' }}>नेपाली
                            </option>
                        </select>
                    </li>
                </ul>
            </div>
            <div class="nav__links-mobl hidden " id="menu-responsive">

                <a href="/">Home</a>

                <a href="/our-expert">Experts</a>

                <a href="/seed">Seeds</a>

                <a href="/diseases">Diseases</a>

                <a href="/about-us">About</a>

                <a href="/contact-us">Contact</a>
                <a id="mbsupportButton">Support</a>

                <div style="display:grid">
                    <center>
                        <a href="/login">
                            <button>login</button>
                        </a>
                    </center>
                </div>

            </div>
            {{-- <div class="nav__button ">
                <a href="login">
                    <button>login</button>
                </a>
            </div> --}}
            <div class="cross hidden" id="ham-menu">
                <div id="top-bar" class="top "></div>
                <div id="middle-bar" class="middle "></div>
                <div id="bottom-bar" class="bottom "></div>

            </div>

        </div>
    </div>
</nav>
