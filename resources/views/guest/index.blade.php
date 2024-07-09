<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/js/app.js')
    <title>Lista Movie</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <h1 class="text-center">Lista Film</h1>


            @foreach ($movies as $movie)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"> <strong>Titolo :</strong> {{ $movie->title }}</h5>
                            <p class="card-text"><strong>Nazionalità :</strong> {{ $movie->nationality }}</p>
                            <p class="card-text"><small class="text-primary"><strong>Data di uscita :</strong>
                                    <span
                                        class="text-danger">{{ \Illuminate\Support\Carbon::parse($movie->date)->format('d/m/Y') }}
                                    </span></small>
                            </p>
                            <p class="card-text"><strong>Voto :</strong> {{ $movie->vote }}</p>
                        </div>
                    </div>
                </div>
            @endforeach



        </div>
    </div>
</body>

</html>
