<x-guest-layout>
    <div style="background: rgba(106,169,108);
    box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
    backdrop-filter: blur( 0px );
    -webkit-backdrop-filter: blur( 0px );
">
        @include('frontend/layouts/inc/nav')
    </div>
    {{-- {{ asset('storage/'.$pesticides->image) }}
    style="background-image: url('{{ asset('storage/'.$pesticides->image) }}');"
    --}}
<div class="imgarea" >
    <img src=" {{ asset('storage/'.$pesticides->image) }}" alt="">
</div>
<div style="min-height:25vh;">

    <div class="seed__detail">
        <div class="seed__detail-card">
            <center>
    
                <h1>{{ $pesticides->name }}</h1>
                <p>{{ $pesticides->shortdesc }}</p>
            </center>
        </div>
        <div class="seed_detail-info">
            <p>
                <span style="color:green;margin-inline-end: 1rem">
                    market price
                </span>
                : {{ $pesticides->price }}<br>
            </p>

    
        </div>
    </div>
    <div class="wrapper">
        {{ $pesticides->description }}
    </div>
    
</div>
<pre>



    
</pre>

</x-guest-layout>