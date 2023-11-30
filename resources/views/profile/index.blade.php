<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
</head>
<body>

    <h1>Profil</h1>
    <hr>

    <table border='0'>
            <tr>
                <td>Nama Saya :</td>
                <td>{{ $nama }}</td>
            </tr>
    </table>

    <h1>Contoh Pengulangan</h1>
    <table>
        @if(isset($data_array['alamat']) && is_array($data_array['alamat']))
            @foreach($data_array['alamat'] as $data)
                <tr>
                    <td>Alamat</td>
                    <td>{{ $data }}</td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="2"></td>
            </tr>
        @endif
    </table>

</body>
</html>
