@extends('layouts.conquer')
@section('content')
    <div class="container">
        <h2>Medicines</h2>
        <div class="container">
            @foreach ($data as $medicine)
                <div class="row">
                    <div class="col-sm">
                        <div class="thumbnail">

                            <td>
                                <a class="btn btn-primary" data-toggle="modal" href="#detail_{{ $medicine->id }}"
                                    data-toggle="modal">{{ $medicine->name }}</a>

                                <div class="modal fade" id="detail_{{ $medicine->id }}" tabindex="-1" role="basic"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">

                                            <div class="modal-header">
                                                <h4 class="modal-title">{{ $medicine->name }}</h4>
                                            </div>
                                            <div class="modal-body">
                                                <img src="{{ asset('images/' . $medicine->image) }}" height='200px' />
                                                <p>Deskripsi: {{ $medicine->description }}</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default"
                                                    data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>

                            <div class="caption">
                                <p>Nama Obat: {{ $medicine->name }}</p>
                                <p>Form: {{ $medicine->form }}</p>
                                <p>Formula: {{ $medicine->formula }}</p>
                                <p>Price: {{ $medicine->price }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
