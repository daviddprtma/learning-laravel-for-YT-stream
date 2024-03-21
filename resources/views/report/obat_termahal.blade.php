@extends('layouts.conquer')
@section('content')
    <div class="container">
        <h2>Obat Termahal</h2>
        <div class="container">
            @foreach ($result as $medicine)
                <div class="row">
                    <div class="col-sm">
                        <div class="thumbnail">
                            <img src="{{ asset('images/' . $medicine->image) }}" style="width:20%">
                            <div class="caption">
                                <p>Nama Obat: {{ $medicine->name }}</p>
                                <p>Form: {{ $medicine->form }}</p>
                                <p>Formula: {{ $medicine->formula }}</p>
                                <p>Price: {{ $medicine->price }}</p>
                                <p>Description: {{ $medicine->description }}</p>
                                <p>Category: {{ $medicine->category_name }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
