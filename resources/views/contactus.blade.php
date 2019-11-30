@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-16">
                <div class="card" style="width: 35rem;height: 20rem ; background-color:rgba(189, 189, 189, 0.6);">
                    <h3 style="margin-left: 20px">Kritik dan Saran</h3>
                    <form method="get" action="{{route('addcontactus')}}">
                        @csrf
                        <input type="hidden" name="userid" value="{{Auth::user()->id}}">
                        <div class="form-group">
                            <textarea class="form-control" id="exampleTextarea" name="keterangan" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <div class="text-center">
                                <input class="form-control-md btn btn-success" type="submit"  name="submit" value="Kirim">
                            </div>
                        </div>
                        <div class="form-group">
                            <p style="margin-left: 20px">Contact Person</p>
                            <p style="margin-left: 20px">WhatsApp : 08878778787</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
