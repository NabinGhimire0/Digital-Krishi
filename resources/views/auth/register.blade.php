<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="assets/css/login.css">
    <style>
        /* Background and Form Styling */
    </style>
</head>

<body>
    <div class="login-background" style="min-width">
        <form action="{{ route('register') }}" method="post">

            <div class="login-form shadow-lg">
                <div class="login-title text-2xl mb-2">Register</div>
                <center>
                    <input type="text" placeholder="name" name="name" class="form-control" />
                    <input type="password" placeholder="email" name="email" class="form-control" />
                    <input type="number" placeholder="Phone" class="form-control" name="phone" />
                    <select name="province" id="" class="form-control" style="padding: 0.75rem 5.5rem;">
                        <option value="" selected disabled>Select Province</option>
                        @foreach ($provinces as $item)
                            <option value="{{ $item->name }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                    <select name="city" id="" class="form-control" style="padding: 0.75rem 6.6rem;">
                        <option value="" selected disabled>Select city </option>
                        @foreach ($city as $item)
                            <option value="{{ $item->name }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                    <input type="text" placeholder="Address" name="address" class="form-control" />
                    {{-- <input type="text" placeholder="Phone" class="form-control" /> --}}
                    <input type="text" placeholder="crop area" class="form-control" name="crop_area" />
                    <input type="password" placeholder="Password" class="form-control" name="password" />
                    <input type="password" placeholder="confirm Password" class="form-control"
                        name="confirm_password" />

                    <label class="checkbox-label">
                        <input type="checkbox" /> Remember Me
                    </label>
                    <button class="login-btn">Register</button>
                </center>
            </div>
        </form>
    </div>

</body>

</html>
