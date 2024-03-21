@extends('layouts.conquer')
@section('content')
    <h3 class="page-title">
        Welcome to Medicine Store
    </h3>
    <div class="page-bar">
        <ul class="page-breadcrumb">

            <li>
                <i class="fa fa-home"></i>
                <a href="{{ route('welcome') }}">Home</a>
                <i class="fa fa-angle-right"></i>
            </li>

            <li>
                <a href="#">Welcome</a>
            </li>
        </ul>
    </div>
    <div class="content">
        <div class="title m-b-md" id="judul">
            MEDICINE STORE
        </div>
    </div>
@endsection
