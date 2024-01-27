<x-guest-layout>
    <div class="header" style="    background: rgba(106, 169, 108);
    box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
    backdrop-filter: blur(0px);
    -webkit-backdrop-filter: blur(0px);
    padding: 20px;
    text-align: center;
    color: #fff;">
        @include('frontend/layouts/inc/nav')
    </div>

    <div class="card-wrapper">
        <div class="form-card">
            <form method="post" action="{{ url('/submit') }}" enctype="multipart/form-data">
                @csrf
                <label for="image">
                {{ GoogleTranslate::trans('Choose an image:',\App::getLocale()) }}
                    
                </label>
                <input type="file" name="image" accept="image/*" required>
                <br>
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>

</x-guest-layout>
