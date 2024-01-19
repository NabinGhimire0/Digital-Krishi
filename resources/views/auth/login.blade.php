<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="assets/css/login.css">

</head>

<body>
    <div class="login-background">
        <form action="/login" method="post" enctype="multipart/form-data">
            @csrf
            <div class="login-form shadow-lg">
                <div class="login-title text-2xl mb-2">Login</div>
                <input name="email" type="email" placeholder="email" class="form-control" />
                <input type="password" name="password" placeholder="Password" class="form-control" />
                <label class="checkbox-label">
                    <input type="checkbox" /> Remember Me
                </label>
                <button class="login-btn">Login</button>
            </div>
        </form>
    </div>

</body>

</html>
