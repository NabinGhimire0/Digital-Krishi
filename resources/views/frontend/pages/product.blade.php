<x-guest-layout>
    <div style="background: rgba(106,169,108);
    box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
    backdrop-filter: blur( 0px );
    -webkit-backdrop-filter: blur( 0px );
">
        @include('frontend/layouts/inc/nav')

    </div>
    <div class="product-grid">
        <div class="right">

            <div class="img-section">
                <center>

                    <img src="{{asset('assets/images/corn-seed.png')}}" alt="">
                    <img src="{{asset('assets/images/Glypho.png')}}" alt="">
                    <img src="{{asset('assets/images/eco-power.png')}}" alt="">
                    <img src="{{asset('assets/images/Capture.PNG')}}" alt="">
                </center>
            </div>
            <div> 
                <center>

                    <button class="prev-btn">Previous</button>
                    <button class="next-btn">Next</button></div>
                </center>
        </div>
        <div></div>
      </div>

      <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
      <script>
        $(document).ready(function () {
          let currentImageIndex = 0;
          const $images = $('.img-section img');
          const totalImages = $images.length;
      
          // Show only the first image initially
          $images.eq(0).show();
      
          $('.next-btn').click(function () {
            currentImageIndex = (currentImageIndex + 1) % totalImages;
            updateImageDisplay();
          });
      
          $('.prev-btn').click(function () {
            currentImageIndex = (currentImageIndex - 1 + totalImages) % totalImages;
            updateImageDisplay();
          });
      
          function updateImageDisplay() {
            $images.hide().eq(currentImageIndex).show();
          }
        });
      </script>
</x-guest-layout>