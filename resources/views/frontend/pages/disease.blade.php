<x-guest-layout>
    <div style="background: rgba(106,169,108);
    box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
    backdrop-filter: blur( 0px );
    -webkit-backdrop-filter: blur( 0px );
">
        @include('frontend/layouts/inc/nav')

    </div>
<<<<<<< HEAD
=======
    <center>
        <h1>Disease and Symptom</h1>
    </center>
    <div class="wrapper table">
>>>>>>> 2a31f12e0023bb9e2b08bdace58da4c0305e10c0

    <div class="wrapper">
        <div style="text-align: center;margin-block-start: 2rem">
            <h1>Diseases and Solution</h1>
        </div>
        <div class="notices" style="margin-block: 2rem">
  
                <div class="seed wrapper">
                   
                    <div class="seed__grid">
                        @foreach ($diseases as $disease)
                            <a href="diseases/{{ $disease->id }}">
                                <div>
                                    <div style="display: flex;align-items: center;justify-content: center">
                                        <img src="{{ 'storage/' . $disease->image }}" alt="">
                                    </div>
                                    <center>
            
                                        <p>{{ $disease->name }}</p>
                                    </center>
                                </div>
                            </a>
                        @endforeach
                        
                    </div>
                
            </div>
          
        </div>
    </div>
    

</x-guest-layout>

