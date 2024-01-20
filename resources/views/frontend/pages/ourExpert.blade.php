<x-guest-layout>
    <div
        style="background: rgba(106,169,108);
    box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
    backdrop-filter: blur( 0px );
    -webkit-backdrop-filter: blur( 0px );
">
        @include('frontend/layouts/inc/nav')

    </div>
    <div class="banner">
        <img src="{{ asset('assets/images/Banner.png') }}" alt="">
    </div>
    <main style="background: var(--clr-bg-primary);">

        <div class="wrapper">
            <center>
                <h1>Our Agro Expert</h1>
                <p>Here are our expert who are very helpful top provide support to your filed </p>
            </center>
            <div class="expert-grid">
                @foreach ($experts as $item)
                    <div style="" class="expert-grid__card">

                        <div>
                            <div>
                                <img src="{{ asset('storage/'.$item->image) }}" alt="">
                            </div>
                            <center>
                                <h3>{{ $item->name }}</h3>
                            </center>
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </main>

</x-guest-layout>
