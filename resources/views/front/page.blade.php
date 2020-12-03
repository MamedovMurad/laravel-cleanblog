@extends('front.leyauts.master')
@section('title','detail')
@section('bg',$page->image)
@section('slogan',$page->title)
@section('content')



    
    

   

  
 <div class="col-lg-8 col-md-10 mx-auto">
{{$page->content}}       
</div>

  
  @endsection