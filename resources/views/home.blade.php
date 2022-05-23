<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/app.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Treni</title>
</head>

<body>
    <h1>Treni oggi:</h1>
    <div class="flex">
        @foreach ($trainsToday as $train)
            <div class='card'>
                <p>
                <h4>Azienda: </h4>{{ $train['azienda'] }}</p>
                <p>
                <h4>Stazione di partenza: </h4>{{ $train['stazione_di_partenza'] }}</p>
                <p>
                <h4>Stazione di arrivo: </h4>{{ $train['stazione_di_arrivo'] }}</p>
                <p>
                <h4>Data partenza: </h4>{{ $train['data_partenza'] }}</p>
                <p>
                <h4>Orario di partenza: </h4>{{ $train['orario_di_partenza'] }}</p>
                <p>
                <h4>Orario di arrivo: </h4>{{ $train['Orario_di_arrivo'] }}</p>
                <p>
                <h4>Codice treno: </h4>{{ $train['codice_treno'] }}</p>
                <p>
                <h4>Numero carrozze: </h4>{{ $train['numero_carrozze'] }}</p>
            </div>
        @endforeach
    </div>
</body>

</html>
