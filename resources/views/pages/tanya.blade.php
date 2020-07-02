@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h4>Tanya</h4></div>

                <div class="card-body">
                    <form method="POST" action="/jawaban/{{$data->id}}">
                 @csrf
                        <div class="form-group">
                            <label for="formGroupExampleInput">Judul</label>
                            <input type="text" name= "judul" class="form-control" value="{{$data->judul}}">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Isi</label>
                            <input type="text" name= "isi" class="form-control" value="{{$data->isi}}">
                        </div>
                        <label for="formGroupExampleInput2">Jawaban</label>
                        <br/>
                        <textarea rows="4", cols="54" id="keterangan" name="jawaban" style="resize:none, "></textarea>
                        <br/>
                        <button type="submit" class="btn btn-primary mb-2">Submit</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
