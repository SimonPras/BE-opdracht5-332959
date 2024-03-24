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
<h1><u>Overzicht Allergenen</u></h1>
@if($allergeens->isNotEmpty())
@php
$firstproductPerAllergeen = $allergeens->first();
@endphp
@if ($firstproductPerAllergeen)
<h1>Naam: {{ $firstproductPerAllergeen->product->naam }}</h1>
<h1>Barcode: {{ $firstproductPerAllergeen->product->barcode }}</h1>
@endif
<table>
    <thead>
        <tr>
            <th>Naam</th>
            <th>Omschrijving</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($allergeens as $productPerAllergeen)
        <tr>
            <td>{{ $productPerAllergeen->allergeen->naam }}</td>
            <td>{{ $productPerAllergeen->allergeen->omschrijving }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@else
<h1>
    In dit product zitten geen stoffen die een allergische reactie kunnen veroorzaken
</h1>
<script>
    setTimeout(function() {
        window.location.href = "{{ route('Magazijn.index') }}";
    }, 4000);
</script>
@endif

<body>

</body>

</html>