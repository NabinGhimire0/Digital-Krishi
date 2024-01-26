<x-guest-layout>
    <div style="background: rgba(106,169,108);
    box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
    backdrop-filter: blur( 0px );
    -webkit-backdrop-filter: blur( 0px );
">
        @include('frontend/layouts/inc/nav')

    </div>
    <div class="marktetplace wrapper">
        <div class="search">
            <center>

                <form action="">
                    <input type="text" name="" id="">
                    <button>search</button>
                </form>
            </center>
        </div>
        <main>
            <div class="marketplace__grid">
                @if ($products->count() > 0)
                @foreach ($products as $item)
                <div>
                    <div style="">
                        <div
                            style="height: 30vh; position: relative;">
                            <a href="/products/{{ $item->id }}" style="">
                                {{-- <center></center> --}}
                                <img src="{{ asset('storage/' . $item->image) }}" alt="" style="position: absolute;
                                    top: 0;
                                    left: 0;
                                    width: 100%;
                                    height: 100%;
                                    object-fit: cover;">
                            </a>
                        </div>
                        <center>
                            <p>{{ $item->product->name }}</p>
                            <p>Price : <span>Rs. {{ $item->price }}</span></p>
                            <p>Owner: <span>{{ $item->user->name }}</span></p>
                            <p style="margin-block-end:1rem ">address: <span>{{ $item->user->province->name }}, {{
                                    $item->user->city->name }}</span></p>
                        </center>
                    </div>
                </div>
                @endforeach
                @else
                <p>no data</p>
                @endif
            </div>
        </main>
    </div>


</x-guest-layout>