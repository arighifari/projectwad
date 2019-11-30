@extends('layouts.app')

@section('content')
    <div class="container">
        @auth
        @if(Auth::user()->role == 1)
        <div class="row justify-content-md-center">
            <div class="col-md-1">
                <a href="{{route('formlomba')}}"><input role="button" class="btn btn-success" type="submit" value="Add Lomba" ></a>
            </div>
        </div>
    </div>
        @endif
        @endauth
    <div class="container">
        <div class="row justify-content-md" style="margin-top: 30px">
            @foreach($lomba as $listlomba)
            <div class="col-md-3">
                <div class="lomba">
                    <div class="card" style="width: 17rem;height: 35rem ; background-color:rgba(189, 189, 189, 0.6);">
                        <img class="card-img-top" align="center" style="margin-left:1rem ;margin-top:1rem ;width: 15rem; height: 20rem ;"
                             src="{{$listlomba->gambar}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{$listlomba->nama_lomba}}</h5>
                            <p class="card-text">{{$listlomba->keterangan}}</p>
                            @auth
                            <a href="/detaillomba/{{$listlomba->id}}" class="btn btn-primary">Read More</a>
                            @if(Auth::user()->role == 1)
                                <a href="/formupdate/{{$listlomba->id}}" class="btn btn-primary">Edit</a>
                                <a href="/deletelomba/{{$listlomba->id}}" class="btn btn-primary">Delete</a>
                            @endif
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

@endsection
