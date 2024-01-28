<?php

// app/Http/Controllers/WeatherController.php


namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\VarDumper\VarDumper;

class WeatherController extends Controller
{
    protected $client;
    protected $apiKey;

    public function __construct()
    {
        $this->client = new Client();
        $this->apiKey = '795e6e27c51242d59d3131525232702'; // Your WeatherAPI API key
    }

    public function getUserLocation()
    {
        return view('get_location');
    }

        public function getWeather()
        {
            $city = Auth::user()->city->name;
            $url = "http://api.weatherapi.com/v1/current.json?key={$this->apiKey}&q={$city}&aqi=no";
        
            try {
                $response = $this->client->get($url);
                $data = json_decode($response->getBody(), true);
        
                // Extracting information
                $locationName = $data['location']['name'];
                $country = $data['location']['country'];
                $latitude = $data['location']['lat'];
                $longitude = $data['location']['lon'];
                $localTime = $data['location']['localtime'];
                $isDay = $data['current']['is_day'];
                $tempC = $data['current']['temp_c'];
                $tempF = $data['current']['temp_f'];
                $windKph = $data['current']['wind_kph'];
                $windMph = $data['current']['wind_mph'];
                $conditionText = $data['current']['condition']['text'];
                $iconUrl = 'http:' . $data['current']['condition']['icon'];
                $humidity = $data['current']['humidity'];
        
                // Determine whether it's day or night
                $timeOfDay = ($isDay == 1) ? 'Day' : 'Night';
        
                // Format the response
                $formattedResponse = [
                    'location' => [
                        'name' => $locationName,
                        'country' => $country,
                        'latitude' => $latitude,
                        'longitude' => $longitude,
                        'local_time' => $localTime,
                        'time_of_day' => $timeOfDay,
                    ],
                    'current' => [
                        'temperature_c' => $tempC,
                        'temperature_f' => $tempF,
                        'wind_kph' => $windKph,
                        'wind_mph' => $windMph,
                        'condition' => [
                            'text' => $conditionText,
                            'icon_url' => $iconUrl,
                        ],
                        'humidity' => $humidity,
                    ],
                ];
        
                // return response()->json($formattedResponse);
                // echo "<pre>";
                // var_dump($formattedResponse);
                return view('frontend.pages.weather', compact('formattedResponse'));
            } catch (\Exception $e) {
              
                echo "<script>alert('Location is not available currently')
                window.location.href = '/';
                </script>";
            }
        }
    

}