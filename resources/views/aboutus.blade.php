@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 align="center" style="margin-top: 70px"> Welcome @guest @else {{ Auth::user()->name }} @endguest</h1>
                <h3 align="center">Berani Lomba adalah website yang berisi <br> kumpulan-kumpulan <br>
                    informasi lomba untuk <br> Universitas dan SMA/SMK sederajat</h3>
            </div>
        </div>
    </div>
@endsection
