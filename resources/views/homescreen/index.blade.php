<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Brewnique</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #4b2e1e;
            color: white;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 40px;
            background-color: #d6d3d2;
        }

        .logo {
            text-align: center;
            flex-grow: 1;
        }

        .logo img {
            width: 120px;
        }

        .nav {
            display: flex;
            gap: 20px;
        }

        .nav a {
            text-decoration: none;
            color: white;
            font-size: 1.2rem;
            padding: 10px 15px;
            transition: 0.3s;
        }

        .nav a:hover {
            background-color: #c49a6c;
            border-radius: 5px;
        }

        .menu {
            text-align: center;
            margin-top: 50px;
        }

        .menu h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .menu-items {
            display: flex;
            justify-content: center;
            gap: 40px;
            flex-wrap: wrap;
        }

        .menu-item {
            background: #6f4e37;
            padding: 20px;
            border-radius: 10px;
            width: 200px;
            text-align: center;
        }
    </style>
</head>

<body>
    <header class="header">
        <div class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="Brewnique Logo">
        </div>
        <nav class="nav">
            <a href="{{ route('home.index') }}">Home</a>
            <a href="#">About</a>
            <a href="#">Products</a>
            <a href="#">Menu</a>
        </nav>
    </header>
    <div class="menu">
        <h2>Our Coffees</h2>
        <div class="menu-items">
            <div class="menu-item">God Coffee</div>
            <div class="menu-item">Cappuccino</div>
            <div class="menu-item">Latte</div>
            <div class="menu-item">Mocha</div>
            <div class="menu-item">Americano</div>
            <div class="menu-item">Macchiato</div>
            <div class="menu-item">Iced Coffee</div>
            <div class="menu-item">Cold Brew</div>
            <div class="menu-item">Hazelnut Coffee</div>
            <div class="menu-item">Cold Coffee</div>

        </div>
    </div>
</body>

</html>
