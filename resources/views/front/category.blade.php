
@extends('front.leyauts.master')
@section('title',$category->name)
@section('slogan',$category->name.' |'. 'kategoriyasi' .'               |'. $articles->count().'  eded tapildi')
@section('content')

 
  <div class="col-lg-9 mx-auto">
    @if ($articles->count()>0)
@foreach($articles as $article)

    

  <div class="post-preview">
  <a href="{{route('detail',[$article->getCategory->slug,$article->slug])}}">
            <h2 class="post-title">
             {{$article->title}}
            </h2>
          <img src="{{$article->image}}" alt="{{$article->image}}" style="width: 500px;">
            <h3 class="post-subtitle">
             {{Str::limit($article->content,90)}}
            </h3>
          </a>
          <p class="post-meta">{{$article->getCategory->name}}
          <a href="#">{{$article->category_id}}</a>
         <span class="float-right"> {{$article->created_at->diffForHumans()}}</span>
        </p>
        </div>
        @if(!$loop->last)
          <hr>
        @endif

      
       
@endforeach
      <span style="text-align: center">{{$articles->links()}}</span>
@else  
<div class="alert alert-danger">hecne tapilmadi</div> 
@endif

        
      {{--   <!-- Pager -->
        <div class="clearfix">
          <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
        </> --}}
      </div>

      @include("front.widgets.categorywidget")


@endsection
 