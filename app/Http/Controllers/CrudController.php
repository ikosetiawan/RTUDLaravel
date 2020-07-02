<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\QuestionModel;
use App\AnswerModel;
use Illuminate\Support\Facades\DB;

class CrudController extends Controller
{
    //
    public function __construct(){
        $this->pertanyaan = new QuestionModel();
        $this->jawaban = new AnswerModel();
    }

    public function ShowQuest(){
        $data = $this->pertanyaan->get();
        return view ('pages.pertanyaan',compact('data'));
    }

    public function InsertQuest(){
        return view ('pages.buatpertanyaan');
    }

    public function CreateQuest(Request $request){

        $data = $this->pertanyaan;
        $data->judul = $request->judul;
        $data->isi = $request->isi;
        $data->save();
        return redirect('/pertanyaan');
    }

    public function ShowAnswer(){
        $data = DB::table('jawaban')
        ->join('pertanyaan', 'jawaban.pertanyaan_id', '=', 'pertanyaan.id')
        ->select('jawaban.pertanyaan_id', 'jawaban.isi')
        ->get();
        return view ('pages.jawaban',compact('data'));
        // return response()->json($data);
    }

    public function ShowTanya($id){
        $data = $this->pertanyaan
        ->where('id',$id)
        ->first();
        return view ('pages.tanya',compact('data'));
    }

    public function TanyaCreat(Request $request){
        $data = $this->jawaban;

        $data->pertanyaan_id   = $request->id;
        $data->isi         = $request->jawaban;
        $data->save();
        return redirect ('/jawaban');
    return response()->json($request);
}

}
