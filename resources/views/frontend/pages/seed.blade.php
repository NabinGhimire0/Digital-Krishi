<x-guest-layout>
    <div style="background: rgba(106,169,108);
    box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
    backdrop-filter: blur( 0px );
    -webkit-backdrop-filter: blur( 0px );
">
        @include('frontend/layouts/inc/nav')
    </div>
<div class="imgarea" style="background-image: url('{{asset('assets/images/corn-seed.png')}}');" >
</div>
<div style="min-height:25vh;">
    <x-seed-detail-card name='corn'  climate='humid' altitude='1000' :marked_price='100' description='Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.0' short_desc='loremdjflkasfjajf' />

</div>
<pre>
</pre>

</x-guest-layout>