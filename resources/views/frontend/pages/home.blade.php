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
                <h2>Notice</h2>
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
            @foreach ($seeds as $seed)
                <a href="seed/.{{ $seed->id }}">
                    <div>
                        <div>
                            <img src="{{ 'storage/' . $seed->image }}" alt="">
                        </div>
                        <center>

                            <p>{{ $seed->name }}</p>
                        </center>
                    </div>
                </a>
            @endforeach
        </div>
    </div>

    <div class="seed wrapper">
        <div class="heading">
            <h2>Seeds</h2>
            <button>View all</button>
        </div>
        <div class="seed__grid">
            @foreach ($seeds as $seed)
                <a href="seed/.{{ $seed->id }}">
                    <div>
                        <div>
                            <img src="{{ 'storage/' . $seed->image }}" alt="">
                        </div>
                        <center>

                            <p>{{ $seed->name }}</p>
                        </center>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
<<<<<<< HEAD


    <div class="presticides wrapper">
        <div class="heading">
            <h2>pesticides</h2>
            <button>View all</button>
        </div>
        <div class="presticides__grid">
            @foreach ($pesticides as $category)
                <x-seed-card categoryName="{{ $category->name }}" src="{{ asset('storage/' . $category->image) }}"
                    url="pesticides-/{{ $category->id }}" />
            @endforeach
        </div>
=======
      <div class="presticides__grid " id="services">
        @foreach ($pesticites as $category)
        <x-seed-card categoryName="{{ $category['name'] }}" src="{{ $category['src'] }}"
            url="{{ $category['url'] }}" />
        @endforeach
>>>>>>> f70a263e8cae308c40feea60745f21b75ad0eee6
    </div>

    {{-- hero section --}}


</x-guest-layout>
