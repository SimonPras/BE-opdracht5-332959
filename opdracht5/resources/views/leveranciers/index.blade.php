<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table {
        border-collapse: collapse;
    }

    th,
    td {
        border: 1px solid black;
        padding: 10px;
    }
</style>
<h1><u>Leverings Informatie</u></h1>
@if($magazijn->aantalAanwezig ==! null)
@php
$firstproductPerLeverancier = $leveranciers->first();
@endphp
@if ($firstproductPerLeverancier)
<h1>Naam leverancier: {{ $firstproductPerLeverancier->leverancier->naam }}</h1>
<h1>Contactpersoon: {{ $firstproductPerLeverancier->leverancier->contactPersoon}}</h1>
<h1>Leverancier nummer: {{ $firstproductPerLeverancier->leverancier->leverancierNummer}}</h1>
<h1>Mobiel: {{ $firstproductPerLeverancier->leverancier->mobiel}}</h1>
@endif
<table>
    <thead>
        <tr>
            <th>Naam Product</th>
            <th>Datum Laatste Levering</th>
            <th>Aantal</th>
            <th>Eerstvolgende levering</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($leveranciers as $productPerLeverancier)
        <tr>
            <td>{{ $productPerLeverancier->product->naam }}</td>
            <td>{{ $productPerLeverancier->datumLevering }}</td>
            <td>{{ $productPerLeverancier->aantal }}</td>
            <td>{{ $productPerLeverancier->datumEerstVolgendeLevering }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@else @foreach ($leveranciers as $productPerLeverancier)
<h1>
    Er is van dit product op dit moment geen voorraad aanwezig, de verwachte eerstvolgende levering is: {{ $productPerLeverancier->datumEerstVolgendeLevering }}
</h1>
@endforeach
<script>
    setTimeout(function() {
        window.location.href = "{{ route('Magazijn.index') }}";
    }, 4000);
</script>
@endif

<body>

</body>

</html>