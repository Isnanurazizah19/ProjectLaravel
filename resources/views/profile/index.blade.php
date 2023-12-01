<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Profil</title>
</head>
<body>

    <h1>Profil</h1>
    <hr>
    <table border='0'>
        @if($nama == 'Isna ')
            <tr>
                <td>Nama Saya :</td>
                <td>{{ $nama }} </td>
            </tr>
        @endif
    </table>

    <hr>
    <h1>Contoh Penerapan
        <br> Isna 
     </head>

     <h1>Contoh forelse </h1>
<table>
    @forelse( ['Isna'] as $data)
    <tr>
        <td> {{ $data }} </td>
    </tr>
    @empty
    data tidak ditemukan
    @endforelse
</table>

<h1>Contoh for<h1>
<table>
    @for($i=0;$i<5;$i++)
        {{$i}}<br>
    @endfor
</table>

<hr><head>
<h1> contoh pengulangan</h1>
<table></head>
    @foreach( ['Isna'] as $data)
    <tr>
        <td>{{ $data }}</td>
    </tr>
    @endforeach
</table>