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
<h1><u>Overzicht Magazijn Jamin</u></h1>
<table>
    <thead>
        <tr>
            <th>Barcode</th>
            <th>Naam</th>
            <th>Verpakkings Eenheid</th>
            <th>Aantal Aanwezig</th>
            <th>Allergenen Info</th>
            <th>Leverantie Info</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $magazijn)
        <tr>
            <td>{{ $magazijn->product->barcode }}</td>
            <td>{{ $magazijn->product->naam }}</td>
            <td>{{ $magazijn->verpakkingsEenheid }}</td>
            <td>{{ $magazijn->aantalAanwezig }}</td>
            <td><a href="/allergeen/{{ $magazijn->product->id }}">❌</a></td>
            <td><a href="/leverancier/{{ $magazijn->product->id }}">❓</a></td>
        </tr>
        @endforeach
    </tbody>
</table>

<body>

</body>

</html>