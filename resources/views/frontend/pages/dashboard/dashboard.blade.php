{{-- <x-guest-layout>
    <div
        style="background: rgba(106,169,108);box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );backdrop-filter: blur( 0px );-webkit-backdrop-filter: blur( 0px );">
        @include('frontend/layouts/inc/nav')

    </div>

    <main>
        <div class="main">

            <aside id="side-bar" class="">
                <div>
                    <div class="cross">
                        <div id="top-bar" class="top "></div>
                        <div id="middle-bar" class="middle "></div>
                        <div id="bottom-bar" class="bottom "></div>
                    </div>
                </div>
            </aside>
            <div id="content">
                main
            </div>
        </div>
    </main>

</x-guest-layout> --}}

<x-user-dashboard>
    <div
        style="background: rgba(106,169,108);box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );backdrop-filter: blur( 0px );-webkit-backdrop-filter: blur( 0px );">
        @include('frontend/layouts/inc/nav')
    </div>
    <main>
        <div class="main">

            <aside id="side-bar" class="hidden">
                <div class="cross">
                    <div id="sidebar-top-bar" class="top "></div>
                    <div id="sidebar-middle-bar" class="middle "></div>
                    <div id="sidebar-bottom-bar" class="bottom "></div>
                </div>

                aside
            </aside>
            <div class="icon">
                <i id="icon" class='bx bx-chevrons-right'></i>
            </div>
            <div id="content">
                main
            </div>
        </div>
    </main>
    </div>


</x-user-dashboard>