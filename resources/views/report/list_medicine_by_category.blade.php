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
    <h2>List Medicine by category: </h2>
    <p>ID Category: {{ $id }} with name: {{ $nameCategory }}</p>
    <br>
    <p>Total rows: {{ $getTotalData }}</p>
    <table class="table" style="border: 1;">
        <thead>
            <tr>
                <th>Name</th>
                <th>Form</th>
                <th>Restriction Formula</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($result as $li)
                <tr>
                    <td>{{ $li->name }}</td>
                    <td>{{ $li->form }}</td>
                    <td>{{ $li->formula }}</td>
                    <td>{{ $li->price }}</td>
                </tr>
            @endforeach

        </tbody>
    </table>
</body>

</html>
