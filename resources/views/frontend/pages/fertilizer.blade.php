<x-guest-layout>
    <div
        style="background: rgba(106,169,108);
    box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
    backdrop-filter: blur( 0px );
    -webkit-backdrop-filter: blur( 0px );
">
        @include('frontend/layouts/inc/nav')
    </div>
    <div class="imgarea" >
        <img src=" {{ asset('storage/'.$fertilizer->image) }}" alt="">
    </div>
    <div clstyle="min-height:25vh;">
            <div class="seed__detail">
            <div class="seed__detail-card">
                <center>
                    <h1>{{ GoogleTranslate::trans($fertilizer->name,\App::getLocale()) }}</h1>
                    <p>{{ GoogleTranslate::trans($fertilizer->shortdesc,\App::getLocale()) }}</p>
                </center>
            </div>
            <div class="seed_detail-info">
                <p>
                    <span style="color:green;margin-inline-end: 1rem">
                        {{ GoogleTranslate::trans('Market Price',\App::getLocale()) }}
                    </span>
                    : {{ GoogleTranslate::trans( $fertilizer->price,\App::getLocale()) }}<br>
                </p>
            </div>
        </div>
        <div class="wrapper" style="margin-block: 1.5rem;width:66%">
            <p>

                {!! GoogleTranslate::trans($fertilizer->description,\App::getLocale()) !!}
            </p>
        </div>

    </div>
    <pre>
</pre>

</x-guest-layout>
