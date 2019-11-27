@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <h3>Kritik dan Saran</h3>
                    <form method="get" action="">
                        @csrf
                        <div class="form-group">
                            <textarea class="form-control" id="exampleTextarea" name="text" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <input class="form-control-md btn btn-success" type="submit"  name="submit" value="Kirim">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
