<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Brewnique</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: url('{{ asset('images/background.jpg') }}') no-repeat center center/cover;
            text-align: center;
            color: #3b1d0f;
            font-family: Arial, sans-serif;
        }

        .container {
            background: rgba(235, 229, 229, 0.6);
            padding: 40px;
            border-radius: 10px;
        }

        h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .btn {
            display: inline-block;
            padding: 12px 24px;
            font-size: 1.2rem;
            color: white;
            background-color: #c49a6c;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            transition: 0.3s;
        }

        .btn:hover {
            background-color: #3b1d0f;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>"Brewed with love, served with passion."</h1>
        <a href="{{ route('home.index') }}" class="btn">Get Started</a>
    </div>
</body>

</html>
