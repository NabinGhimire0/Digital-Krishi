<x-guest-layout>
    <div style="background: rgba(106,169,108);
    box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
    backdrop-filter: blur( 0px );
    -webkit-backdrop-filter: blur( 0px );
">
        @include('frontend/layouts/inc/nav')

    </div>
    @if($pythonApiResponse!== null)

    <div class="imgarea" style="overflow: hidden">
        <img src=" {{ $pythonApiResponse["res"]["image_url"] }}" width="100%" alt="">
    </div>
    <div style="min-height:25vh;">
        <div class="seed__detail">
            <div class="seed__detail-card">
                <center>

                    <h1>{{ GoogleTranslate::trans($pythonApiResponse["res"]["title"],\App::getLocale()) }}</h1>

                </center>
            </div>
            <div class="seed_detail-info" style="display: block;">
                <table class="seed-table" style="margin-block: 1.5rem;border:none" border="0">
                    <center>
                        <tr >
                            <td style="color: green;width:30%;text-align: center" >{{ GoogleTranslate::trans('Cure',\App::getLocale()) }}
                            </td >
                            <td  style="color: green;width:100%;display: flex;text-align: center">{{
                                GoogleTranslate::trans($pythonApiResponse["res"]["supplement_name"],\App::getLocale())
                                }}</td>
                        </tr>
                </table>
            </div>
        </div>
        <div class="wrapper" style="margin-block: 1.5rem;width:66%">
            <h2>{{ GoogleTranslate::trans("Description",\App::getLocale()) }}</h2>
            <p style="margin-block-end:1rem ">

                {{ GoogleTranslate::trans($pythonApiResponse["res"]["description"],\App::getLocale()) }}
            </p>
            <hr>
            <h2 style="margin-block-start:1rem ">{{ GoogleTranslate::trans("Cure",\App::getLocale()) }}</h2>
            <p>

                {{ GoogleTranslate::trans($pythonApiResponse["res"]["prevent"],\App::getLocale()) }}
            </p>


        </div>

    </div>
    <pre>
</pre>
    @else
    <div style="min-height:62vh;display: flex;justify-content: center;align-items: center;place-content: center">
        {{-- <div style="display: flex;justify-content: center;align-items: center;place-content: center"> --}}

            <div>

                <h1>
                    {{ GoogleTranslate::trans("Couldn't identify the image.",\App::getLocale()) }}
                </h1>
            </div>
            {{--
        </div> --}}
    </div>
    @endif
</x-guest-layout>