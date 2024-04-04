@extends('layouts.conquer')
@section('content')
    <div class="container">
        <div class="modal fade" id="myModal" tabindex="-1" role="basic" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" id="showProducts">
                    <div class="modal-header">
                        <h4 class="modal-title">Detail Medicines</h4>
                    </div>
                    <div class="modal-body">
                        <img class="loading"src="assets/img/ajax-modal-loading.gif">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <h2>Category</h2>
        <div class="container">
            @foreach ($category as $cat)
                <div class="row">
                    <div class="col-sm">
                        <div class="thumbnail">
                            <div class="caption">
                                <p>Nama Kategori: {{ $cat->category_name }}</p>
                                <p>Deskripsi: {{ $cat->description }}</p>
                                <p>List of Medicines: </p>
                                @foreach ($cat->products as $p)
                                    {{ $p->product_name }}
                                    {{ $p->product_price }} <br>
                                @endforeach
                                <a class='btn btn-xs btn-info' data-toggle='modal' data-target='#myModal'
                                    onclick='showProducts({{ $cat->id }})'>
                                    Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
@section('javascript')
    <script>
        function showProducts(category_id) {
            $.ajax({
                type: 'POST',
                url: '{{ route('category.showProducts') }}',
                data: {
                    '_token': '<?php echo csrf_token(); ?>',
                    'category_id': category_id
                },
                success: function(data) {
                    $('#showProducts').html(data.msg)
                }
            });
        }
    </script>
@endsection
