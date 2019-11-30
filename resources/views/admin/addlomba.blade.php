@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="">
                    <form action="{{route('addlomba')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nama Lomba</label>
                            <input name="nama" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama Lomba">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Keterangan Lomba</label>
                            <textarea name="keterangan" class="form-control" placeholder="Keterangan" id="exampleFormControlTextarea1" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="linkberkas">URL Link Berkas Lomba</label>
                            <input name="urllink" type="text" class="form-control" id="linkberkas" placeholder="URL Berkas Lomba">
                        </div>
                        <div class="form-group">
                            <label for="linkberkas">Email Panitia</label>
                            <input name="email" type="email" class="form-control" id="linkberkas" placeholder="Email Panitia">
                        </div>
                        <div class="form-group">
                            <label for="foto">Gambar</label>
                            <div class="custom-file">
                                <input name="gambar" type="file" class="custom-file" id="customFile">
                            </div>
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


