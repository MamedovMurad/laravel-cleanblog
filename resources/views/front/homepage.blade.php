
@extends('front.leyauts.master')
@section('title','ana sayfa')
@section('content')


<style>
  @keyframes threadskeleton{
    100%{
      transform: skew(-30deg) translate(470px);
    }
  }
  .item::before{
    opacity: 0.2;
    box-shadow: 0 0 44px 22px rgb(255, 255, 255);
    animation: threadskeleton 1.3s ease-in-out  infinite;
    content: "";
    width: 60px;
    height: 100%;
position: absolute;
z-index: 1;
background-color: rgba(255, 255, 255, 0.733);

transform: skew(-30deg) translate(-20px);
  }
       .item {
         overflow: hidden;
         position: relative;

  margin-bottom: 30px;
  padding: 6px;
  width: 600px;

}

.item ~ .item {
  animation-delay: 300ms;
}

.item ~ .item ~ .item {
  animation-delay: 600ms;
}

.item .avatar {

  width: 400px;
  height: 200px;
  margin-right: 6px;
  background: #b4b3b3;
  border-radius: 6px;
}

.item .line {
  float: left;
  background: #cfcdcd;
  width: 330px;
  height: 30px;
  margin-top: 10px;
  margin-bottom: 20px;
  border-radius: 4px;
}

.item .line ~ .line {
  background: rgb(202, 200, 200);
  margin-top: 3px;

  width: 500px;
}



</style>

  <div class="col-lg-9 mx-auto">


<div id="post_data">


</div>









 <button class="btn btn-success goz">daha cox gor</button> <span class="loading" style="display: none"></span>



        <style>


          .loading{
            height: 30px;
            width: 30px;
            line-height: 45px;
            display: inline-block;
            border-radius: 50%;
            border: 2.4px dotted transparent ;
          animation: linear load 1s  infinite  alternate ;
          font-size: 12px;
          margin: 0 0 0 6px;
          color: rgb(117, 117, 112);


          }
  @keyframes load {
0%{
  border-top-color: rgb(27, 175, 39);
}
  35%{
    border-right-color: rgb(21, 133, 67);
    color: rgb(114, 21, 109);

  }
  70%{
    border-bottom-color: rgb(6, 112, 41);
  }
  100%{

    border-left-color: rgb(59, 3, 57);

  }

}
        </style>


    </div>



      @include("front.widgets.categorywidget")


@endsection
@section('script')
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script>

 $.ajax({
  url:'?page=1' ,
  type:"get",
  beforeSend: function () {
    var body = '<div class="item">'+
  '<div class="avatar"></div>'+
 ' <div class="line"></div>'+
 ' <div class="line"></div>'+
'</div>';


    $('.loading').show();
   for (let index = 0; index < 3; index++) {
    $('#post_data').append(body);

   }
    $('.goz').addClass('btn-secondary');
    $('.goz').html('Yüklənir...');
    $('.goz').removeClass('btn-success')

  }
})
.done(function (data) {
  setTimeout(() => {

$('.goz').addClass('btn-success');
$('.goz').removeClass('btn-warning')

$('.item').hide();
$('.goz').html('daha çox gör');
$('.loading').hide();
 $('#post_data').append(data.html);

 }, 1000);
})

 console.log('ll')


function loadMoreData(page) {

$.ajax({
  url:'?page=' + page,
  type:"get",
  beforeSend: function () {

    var body = '<div class="item">'+
  '<div class="avatar"></div>'+
 ' <div class="line"></div>'+
 ' <div class="line"></div>'+
'</div>';


    $('.loading').show();
   for (let index = 0; index < 3; index++) {
    $('#post_data').append(body);

   }
    $('.goz').addClass('btn-secondary');
    $('.goz').html('Yüklənir...');
    $('.goz').removeClass('btn-success')

  }


})



.done(function (data) {
  if (data.html=='') {
    $('.item').remove();
    $('.goz').hide();
    $('.goz').html('Meqale yoxdur ...');
    $('.loading').hide();


    return;
  }



   setTimeout(() => {

  $('.goz').addClass('btn-success');
  $('.goz').removeClass('btn-warning')

  $('.item').hide();
  $('.goz').html('daha çox gör');
  $('.loading').hide();
   $('#post_data').append(data.html);

   }, 1000);



})
.fail(function(jqXHR,ajaxOptions,ThrownError){
  alert("server not response");
})

}
var page=1;
document.querySelector('.goz').addEventListener('click',function(){
  page+=1;
  console.log(page)
  loadMoreData(page);
})

</script>

@endsection

