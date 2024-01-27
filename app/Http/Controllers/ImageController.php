<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Symfony\Component\VarDumper\VarDumper;

class ImageController extends Controller
{
    public $response;
    public function showForm()
    {
        return view('frontend.pages.ml');
    }

    // public function submitForm(Request $request)
    // {
    //     // Validate the request
    //     $request->validate([
    //         'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    //     ]);

    //     // Get the file from the request
    //     $image = $request->file('image');

    //     // Prepare the payload for the Python API (if needed)
    //     $payload = [
    //         'image' => base64_encode(file_get_contents($image->path())),
    //     ];

    //     // Replace 'http://your-python-api-endpoint' with the actual URL of your Python API endpoint
    //         $pythonApiEndpoint = 'http://127.0.0.1:5000/submit';

    //     // Make a POST request to the Python API
    //     $response = Http::post($pythonApiEndpoint, $payload);

    //     // Check if the request was successful (status code 200)
    //     // if ($response->successful()) {
    //         // Parse the JSON data from the response
            
    //         $pythonApiResponse = $response;

    //         // Process or use the data as needed
    //         // ...
    //         echo "<pre>";
    //         var_dump($pythonApiResponse);
    //         // return response()->json(['data_from_python_api' => $pythonApiResponse]);
    //     // } else {
    //         // Handle the case where the request was not successful
    //         // return response()->json(['error' => 'Failed to fetch data from Python API']);
    //     // }
    // }

    public function submitForm(Request $request)
    {
        if ($request->isMethod('post')) {
            // Validate the request
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            // Get the file from the request
            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            $file_path = public_path('static/uploads/' . $filename);
            $image->move(public_path('static/uploads'), $filename);
            $pythonApiEndpoint = 'http://127.0.0.1:5000/submit';
            //fkask api call
            $response = Http::attach(
                'image',
                file_get_contents($file_path),
                $filename
            )->post($pythonApiEndpoint);
//success or failure->idk why invalid 
            if ($response->successful()) {
                $pythonApiResponse = $response->json();
                $this->response = $pythonApiResponse;
                return view('frontend.pages.report', compact('pythonApiResponse'));
            } else {
                echo "format invalid";
            }
        }   
        return response()->json(['error' => 'Invalid request'], 400);
    }
    public function showReport(){
        return view('frontend.pages.report', ['response' => $this->response]);
    }
}