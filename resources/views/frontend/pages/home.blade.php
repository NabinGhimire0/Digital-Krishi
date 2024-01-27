<x-guest-layout>
    <div class="gif-area">
        {{-- <div class="bg-blur"> --}}

        @include('frontend/layouts/inc/nav')
        <div class="hero wrapper" style="color:black">
            <div class="hero__content">
                <h1>{{ GoogleTranslate::trans('Digital Krishi', \App::getLocale()) }}</h1>
                <p>{{ GoogleTranslate::trans('Hajur ko parishram maa hamro saath', \App::getLocale()) }}</p>
                <a href="#seed">
                    <button>
                        Explore
                    </button>
                </a>
            </div>


            <div class="hero__notice" id="notice" style="overflow: hidden;cursor:pointer">
                <h2>Notice</h2>
                @foreach ($notices as $item)
                    <x-notice-card>{{ $item->title }}</x-notice-card>
                @endforeach
            </div>

        </div>
        {{--
        </div> --}}
    </div>

    <div class="seed wrapper">
        <div class="heading" style="margin-block: 1.5rem">
            <h2 id="seed">Crop Diseases</h2>
            {{-- <a href="seed"> --}}
            <button onclick="window.location.href='/diseases'" style="cursor: pointer">View all</button>
            {{-- </a> --}}
        </div>
        <div class="seed__grid">
            @foreach ($diseases as $diseases)
                <a href="diseases/{{ $diseases->id }}">
                    <div>
                        <div style="display: flex;align-items: center;justify-content: center">
                            <img src="{{ 'storage/' . $diseases->image }}" alt="">
                        </div>
                        <center>

                            <p
                                style="white-space: nowrap;
                        overflow: hidden;
                        text-overflow: ellipsis;">
                                {{ $diseases->name }}</p>
                        </center>
                    </div>
                </a>
            @endforeach
        </div>
    </div>

    <div class="seed wrapper">
        <div class="heading" style="margin-block: 1.5rem">
            <h2 id="seed">Seeds</h2>
            {{-- <a href="seed"> --}}
            <button onclick="window.location.href='/seed'" style="cursor: pointer">View all</button>
            {{-- </a> --}}
        </div>
        <div class="seed__grid">
            @foreach ($seeds as $seed)
                <a href="seed/{{ $seed->id }}">
                    <div>
                        <div style="display: flex;align-items: center;justify-content: center">
                            <img src="{{ 'storage/' . $seed->image }}" alt="">
                        </div>
                        <center>

                            <p
                                style="white-space: nowrap;
                        overflow: hidden;
                        text-overflow: ellipsis;">
                                {{ $seed->name }}</p>
                        </center>
                    </div>
                </a>
            @endforeach
        </div>
    </div>


    <div class="presticides wrapper" id="pesticides">
        <div class="heading">
            <h2>pesticides</h2>

            <button style="cursor:pointer" onclick="window.location.href='/pesticides/all'">View all</button>

        </div>
        <div class="seed__grid">
            @foreach ($pesticides as $category)
                {{-- <a href="/pesticides/{{ $category->id }}"> --}}

                <x-seed-card categoryId="{{ $category->id }}" categoryName="{{ $category->name }}"
                    src="{{ asset('storage/' . $category->image) }}" url="pesticides-/{{ $category->id }}" />
                {{--
            </a> --}}
            @endforeach

        </div>

    </div>


    <div class="presticides wrapper" id="pesticides">
        <div class="heading">
            <h2>Fertilizers</h2>
            <a href="fertilizers/all">

                <button style="cursor: pointer">View all</button>
            </a>
        </div>
        <div class="seed__grid">

            @foreach ($fertilizers as $category)
                <a href="fertilizer/{{ $category->id }}">
                    <div>
                        <div style="display: flex;align-items: center;justify-content: center">
                            <img src="{{ 'storage/' . $category->image }}" alt="">
                        </div>
                        <center>

                            <p
                                style="white-space: nowrap;
                        overflow: hidden;
                        text-overflow: ellipsis;">
                                {{ $category->name }}</p>
                        </center>
                    </div>
                </a>
            @endforeach
        </div>

    </div>



    {{-- hero section --}}


</x-guest-layout>
<script>
    const notice = document.getElementById('notice')
    notice.addEventListener('click', () => {
        window.location.href = '/notice'
    })
</script>
