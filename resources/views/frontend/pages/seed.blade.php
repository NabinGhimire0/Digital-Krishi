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

                    <h1>{{ $seed->name }}</h1>
                    <p>{{ $seed->shortdesc }}</p>
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
                        <td    style="color: green;width: 100px">Climate</td>
                        <td >{{ $seed->climate }}</td>
                    </tr>
                    <tr>
                        <td style="color: green;">Altitude</td>
                        <td >{{ $seed->altitude }}</td>
                    </tr>
                    <tr>
                        <td style="color: green;">Market Price</td>
                        <td >{{ $seed->market_price }}</td>
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
