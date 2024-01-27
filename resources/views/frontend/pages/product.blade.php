<x-guest-layout>
    <div
        style="background: rgba(106,169,108);
    box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
    backdrop-filter: blur( 0px );
    -webkit-backdrop-filter: blur( 0px );
">
        @include('frontend/layouts/inc/nav')

    </div>
    <div class="product-grid wrapper">
        <div class="right">

            <div class="img-section">
                <center>

                    <img src="{{ asset('storage/' . $product->image) }}" alt="" >
                    <img src="{{ asset('storage/' . $product->image) }}" alt="" >
                </center>
            </div>
            <div>
                <center>

                    <button class="prev-btn">Previous</button>
                    <button class="next-btn">Next</button>
            </div>
            </center>
        </div>
        <div class="desc">
            <div>

                <h2>{{ $product->product->name }}</h2>
                <hr>
                <h5>Price : <span>Rs. {{ $product->price }} (per unit)</h5>
                <h5>Total Quantity : <span>{{ $product->quantity }}</span></h5>
                <h5>Owner: <span>{{ $product->user->name }}</span></h5>
                <h5>address: <span>{{ $product->user->province->name }}, {{ $product->user->city->name }}</span></h5>
                <h5>Contact: <span>{{ $product->contact }}</span></h5>
                <hr>

                <p>{{ $product->short_description }}</p>

                <p>{!! $product->description !!}</p>
            </div>
            <div class="quantitiy">
                <form method="POST" id="orderForm">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" id="">
                    <input type="hidden" name="product_id" value="{{ $product->product_id }}" id="">
                    <input type="hidden" name="farmer_id" value="{{ $product->user->id}}" id="">
                    <input type="hidden" name="market_place_id" value="{{ $product->id }}" id="">
                    <input type="hidden" name="price" value="{{ $product->price }}" id="">
                    <center>
                        <button id="add" type="button">+</button>
                        <input type="number" name="qnty" id="qnty" value="0">
                        <button id="sub" type="button">-</button>
                    </center>
            </div>
            <div class="buttons">
                <center>
                    <button style="background-color:rgb(226, 195, 137)" id="placeOrderBtn" type="button">Place
                        Order</button>
                    {{-- <a href="tel:+1234567890">Call us at +1234567890</a> --}}
                </center>
                </form>
            </div>
        </div>

    </div>
    @section('scripts')
        <script>
            $(document).ready(function() {
                let currentImageIndex = 0;
                const $images = $('.img-section img');
                const totalImages = $images.length;

                // Show only the first image initially
                $images.eq(0).show();

                $('.next-btn').click(function() {
                    currentImageIndex = (currentImageIndex + 1) % totalImages;
                    updateImageDisplay();
                });

                $('.prev-btn').click(function() {
                    currentImageIndex = (currentImageIndex - 1 + totalImages) % totalImages;
                    updateImageDisplay();
                });

                function updateImageDisplay() {
                    $images.hide().eq(currentImageIndex).show();
                }
            });



            const add = document.getElementById('add');
            const sub = document.getElementById('sub');
            const qnty = document.getElementById('qnty');
            add.addEventListener('click', () => {
                qnty.value++
            })
            sub.addEventListener('click', () => {
                if (qnty.value > 0) {

                    qnty.value--
                } else {
                    qnty.value = 0
                }

            })


            //place order using ajax
            $(document).ready(function() {
                $('#placeOrderBtn').click(function(e) {
                    e.preventDefault();

                    var userId = $('input[name="user_id"]').val();
                    var farmer_id = $('input[name="farmer_id"]').val();
                    var product_id = $('input[name="product_id"]').val();
                    var marketPlaceId = $('input[name="market_place_id"]').val();
                    var qnty = $('input[name="qnty"]').val();
                    var price = $('input[name="price"]').val() * qnty;
                    var payment_method = "on cash";

                    $.ajax({
                        url: '/place-order',
                        type: 'POST',
                        data: {
                            '_token': $('input[name="_token"]').val(), // Corrected the token name
                            'user_id': userId,
                            'farmer_id': farmer_id,
                            'product_id': product_id,
                            'market_place_id': marketPlaceId,
                            'quantity': qnty,
                            'price': price,
                            'payment_method': payment_method
                        },
                        success: function(data) {
                            $(function() {
                                var Toast = Swal.mixin({
                                    toast: true,
                                    position: 'top-end',
                                    showConfirmButton: false,
                                    timer: 3000
                                });

                                Toast.fire({
                                    icon: 'success',
                                    title: 'Order placed successfully'
                                }).then(function() {
                                    // Reload the page
                                    window.location.reload();
                                });
                            });
                        },
                        error: function(data) {
                            // Handle errors, e.g., show an error message 
                            $(function() {
                                var Toast = Swal.mixin({
                                    toast: true,
                                    position: 'top-end',
                                    showConfirmButton: false,
                                    timer: 3000
                                });

                                Toast.fire({
                                    icon: 'error',
                                    title: 'Something went wrong. Please try again.'
                                }).then(function() {
                                    // Reload the page
                                    window.location.reload();
                                });
                            });
                        }
                    });
                });
            });
        </script>
    @endsection
</x-guest-layout>
