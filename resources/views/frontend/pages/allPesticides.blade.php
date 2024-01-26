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
            <h1>Pesticides</h1>
        </div>
        <div class="notices" style="margin-block: 2rem">
  
                <div class="seed wrapper">
                   
                    <div class="seed__grid">
                        @foreach ($pesticides as $category)
                      
                            {{-- <x-seed-card categoryName="{{ $category->name }}" src="{{ asset('storage/' . $category->image) }}"
                                url="/pesticides-/{{ $category->id }}" /> --}}
                                <a href="seed/{{ $category->id }}" >
                                    <div>
                                        <div style="display: flex;align-items: center;justify-content: center;overflow:hidden">
                                            <center>
    
                                                <img src="{{ asset('storage/' . $category->image) }}" alt="" >
                                            </center>
                                        </div>
                                        <center>
                
                                            <p>{{ $category->name }}</p>
                                        </center>
                                    </div>
                                </a>
                    @endforeach
                        
                    </div>
                
            </div>
          
        </div>
    </div>
    

</x-guest-layout>

