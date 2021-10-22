@extends('layouts.app')

@section('content')

@php
    $name = Auth::user()->qrcode;
@endphp

<body class="body">
    <div class="container1">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <center>
                {!! QrCode::size(250)->generate($name); !!}
                </center>
            </div>
            <div class="col-md-3"></div>
        </div><br><br>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h1 style="text-align: center;"> 
                  <b>₱ {{ Auth::user()->department->name }} </b>
                </h1>
            </div>
            <div class="col-md-3"></div>   
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h1 style="text-align: center;"> 
                    <b>Balance amount </b>
                </h1>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</body>

<footer style="position:absolute; width:100%;">
    @include('includes.footer')
</footer>


@endsection