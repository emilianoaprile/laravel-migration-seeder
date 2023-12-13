@extends('layouts.app')

@section('content')

<section>
    <div class="container">
        <div class="row p-5">
            @foreach ($trains as $train)

            <div class="col-6 mb-5">
                <h2>{{$train['company']}}</h2>
                <p><strong>Stazione di Partenza:</strong> {{$train['departure_station']}}</p>
                <p><strong>Stazione di Arrivo:</strong> {{$train['arrival_station']}}</p>
                <p><strong>Orario di Partenza:</strong> {{$train['departure_time']}}</p>
                <p><strong>Orario di Arrivo:</strong> {{$train['arrival_time']}}</p>
                <p><strong>Codice Treno:</strong> {{$train['train_code']}}</p>
                <p><strong>Vagone numero:</strong> {{$train['wagons_number']}}</p>
            </div>
                
            @endforeach
            
        </div>
    </div>
</section>
    
@endsection