<?php

namespace App\Http\Controllers;

use App\Models\Thietbi;
use App\Http\Requests\StoreQuestionRequest;
use App\Http\Requests\UpdateQuestionRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ThietbiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Quiz(Request $thietbi)
    {
        $thietbi = DB::table('thietbi')->where('mathietbi','=',$id)->get()->toArray();
        return response()->json([
            'thietbi'=>$thietbi
        ], 200,);

    }

    public function index()
    {
        $thietbi = Thietbi::all();
        return view('pages.thietbi.index')->with('thietbi', $question);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.thietbi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreQuestionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $input = $request->all();
        Thietbi::create($input);
        return redirect('thietbi')->with('thongbao', 'Thêm  thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $thietbi = Thietbi::find($id);
        return view('pages.thietbi.show')->with('thietbi', $thietbi);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $thietbi = Thietbi::find($id);
        return view('pages.thietbi.edit')->with('thietbi', $thietbi);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateQuestionRequest  $request
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $thietbi = Thietbi::find($id);
        $input = $request->all();
        $thietbi->update($input);
        return redirect('thietbi')->with('thongbao', 'Cập nhật  thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Thietbi::destroy($id);
        return redirect('thietbi')->with('thietbi', 'Xóa câu hỏi thành công');
    }
}
