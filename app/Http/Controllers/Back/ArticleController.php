<?php

namespace App\Http\Controllers\Back;

use App\Models\Article;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $categories=Category::orderBy('created_at','Asc')->get();
        $articles=Article::orderBy('created_at','Asc')->get();
      
        return view('back.posttable', compact('articles','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
     
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
'title'=>'min:3',
'image'=>'required|image|mimes:jpeg,png,jpg,jpeg 2000,jpeg xr,WebP|max:1800'
        ]);
        $article = new Article;
        $article->title=$request->title;
        $article->category_id=$request->topic;
        $article->content=$request->content;
        $article->slug=Str::slug($request->title);


        if ($request->hasFile('image')) {
           $imageName=Str::slug( $request->title).'.'.$request->image->getClientOriginalExtension();
          $request->image->move(public_path('uploads'),$imageName);
          $article->image='\uploads/'.$imageName;
        }
        toastr()->success('uqurlu emeliyyat.', 'Uqurla meqale yaradildi', ['timeOut' => 5000]);
        $article->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
