@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-16">
                <div class="card" style="width: 35rem;height: 50rem ; background-color:rgba(189, 189, 189, 0.6);">
                    <h2 align="center" class="card-title">{{$lomba->nama_lomba}}</h2>
                    <img class="card-img-top" align="center" style="margin-left:4rem ;margin-top:1rem ;width: 27rem; height: 35rem ;"
                         src="{{$lomba->gambar}}" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">{{$lomba->keterangan}}</p>
                        <p>Link Berkas Lomba : {{$lomba->form_berkas}}</p>
                        <div class="text-center">
                            <a href="/formpendaftaran/{{$lomba->id}}"  class="btn btn-success">Daftar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
