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
                        {{-- if user is not logged in --}}
                        @if (!Auth::check())
                            <a href="/login">
                                <button>login</button>
                            </a>
                        @endif
                        {{-- if user is logged in --}}
                        @if (Auth::check())
                            @if (Auth::user()->role == 'farmer' || Auth::user()->role == 'seller')
                                <a href="/dashboard">
                                    <button>Dashboard</button>
                                </a>
                            @endif
                            @if (Auth::user()->role == 'admin' || Auth::user()->role == 'subadmin')
                                <a href="/admin/dashboard">
                                    <button>Dashboard</button>
                                </a>
                            @endif
                        @endif
                    </center>
                </div>
                <div style="display:grid;margin-block: 0.6rem">
                    <center>
                        <select style="background: transparent;text-align: center;color:white;padding: 0.2rem" class="changeLanguage">
                    
                            <option style="background: rgb(107, 106, 106)" value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English
                            </option>
                            <option value="ne" style="background: rgb(107, 106, 106)" {{ session()->get('locale') == 'ne' ? 'selected' : '' }}>नेपाली
                            </option>
                        </select>
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
