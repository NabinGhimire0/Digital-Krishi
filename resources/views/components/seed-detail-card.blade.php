<div class="seed__detail">
    <div class="seed__detail-card">
        <center>

            <h1>{{$name}}</h1>
            <p>{{$short_descr}}</p>
        </center>
    </div>
    <div class="seed_detail-info">
        {{-- <div style="display: flex;">
            <span class="heading">Climate:</span><span>Lorem ipsum dolor sit </span>
        </div>
        <div style="display: flex"> <span class="heading">altitude:</span>
            <span>Lorem ipsum dolor </span>
        </div>
        <div style="display: flex"><span class="heading">market price:</span>
            <span>Lorem ipsum dolor sit amet consectetur.</span>
        </div>
        --}}
        <p><span style="color:green;margin-inline-end: 2.85rem">Climate </span>: {{ $climate }}<br>
            <span style="color:green;margin-inline-end: 2.7rem"> Altitude </span>: {{ $altitude }}<br>
            <span style="color:green;margin-inline-end: 1rem">
                market price
            </span>
            : {{$market_price}}<br>
        </p>



    </div>
</div>
<div class="wrapper">
   {{$description}}
</div>