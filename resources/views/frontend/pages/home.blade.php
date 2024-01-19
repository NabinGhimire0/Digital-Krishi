@php
$categories = [
['name' => 'corn seed', 'src' => 'assets/images/corn-seed.png', 'url' => 'category'],
['name' => 'gram seed', 'src' => 'assets/images/gram-seed.png', 'url' => 'category'],
['name' => 'pea seed', 'src' => 'assets/images/pea-seed.png', 'url' => 'category'],
['name' => 'pumpkin seed', 'src' => 'assets/images/pumpkin-seed.png', 'url' => 'category'],
['name' => 'wheat seed', 'src' => 'assets/images/wheat-seed.png', 'url' => 'category'],
['name' => 'rice seed', 'src' => 'assets/images/rice-seed.png', 'url' => 'category']
];
$pesticites=[
  ['name' => 'eco power', 'src' => 'assets/images/eco-power.png', 'url' => 'category'],
['name' => 'fertilom', 'src' => 'assets/images/fertilom.png', 'url' => 'category'],
['name' => 'Glypho', 'src' => 'assets/images/Glypho.png', 'url' => 'category'],
['name' => 'malathion', 'src' => 'assets/images/malathion.png', 'url' => 'category'],
]
@endphp

<x-guest-layout>
  <div class="gif-area">
    {{-- <div class="bg-blur"> --}}

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
    {{-- </div> --}}
  </div>
  <div class="seed wrapper">
    <div class="heading">
      <h2>Seeds</h2>
      <button>View all</button>
    </div>
      <div class="seed__grid">
        @foreach ($categories as $category)
        <x-seed-card categoryName="{{ $category['name'] }}" src="{{ $category['src'] }}"
            url="{{ $category['url'] }}" />
        @endforeach
    </div>
  </div>



  <div class="presticides wrapper">
    <div class="heading">
      <h2>pesticides</h2>
      <button>View all</button>
    </div>
      <div class="presticides__grid">
        @foreach ($pesticites as $category)
        <x-seed-card categoryName="{{ $category['name'] }}" src="{{ $category['src'] }}"
            url="{{ $category['url'] }}" />
        @endforeach
    </div>
  </div>

{{-- hero section --}}


</x-guest-layout>