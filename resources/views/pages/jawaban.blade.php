@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h4>Answer</h4></div>
                    <div class="card-body">
                        <div><a href="" class="btn btn-secondary" role="button">Beri Jawaban</a></div>
                        <br/>
                        <table class="table table-bordered table-dark">
                            <thead>
                                <tr>
                                <th scope="col">No</th>
                                <th scope="col">Pertanyaan_id</th>
                                <th scope="col">Isi</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $no = 0;?>
                        @foreach($data as $data)
                            <?php $no++ ;?>
                                <tr>
                                <td>{{ $no }}</td>
                                <td>{{$data->pertanyaan_id}}</td>
                                <td>{{$data->isi}}</td>
                                {{-- <a href="/edit/{{$daftar->id}}">edit</a> /
                                <a href="/delete/{{$daftar->id}}">delete</a> --}}
                                </tr>
                        @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
