<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h2>Products</h2>
        <div class="container">
            @foreach ($products as $product)
                <div class="row">
                    <div class="col-sm">
                        <div class="thumbnail">
                        <img src="{{ asset('images/' . $product->foto) }}" style="width:20%">
                        <div class="caption">
                            <p>Nama Produk: {{ $product->product_name }}</p>
                            <p>Harga: {{ $product->product_price }}</p>
                        </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</body>

</html>
