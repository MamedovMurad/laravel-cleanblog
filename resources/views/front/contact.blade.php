



@extends('front.leyauts.master')
@section('title','detail')
@section('bg','')
@section('slogan','')
@section('content')







<div class="col-lg-8 col-md-10 mx-auto">
    <p>bizimle elaqe qurun</p>
    @if(session('success'))
    <div class="alert alert-success">
    {{session('success')}}
    </div>
    @endif
  
<form method="post" action="{{route('contact.post')}}">
    @csrf
      <div class="control-group">
        <div class="form-group floating-label-form-group controls">
          <label>ad-soyad</label>
        <input type="text" class="form-control" id="name" value="{{old('name')}}" placeholder="Ad soyad" name="name" >
        @error('name')
         <p class="help-block text-danger">
            
            {{$message}}
        </p>
        @enderror
        <p id="er"></p>
        </div>
      </div>
      <div class="control-group">
        <div class="form-group floating-label-form-group controls">
          
          <label>E-poct adresi</label>
          
          <input  class="form-control" value="{{old('email')}}" id="email"  placeholder="E-poct adresi" name="email" >
          @error('email')
        <p class="help-block text-danger">{{$message}}</p>
        @enderror
        </div>
        <p id="em"></p>
      </div>
     
      <div class="control-group">
        <div class="form-group col-xs-12  controls">
          <label>Movzu</label>
         
          <select  class="form-control"  required name="topic" >
              <option @if(old('topic')=="Bilgi") selected @endif >Bilgi</option>
              <option @if(old('topic')=="Yardim") selected @endif>Yardim</option>
              <option @if(old('topic')=="Umumi") selected @endif>Umumi</option>
          </select>
          @error('topic')
        <p class="help-block text-danger">{{$message}}</p> @enderror
        </div>
        
      </div>
      <div class="control-group">
        <div class="form-group floating-label-form-group controls">
          <label>Mektub</label>
      
          <textarea rows="3" class="form-control" placeholder="Mektub" name="message" id="mesaj"  >{{old('message')}}</textarea>
          @error('message')   <p class="help-block text-danger">{{$message}}</p>

          @enderror
        </div>
        <p id="ms"></p>
      </div>
      <br>
      <div id="success"></div>
      <button type="submit" class="btn btn-primary" id="sendMessageButton">Gonder</button>
    </form>
  </div>

  @endsection

  @section('script')
      <script>



        
       
        var valid ={
          name:document.getElementById('name'),
          email:document.getElementById('email'),
          mesaj:document.getElementById('mesaj'),
          Warning: function (a,mesaj,id,say) {
            a.addEventListener('focusout',function(){
              let span = document.getElementById(id);
      if(this.value===''||this.value.length<say){
        a.classList.add('is-invalid') 
     span.classList.add('text-danger');
        span.innerText=mesaj;
        console.log(this);
      }else{  
        span.innerText='uqurlu';
        span.classList.remove('text-danger');
        span.classList.add('text-success');
        a.classList.remove('is-invalid')
        a.classList.add('is-valid');
      }});
                 } } 
 let cs=valid.Warning.bind(valid);
        cs(valid.name,"ad minimal 3 herfden ibaret olmalidi!",'er',3);
        cs(valid.email,"Email min 5 herfden ibaret olmalidi!",'em',5);
        cs(valid.mesaj,"mesaj minimal 4 herfden ibaret olmalidi!",'ms',4);  
      document.querySelector('#sendMessageButton').addEventListener('click',function(event){
            if(valid.name.value===''||valid.name.value.length<say&&
            valid.email.value===''||valid.name.value.length<say&&
            valid.mesaj.value===''||valid.name.value.length<say
            ){
              event.preventDefault();
            }})



          
      </script>
  @endsection