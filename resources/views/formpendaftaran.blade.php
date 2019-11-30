@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-16">
                <div class="card" style="width: 35rem;height: 60rem ; background-color:rgba(189, 189, 189, 0.6);">
                    <h1 align="center">Form Pendafataran</h1>
                    <form action="{{route('daftarlomba')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="idlomba" id="" value="{{$lomba->id}}">
                        <input type="hidden" name="iduser" id="" value="{{Auth::user()->id}}">

                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nama Lengkap</label>
                            <input name="nama" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama Lomba" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Alamat</label>
                            <textarea name="alamat" class="form-control" placeholder="Alamat" id="exampleFormControlTextarea1" rows="3" required></textarea>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control-sm" name="kota" placeholder="Kota" required>
                            <input type="text" class="form-control-sm" name="provinsi" placeholder="Provinsi" required>
                            <input type="number" class="form-control-sm" name="kode_pos" placeholder="Kode Pos" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nomor HP</label>
                            <input name="no_hp" type="number" class="form-control" id="exampleFormControlInput1" required placeholder="Nomor HP">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nama Instansi</label>
                            <input name="nama_instansi" type="text" class="form-control" id="exampleFormControlInput1" required placeholder="Nama Instansi">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Alamat Instansi</label>
                            <textarea name="alamat_instansi" class="form-control" placeholder="Alamat Instansi" required id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Cabang Olahraga yang Dituju</label>
                            <input name="cabang" type="text" class="form-control" id="exampleFormControlInput1" required placeholder="Cabang Olahraga">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Kategori Olahraga yang Dituju</label>
                            <input name="kategori_olahraga" type="text" class="form-control" id="exampleFormControlInput1" required placeholder="Kategori Olahraga">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Upload Berkas dan Bukti Tranfer Dikirim ke Email</label>
                            <input name="uploadberkas" type="text" class="form-control" id="exampleFormControlInput1" value="{{$lomba->email_panitia}}" readonly>
                            <p style="font-size: small;color: saddlebrown;" align="center">Transfer : BNI, a/n Ikhwan Hadi (No.Rekening 0377207398)</p>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Download Berkas Kejuaraan</label>
                            <input name="link" type="text" class="form-control" id="exampleFormControlInput1" value="{{$lomba->form_berkas}}" readonly>
                        </div>
                        <div class="text-center">
                            <input type="submit" class="btn-group-lg btn btn-success" name="submit" value="submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
