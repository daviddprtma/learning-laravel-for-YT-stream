@extends('layouts.conquer')
@section('content')

<div class="container">
        <h2>Category</h2>
        <div class="container">
            @foreach ($category as $cat)
                <div class="row">
                    <div class="col-sm">
                        <div class="thumbnail">
                            <div class="caption">
                                <p>Nama Kategori: {{ $cat->category_name }}</p>
                                <p>Deskripsi: {{ $cat->description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
