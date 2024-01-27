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
        <img src=" {{ asset('storage/'.$seed->image) }}" alt="">
    </div>
    <div style="min-height:25vh;">
            <div class="seed__detail">
            <div class="seed__detail-card">
                <center>

                    <h1>{{ GoogleTranslate::trans($seed->name,\App::getLocale()) }}</h1>
                    <p>{{ GoogleTranslate::trans($seed->shortdesc,\App::getLocale()) }}</p>
                </center>
            </div>
            <div class="seed_detail-info">
                {{-- <p><span style="color:green;margin-inline-end: 2.85rem">Climate </span>: {{ $seed->climate }}<br>
                    <span style="color:green;margin-inline-end: 2.7rem"> Altitude </span>: {{ $seed->altitude }}<br>
                    <span style="color:green;margin-inline-end: 1rem">
                        market price
                    </span>
                    : {{ $seed->market_price }}<br>
                </p> --}}
                <table class="seed-table" border="0">
                    <tr>
                        <td    style="color: green;width: 100px">{{ GoogleTranslate::trans('Climate',\App::getLocale()) }}</td>
                        <td >{{ GoogleTranslate::trans($seed->climate,\App::getLocale()) }}</td>
                    </tr>
                    <tr>
                        <td style="color: green;">{{ GoogleTranslate::trans('Altitude',\App::getLocale()) }}</td>
                        <td >{{GoogleTranslate::trans( $seed->altitude,\App::getLocale()) }}</td>
                    </tr>
                    <tr>
                        <td style="color: green;">{{ GoogleTranslate::trans('Market Price',\App::getLocale()) }}</td>
                        <td >{{ GoogleTranslate::trans($seed->market_price,\App::getLocale()) }}</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="wrapper" style="margin-block: 1.5rem;width:66%">
            <p>

                {!! GoogleTranslate::trans($seed->description,\App::getLocale()) !!}
            </p>
        </div>

    </div>
    <pre>
</pre>

</x-guest-layout>
