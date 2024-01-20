<x-guest-layout>
    <div style="background: rgba(106,169,108);
    box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
    backdrop-filter: blur( 0px );
    -webkit-backdrop-filter: blur( 0px );
">
        @include('frontend/layouts/inc/nav')
    </div>
<div class="imgarea" style="background-image: url('{{asset('assets/images/Glypho.png')}}');" >
</div>
<div style="min-height:25vh;">

<x-seed-detail-card name='corn' />
</div>
<pre>



    
</pre>

</x-guest-layout>