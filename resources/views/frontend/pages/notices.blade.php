<x-guest-layout>
    <div style="background: rgba(106,169,108);
    box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
    backdrop-filter: blur( 0px );
    -webkit-backdrop-filter: blur( 0px );
">
        @include('frontend/layouts/inc/nav')

    </div>
 
    <div class="wrapper" >
           <div style="text-align: center">
            <h1>Notice</h1>
           </div>
           <div class="notices">
            @php
                
            @endphp


           </div>
        </div>
    </main>
        
    </x-guest-layout>