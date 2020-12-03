

@foreach ($articles as $a)

<div class="post-preview skeleton">
  <a href="{{route('detail',[$a->getCategory->slug,$a->slug])}}">
            <h2 class="post-title">
           {{$a->title}}
            </h2>
          <img src="{{$a->image}}" alt="{{$a->image}}" style="width: 50%;">
            <h3 class="post-subtitle">
             {{Str::limit($a->content,90)}}
            </h3>
          </a>
          <p class="post-meta">{{$a->getCategory->name}}
          <a href="#">{{$a->category_id}}</a>
         <span class="float-right"> {{$a->created_at->diffForHumans()}}</span>
        </p>
        </div>

@endforeach