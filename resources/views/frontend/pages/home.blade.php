<x-guest-layout>
  <div class="gif-area">
    <div class="bg-blur">

        @include('frontend/layouts/inc/nav')
        
        <div class="hero wrapper" style="color:black">
      <div class="hero__content">
          <h1>Digital Krishi</h1>
          <p>Hajur ko parishram maa hamro saath</p>
          <button>
              Explore
          </button>
      </div>
      <div class="hero__notice">
      <h2 >Notice</h2>
      <x-notice-card />
      <x-notice-card />
      <x-notice-card />
      </div>
        </div>
    </div>
  </div>
  <div class="wrapper">
    <div class="heading">
      <h2>Seeds</h2>
      <button>View all</button>
    </div>
  </div>

{{-- hero section --}}


</x-guest-layout>