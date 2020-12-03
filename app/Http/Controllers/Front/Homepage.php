<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Db;
//models
use App\Models\Category;
use App\Models\Article;
use App\Models\Page;
use App\Models\Contact;


class Homepage extends Controller
{
    public function __construct(){
    
        view()->share('pages',Page::orderBy('order','ASC')->get());
        view()->share('categories',Category::get());
   
    }
   
    public function index(Request $request){
    
    
       $articles= Article::paginate(5);
       if ($request->ajax()){
           $view=view("front.widgets.articlewidget",compact('articles'))->render();
           return response()->json(["html" =>$view]);
       }
     
        return view("front.homepage",compact('articles'));
    }

    public function detail($category,$slug){
       $category= Category::whereSlug($category)->first() ?? abort(403, 'bele bir kategoriya yoxdur') ;
        $article=Article::where('slug',$slug)->whereCategoryId($category->id)->first() ?? abort(403,"Bele bir meqale yoxdur");
       // $data['articles']=Article::orderBy('created_at','DESC')->get();
        //$data['categories']=Category::all();
      
        $article->increment('hit');
        $data['article']=$article;
      
      
       
    return view('front.detail',$data);
    }
    public function category($slug){
        //$data['pages']=Page::orderBy('order','ASC')->get();
        $category= Category::whereSlug($slug)->first() ?? abort(403, 'bele bir kategoriya yoxdur') ;
        $data['category']=$category;
        //$data['categories']=Category::all();
        $data['articles']=Article::whereCategoryId($category->id)->paginate(2)??abort(403,'bele bir meqale yoxdur');
        return view('front.category',$data);
    }
    public function page($slug){
        //$data['pages']=Page::orderBy('order','ASC')->get();
        $page= Page::whereSlug($slug)->first() ?? abort(403, 'bele bir sehife yoxdur') ;
        $data['page']=$page;
        return view('front.page',$data);
    }
    public function contact(){
        return view('front.contact');
    }
    public function contactpost(Request $request){
        $rules=[
            'name'=>'required|min:3',
            'email'=>'required|email',
            'message'=>'required|min:10',
            'topic'=>'required',
        ];
        $validate=Validator::make($request->post(),$rules);
        if($validate->fails()){
            return redirect()->route('contact')->withErrors($validate)->withInput();
        }
        $contact=new Contact;
        $contact->name=$request->name;
        $contact->email=$request->email;
        $contact->message=$request->message;
        $contact->topic=$request->topic;
        $contact->save();
        return redirect()->route('contact')->with('success','mesajınız uğurla gönderildi');

     
    }
}
