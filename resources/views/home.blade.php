<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main class="bg-light">

        <div class="container">
            <h2 class="text-center">Treni di oggi</h2>
            <div class="row">

                @foreach ($trains_today as $train)
                    <div class="card m-2" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $train->azienda }}</h5>
                            <h6 class="card-subtitle mb-2 ">Partenza: da {{ $train->stazione_di_partenza }}
                                alle
                                {{ $train->orario_di_partenza }}</h6>
                            <h6 class="card-subtitle mb-2 ">Arrivo: a {{ $train->stazione_di_arrivo }} alle
                                {{ $train->orario_di_arrivo }}</h6>

                            <p class="card-text">Codice treno: {{ $train->codice_treno }}</p>
                            <p class="card-text">Numero carrozze: {{ $train->numero_carrozze }}</p>
                            <p class="card-text">In orario: @if ($train->in_orario)
                                    sì
                                @else
                                    no
                                @endif
                            </p>

                            <p class="card-text">Cancellato: @if ($train->cancellato)
                                    sì
                                @else
                                    no
                                @endif
                            </p>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>

</body>

</html>
