<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>About</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <nav>
            <a href="{{ route('home') }}" class="logo">TechNova</a>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="hero">
            <h1>Welcome to TechNova</h1>
            <p>Your technology partner for innovation.</p>
            <button class="button-up">Learn More</button>
        </section>

        <section>
            <div class="container mt-4">
                <div class="row">
                    @foreach ($services as $service)
                        <div class="col-md-4">
                            <div class="service-card">
                                <img src="{{ asset('storage/images/myimage.jpg') }}" alt="My Image">
                                <div class="card-body">
                                    <h3>{{ $service->name }}</h3>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <p class="footer-copy">&copy; 2024 TechNova</p>
    </footer>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>