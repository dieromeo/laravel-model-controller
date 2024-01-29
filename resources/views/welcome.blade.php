<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    <title>Film list</title>
</head>

<body class="bg-dark">
    <header>
        <h1 class="text-center text-primary text-uppercase py-4">Lista film</h1>
    </header>
    <main>
        <div class="container py-5">
            <div class="row g-5">
                @foreach ($films as $film)
                    <div class="col-4 col-lg-3">
                        <div class="card bg-info-subtle" style="width: 18rem; height: 15rem;">
                            <div class="card-header text-uppercase text-center p-3">
                                {{ $film['title'] }}
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item bg-info-subtle">Data di uscita: {{ $film['date'] }}</li>
                                <li class="list-group-item bg-info-subtle">Titolo originale:
                                    {{ $film['original_title'] }}</li>
                                <li class="list-group-item text-center text-success bg-info-subtle">
                                    Voto: {{ $film['vote'] }}</li>
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
</body>

</html>
