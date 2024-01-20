<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            /* height: 100vh; */
        }

        form {
            background-color: #fff;
            padding: 15px;
            margin-block: 1rem;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
        }

        h2 {
            color: #4caf50;
            text-align: center;
            margin-block: 1rem;
        }

        label {
            display: block;
            margin-bottom: 4px;
            color: #333;
        }

        input,
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 18px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
    <title>Registration Form</title>
</head>

<body>
    <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
        <h2>Registration Form</h2>      
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <x-input-error :messages="$errors->get('name')" />

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <x-input-error :messages="$errors->get('email')" />

        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone" required>
        <x-input-error :messages="$errors->get('phone')" />

        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required>
        <x-input-error :messages="$errors->get('address')" />

        <label for="province">Province:</label>
        <select  name="province_id" required>
            <option value=""selected default>Select Province</option>
            @foreach ($provinces as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
            <x-input-error :messages="$errors->get('province_id')" />
        </select>
        <label for="province">Province:</label>
        <select name="city_id" required>
            <option value=""selected default>Select Cities</option>
            @foreach ($city as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
            <x-input-error :messages="$errors->get('city_id')" />
        </select>
        <label for="">Land Area: <span>(optional)</span></label>
        <input type="text" id="crop_area" name="crop_area" required>
        <x-input-error :messages="$errors->get('crop_area')" />
        <label for="">Password</label>
        <input type="password" id="password" name="password" required>
        <x-input-error :messages="$errors->get('password')" />
        <label for="">Confirm Password:</label>
        <input type="password" id="password_confirmation" name="password_confirmation" required>

        <button type="submit">Register</button>
    </form>
</body>

</html>
