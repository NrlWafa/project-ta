<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <h2>Person List</h2>

    <table class="table">
        <thead>
            <tr>
                <th>Nama Depan</th>
                <th>Nama Belakang</th>
                <th>Alamat</th>
                <th>Hobi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orang as $item)
                <tr>
                    <td>{{ $item->nama_depan }}</td>
                    <td>{{ $item->nama_belakang }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>{{ $item->hobi }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
