@extends('layouts.conquer')
@section('content')
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
@endsection
