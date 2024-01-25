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
                    <button class="next-btn">Next</button>
            </div>
            </center>
        </div>
        <div class="desc">
            <div>
                
                <h2>Corn</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae reprehenderit tempora praesentium
                    eligendi, placeat exercitationem corporis non, libero cum perferendis quidem quam, eos maiores delectus
                    fuga? Id voluptatum nesciunt eligendi?</p>
                </P>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae reprehenderit tempora praesentium
                    eligendi, placeat exercitationem corporis non, libero cum perferendis quidem quam, eos maiores delectus
                    fuga? Id voluptatum nesciunt eligendi?</p>
                </P>
                </div>
                    <div  class="quantitiy">
                        <form action="">

                            <center>
                                <button id="add" type="button">+</button>
                                <input type="number" id="qnty" value="0">
                                <button id="sub" type="button">-</button>
                            </center>
                        </div>
                        <div class="buttons">
                            <center>
                                
                                <button style="background-color:rgb(226, 195, 137)">Place Order</button>
                                <button style="background-color:rgb(120, 200, 120)">Call Seller</button>
                            </center>
                        </form>
                    </div>
        </div>
       
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


        
        const add =document.getElementById('add');
        const sub =document.getElementById('sub');
        const qnty =document.getElementById('qnty');
        add.addEventListener('click',()=>{
            qnty.value++
        })
        sub.addEventListener('click',()=>{
            if(qnty.value>0){
                
                qnty.value--
            }else{
                qnty.value=0
            }
            
        })
    </script>
</x-guest-layout>