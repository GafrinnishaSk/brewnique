<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Brewnique</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f2efed;
            color: white;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 40px;
            background-color: #4b2e1e;
        }

        .logo {
            text-align: left;
            flex-grow: 1;
        }

        .logo img {
            width: 100px;
            height: 100px;
        }

        .nav {
            display: flex;
            gap: 20px;
        }

        .nav a {
            text-decoration: none;
            color: #c5bfbc;
            font-size: 1.2rem;
            padding: 10px 15px;
            transition: 0.3s;
        }

        .nav a:hover {
            background-color: #c49a6c;
            border-radius: 5px;
        }

        /* video section styles */
        .video-slider {
            position: relative;
            width: 100%;
            height: 850px;
            overflow: hidden;
        }

        .video-slider video {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .video-caption {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.5);
            padding: 30px 40px;
            border-radius: 10px;
            text-align: center;
        }

        .video-caption h2 {
            font-size: 2.8rem;
            margin-bottom: 10px;
            color: #fff;
        }

        .video-caption p {
            font-size: 1.2rem;
            margin-bottom: 15px;
            color: #e0e0e0;
        }

        .video-caption a.btn-explore {
            background-color: #c49a6c;
            color: #2c1a0f;
            padding: 10px 25px;
            font-size: 1rem;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            transition: 0.3s;
        }

        .video-caption a.btn-explore:hover {
            background-color: #b1885b;
            color: #fff;
        }

        /* Menu Section styles */
        #menu-section {
            padding: 60px 20px;
            background-color: #fff;
            color: #2c1a0f;
        }

        .menu-title {
            text-align: center;
            margin-bottom: 40px;
            font-size: 2.5rem;
            font-family: 'Times New Roman', Times, serif;

        }

        .menu-row {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
        }

        .menu-card {
            background-color: #fff56f;
            border: 1px solid #ccc;
            border-radius: 12px;
            overflow: hidden;
            width: 280px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            padding-bottom: 20px;
        }

        .menu-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .menu-card h3 {
            margin: 15px 0 10px;
        }

        .menu-card p {
            margin: 0 15px 10px;
        }

        .menu-card .price {
            font-weight: bold;
            color: #4b2e1e;
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
            <a href="{{ route('menus.index') }}">Menu</a>
        </nav>
    </header>

    <!-- Video Section -->
    <div class="container-fluid my-5 px-4" style="padding-top: 50px;">
        <div class="video-slider">
            <video autoplay muted loop playsinline>
                <source src="{{ asset('videos/coffee-promo.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="video-caption">
                <h2>Brewnique Cafe</h2>
                <p>Savor every sip of freshly brewed coffee</p>
                <a href="{{ route('menus.list') }}" class="btn-explore">Explore Menu</a>

            </div>
        </div>
    </div>


    <!-- Menu Section -->
    <section id="menu-section">
        <h2 class="menu-title">Most Popular Sips</h2>
        <div class="menu-row">
            @foreach ($menus as $menu)
                <div class="menu-card">
                    <img src="{{ $menu->image ? asset('storage/' . $menu->image) : asset('images/logo.png') }}"
                    alt="{{ $menu->title }}" class="img-fluid" style="height: 200px; object-fit: cover;">
                    <h3>{{ $menu->name }}</h3>
                    <p class="price">₹{{ $menu->price }}</p>
                    <p>{{ $menu->description }}</p>
                </div>
            @endforeach
        </div>
    </section>

</body>

</html>
