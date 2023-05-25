@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="text-center">{{ $title }}</h2>

        <a class="text-center" href="/">Visualizza tutti i treni</a>
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
@endsection
