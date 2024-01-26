<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/card.css') }}">
    <title>Document</title>
    <style>
        .weather-card {
            width: 300px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
        }

        .location {
            margin-bottom: 15px;
        }

        .card-wrapper {
            /* border: 2px solid red; */
            display: grid;
            justify-content: center;
            margin-block: 4.4rem
        }

        .current-weather {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        img {
            width: 64px;
            height: 64px;
            margin-bottom: 10px;
        }

        .temperature {
            display: block;
            justify-content: space-around;
            margin-bottom: 10px;
        }

        .additional-info {
            font-size: 14px;
        }
    </style>
</head>

<body>
    <div style="background: rgba(106,169,108);
    box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
    backdrop-filter: blur( 0px );
    -webkit-backdrop-filter: blur( 0px );
    ">
        @include('frontend/layouts/inc/nav')
    </div>

    <div class="card-wrapper">


        <div class="weather-card">
            <div class="location">
                <h2 id="locationName"> {{ $formattedResponse['location']['name']}}</h2>
                <p id="localTime">{{ $formattedResponse['location']['local_time']}}</p>
            </div>
            <div class="current-weather">
                <img id="conditionIcon" src="{{$formattedResponse['current']['condition']['icon_url']}}" alt="Weather Icon" width="100%">
                <div class="temperature">
                    <p id="temperatureC" style="margin-block-end:0.1rem ">{{ $formattedResponse['current']['temperature_c']}}°C</p>
                    <p id="temperatureF">{{ $formattedResponse['current']['temperature_f']}}°F</p>
                </div>
                <p id="conditionText">Conditoin:{{ $formattedResponse['current']['condition']['text']}}</p>
            </div>
            <div class="additional-info">
                <p id="windInfo">Wind: {{ $formattedResponse['current']['wind_kph']}} kph / {{ $formattedResponse['current']['wind_mph']}} mph</p>
                <p id="humidity">Humidity: {{ $formattedResponse['current']['humidity']}}%</p>
            </div>
        </div>


    </div>

    @include('frontend/layouts/inc/footer')
</body>
</body>

</html>