<?php

namespace App\Http\Controllers;

use App\article;
use Illuminate\Http\Request;
use function GuzzleHttp\_current_time;
use Carbon\Carbon;
class ArticleController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return article::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $current_date_time = Carbon::now()->toDateTimeString(); // Produces something like "2019-03-11 12:25:00"
        $dateFromDbInLocal = with(new Carbon\Carbon($timestampUTC))->tz('USER_TIMEZONE');

        $article=new article();
        //$article->id=article::find(random_int(1,article::all()->count()))->id;
        $article->status=$request->status;
        $article->id=$request->id;
        $article->journalist_id=$request->journalist_id;
        //   $current_date_time,"updated_at"=>$current_date_time);
        $article->createdAt=tz('USER_TIMEZONE');
        if($article->save()){
            return new \App\Http\Resources\Article($article);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return article::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
