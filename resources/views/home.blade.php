@extends('layouts.app')

@section('content')

<div class="dropdown">
    <div class="text-center">
        <p class="text-center text">Welcome {{ Auth::user()->name }}. Choose an option down below,please.</p><br>
        <button class="btn btn-success dropdown-toggle btn-lg " type="button" id="dropdownMenuButton"
            data-bs-toggle="dropdown" aria-expanded="false">
            Options
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="{{url('/users/adultCats')}}">Adult cats</a>
            <a class="dropdown-item" href="#">Kittens</a>
            <a class="dropdown-item" href="#">Special cases</a>
        </div><br><br>
    </div>
</div>





@endsection