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
        <img src=" {{ asset('storage/'.$equipment->image) }}" alt="">
    </div>
    <div style="min-height:25vh;">
            <div class="seed__detail">
            <div class="seed__detail-card">
                <center>

                    <h1>{{ GoogleTranslate::trans($equipment->name,\App::getLocale()) }}</h1>
                </center>
            </div>
            <div class="seed_detail-info">
                <table class="seed-table" border="0">
                    <tr>
                        <td    style="color: green;width: 100px">{{ GoogleTranslate::trans('Rate',\App::getLocale()) }}</td>
                        <td >{{ GoogleTranslate::trans($equipment->price,\App::getLocale()) }}</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="wrapper" style="margin-block: 1.5rem;width:66%">
            <p>

                {!! GoogleTranslate::trans($equipment->description,\App::getLocale()) !!}
            </p>
        </div>

    </div>
    <pre>
</pre>

</x-guest-layout>
