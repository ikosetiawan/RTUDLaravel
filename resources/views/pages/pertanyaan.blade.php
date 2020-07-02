@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h4>Question</h4></div>
                    <div class="card-body">
                        <div><a href="/pertanyaan/create" class="btn btn-secondary" role="button">Create</a></div>
                            <br/>
                        <table class="table table-bordered table-dark">
                            <thead>
                                <tr>
                                <th scope="col">No</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Isi</th>
                                <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $no = 0;?>
                        @foreach($data as $data)
                            <?php $no++ ;?>
                                <tr>
                                <td>{{ $no }}</td>
                                <td>{{$data->judul}}</td>
                                <td>{{$data->isi}}</td>
                                <td>
                                <a href="/tanya/{{$data->id}}">jawaban</a>
                                </td>
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
