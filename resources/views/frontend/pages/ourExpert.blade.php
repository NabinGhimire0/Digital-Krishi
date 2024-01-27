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
                <h1>{{ GoogleTranslate::trans('Our Agro Expert',\App::getLocale()) }}</h1>
                <p>{{ GoogleTranslate::trans('Here are our expert who are very helpful top provide support to your filed',\App::getLocale()) }}</p>
            </center>
          

            <div class="seed__grid" >
                @foreach ($experts as $item)
                    <a href="" onclick="return false">
                        <div>
                            <div style="">
                                <img src="{{ 'storage/' . $item->image }}" alt="">
                            </div>
                            <center>
    
                                <p>{{ GoogleTranslate::trans($item->name,\App::getLocale()) }}</p>
                            </center>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </main>

</x-guest-layout>
