@extends('front.leyauts.master')
@section('title','detail')
@section('bg',$article->image)
@section('slogan',$article->title)
@section('content')



    
        <div class="col-lg-9  mx-auto">
        <p>{{$article->content}}</p>

        <span style="background-color: green;padding:6px;color:white">oxunma sayi: {{$article->hit}}</span>
        </div>
      
        @include("front.widgets.categorywidget")

   

  


  
  @endsection