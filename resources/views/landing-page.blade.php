<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body>
    <header class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">BrandName</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Product</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Pricing</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="#">Login</a></li>
                <li class="nav-item"><a class="btn btn-primary" href="#">Become a member</a></li>
            </ul>
        </div>
    </header>
    <main class="container">
        <section class="jumbotron text-center">
            <h1 class="display-4">Creating a Beautiful & Useful Solutions</h1>
            <p class="lead">We know how large objects will act, but things on a small scale just do not act that way.</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Get Quote Now</a>
            <a class="btn btn-secondary btn-lg" href="#" role="button">Learn More</a>
        </section>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Investment Trading</h5>
                        <p class="card-text">The quick fox jumps over the lazy dog.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Raising Funds</h5>
                        <p class="card-text">The quick fox jumps over the lazy dog.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Financial Analysis</h5>
                        <p class="card-text">The quick fox jumps over the lazy dog.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
