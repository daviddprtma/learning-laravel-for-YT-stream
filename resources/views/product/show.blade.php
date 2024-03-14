<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Product</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <h2>Product Detail</h2>
    <table class="table" style="border: 1;">
        <thead>
            <tr>
                <th>Data</th>
                <th>Hasil</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>ID</td>
                <td>{{ $data->id }}</td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>{{ $data->product_name }}</td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>{{ $data->product_price }}</td>
            </tr>
            <tr>
                <td>Category</td>
                <td>{{ $data-> category->category_name}}</td>
            </tr>
            <tr>
                <td>Created At</td>
                <td>{{ $data->created_at }}</td>
            </tr>
            <tr>
                <td>Updated At</td>
                <td>{{ $data->updated_at }}</td>
            </tr>
        </tbody>
    </table>
</body>

</html>
