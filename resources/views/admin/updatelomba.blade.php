@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="">
                    <form action="/updatelomba/{{$lomba->id}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Gambar</label> <br>
                            <img src="{{$lomba->gambar}}" style="width: 150px" alt="">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nama Lomba</label>
                            {{--<input type="hidden" name="id" value="{{$lomba->id}}">--}}
                            <input name="nama" value="{{$lomba->nama_lomba}}" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama Lomba">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Keterangan Lomba</label>
                            <textarea name="keterangan" class="form-control" placeholder="Keterangan" id="exampleFormControlTextarea1" rows="5">{{$lomba->keterangan}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="linkberkas">URL Link Berkas Lomba</label>
                            <input name="urllink" value="{{$lomba->form_berkas}}" type="text" class="form-control" id="linkberkas" placeholder="URL Berkas Lomba">
                        </div>
                        <div class="form-group">
                            <label for="linkberkas">Email Panitia</label>
                            <input name="email" value="{{$lomba->email_panitia}}" type="email" class="form-control" id="linkberkas" placeholder="Email Panitia">
                        </div>
                        <div class="text-center">
                            <input type="submit" class="btn-group-lg btn btn-danger" name="submit" value="submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


