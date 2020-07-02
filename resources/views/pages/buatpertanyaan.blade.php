@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h4>Create Question</h4></div>

                <div class="card-body">
                    <form method='POST' action='/create'>
                 @csrf
                        <div class="form-group">
                            <label for="formGroupExampleInput">Judul</label>
                            <input type="text" name= 'judul' class="form-control" id="formGroupExampleInput">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Isi</label>
                            <input type="text" name= 'isi' class="form-control" id="formGroupExampleInput2">
                        </div>
                        <button type="submit" class="btn btn-secondary">Submit</button>
                        <!-- <a href="/daftar" class="btn btn-info" role="button">Submit</a> -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
