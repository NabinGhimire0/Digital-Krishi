<x-guest-layout>
    <div style="background: rgba(106,169,108);
    box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
    backdrop-filter: blur( 0px );
    -webkit-backdrop-filter: blur( 0px );
">
        @include('frontend/layouts/inc/nav')

    </div>

    <div class="wrapper">
        <div style="text-align: center;margin-block-start: 2rem">
            <h1>Notice</h1>
        </div>
        <div class="notices" style="margin-block: 2rem;text-align: center;min-height:43.2svh">
           
<h3>

    {{$notice->title}}
</h3>
<p>

    {{$notice->description}}
</p>
                      

          
        </div>
    </div>
    

</x-guest-layout>

