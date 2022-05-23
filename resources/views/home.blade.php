<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Treni</title>
</head>

<body>
    <div>Array: {{ $alltrain }}</div>
    <div class='card'>
        @foreach ($alltrain as $train)
            <p>Azienda: {{ $train['azienda'] }}</p>
            <p>Stazione di partenza: {{ $train['stazione_di_partenza'] }}</p>
            <p>Stazione di arrivo: {{ $train['stazione_di_arrivo'] }}</p>
            <p>Data partenza: {{ $train['data_partenza'] }}</p>
            <p>Orario di partenza: {{ $train['orario_di_partenza'] }}</p>
            <p>Orario di arrivo: {{ $train['Orario_di_arrivo'] }}</p>
            <p>Codice treno: {{ $train['codice_treno'] }}</p>
            <p>Numero carrozze: {{ $train['numero_carrozze'] }}</p>
        @endforeach

    </div>
</body>

</html>
