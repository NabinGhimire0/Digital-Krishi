

<x-guest-layout>
    <div
        style="background: rgba(106,169,108);
    box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
    backdrop-filter: blur( 0px );
    -webkit-backdrop-filter: blur( 0px );
">
        @include('frontend/layouts/inc/nav')

    </div>
  <p>{{$pythonApiResponse["res"]["title"]}}</p>
  <img src="{{$pythonApiResponse["res"]["image_url"]}}" alt="">
  <p>{{$pythonApiResponse["res"]["prevent"]}}</p>
  <p>{{$pythonApiResponse["res"]["supplement_name"]}}</p>
</x-guest-layout>
