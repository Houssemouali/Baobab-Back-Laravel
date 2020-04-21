<?php

namespace App\Http\Controllers;

use App\article;
use App\category;
use Illuminate\Http\Request;
use function GuzzleHttp\_current_time;
use Carbon\Carbon;
use function MongoDB\BSON\toJSON;

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
        //$dateFromDbInLocal = with(new Carbon\Carbon($timestampUTC))->tz('USER_TIMEZONE');

        $article=new article();
        //$article->id=article::find(random_int(1,article::all()->count()))->id;
        $article->status=$request->status;
        $article->id=$request->id;
        $article->journalist_id=$request->journalist_id;
        $article->createdAt=$current_date_time;
        $article->titre=$request->titre;
        $article->content=$request->contenu;
//        $categories=explode(',',$request->get('categories'));
//        foreach($categories as $category){
//            $cat_db=category::where('name',trim($category));
//            $cat_ids[]=$cat_db->category_id;
//        }
//        $article->category()->attach($cat_ids);
        //$articleCat=article::with('categories')->where()
        //$article_id=article::
       // $artcat=array($ar)

        $category=Category::find([1,2,3,4,5,6,7,8,9,10]);
        $article->category()->insert($category);
        if($article->save()){
            return new \App\Http\Resources\Article($article);
           // return category::with('categories')->get();
        }
        //$category=$request->get('categories');

//
//        $article->category()->attach($category);
        $category_id=[1,2,3,4,5,6,7,8,9,10];
        //$article->category()->attach($request->$category_id);
        //$article->category()->sync($category_id);
//        $article->category()->attach($request->category_id);

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
