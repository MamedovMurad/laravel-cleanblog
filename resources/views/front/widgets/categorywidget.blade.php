@isset($categories)
    

    


<div class="col-lg-3">
      <div class="list-group ">

      @foreach($categories as $category)
      <a href="{{route('category',$category->slug)}}" style="@if(Request::segment(2)==$category->slug )cursor: not-allowed @endif"  class="list-group-item list-group-item-action @if(Request::segment(2)==$category->slug) active  @endif">
    {{$category->name}} <span class="badge badge-secondary float-right">{{$category->articleCount()->count()}}</span>
  </a>
  @endforeach

</div>
      </div>
      @endisset