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
            <h1>{{ GoogleTranslate::trans('Equipments',\App::getLocale()) }}</h1>
        </div>
        <div class="notices" style="margin-block: 2rem">
  
                <div class="seed wrapper">
                   
                    <div class="seed__grid">
                        @foreach ($equipment as $item)
                            <a href="farming-equipment/{{ $item->id }}" >
                                <div>
                                    <div style="display: flex;align-items: center;justify-content: center">
                                        <center>

                                            <img src="{{ 'storage/' . $item->image }}" alt="" width="100%">
                                        </center>
                                    </div>
                                    <center>
                                        <p>{{ GoogleTranslate::trans($item->name,\App::getLocale()) }}</p>
                                    </center>
                                </div>
                            </a>
                        @endforeach
                        
                    </div>
                
            </div>
          
        </div>
    </div>
    

</x-guest-layout>

