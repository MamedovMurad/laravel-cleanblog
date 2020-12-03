@extends('back.leyauts.master')
@section('content')




<!-- Main content -->
<section class="content">
  
    <style>

    </style>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="w-p100 d-md-flex align-items-center justify-content-between">
                <h3 class="page-title">Məqalə</h3>
                <div class="d-inline-block align-items-center">
                    <nav>
                      
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                            <li class="breadcrumb-item" aria-current="page">Cədvəl</li>
                            <li class="breadcrumb-item active" aria-current="page">Məqalə</li>
                        </ol>
                    </nav>
                </div>
            </div>

        </div>
    </div>
    
  <div class="row">
      
    

    <div class="col-12">

       
      <!-- /.box -->

      <div class="box">
        <div class="box-header with-border">
        <h3 class="box-title">{{$articles->count()}}-meqale tapildi</h3>
         
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-left">
           Elave et
          </button>
       
        </div>
        <!-- Modal -->
  <div class="modal modal-left fade" id="modal-left" tabindex="-1" >
    <div class="modal-dialog" style="width: 480px; height:770px " >
      <div class="modal-content" >
        <div class="modal-header">
          <h5 class="modal-title">Meqale</h5>
          <button type="button" class="close" data-dismiss="modal">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="box">
                <div class="box-header with-border">
                  <h4 class="box-title">yeni post yarat</h4>
                </div>
                <!-- /.box-header -->
            <form method="POST" action="{{route('admin.meqaleler.store')}}" enctype="multipart/form-data">
                @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <label>meqale basliqi</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ti-pencil"></i></span>
                                </div>
                                <input type="text" class="form-control" name="title" placeholder="title">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Kategoriya secin</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ti-check"></i></span>
                                </div>
                                <select name="topic" id="kategoriya" name="topic" class="form-control">
                                    <option value="" aria-disabled="">kategoriya secin</option>
                                 @foreach ($categories as $item)
                                <option value="{{$item->id}}">{{$item->name}} </option>
                                 @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Metn</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ti-pencil-alt"></i></span>
                                </div>
                                <textarea id="editor" class="form-control" name="content" placeholder="Metn"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>şəkil əlave et</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ti-camera"></i></span>
                                </div>
                                <input type="file" class="form-control" name="image" >
                            </div>
                        </div>
                        <button type="submit" class="btn btn-rounded btn-primary btn-outline">
                            <i class="ti-save-alt"></i> Save
                          </button>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <div class="modal-footer modal-footer-uniform">
                            <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          
                          </div>
                  
                    </div>  
                </form>
              </div>
        </div>
      
      </div>
    </div>
  </div>
        <!-- /.box-header -->
        <div class="box-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $e)
                        {{$e}}
                    @endforeach
                </div>
            @endif
            <div class="table-responsive">
               
              <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
               
                <thead>
                    
                    <tr>
                       
                        <th>Status</th>
                        <th>Foto</th>
                        <th>ad</th>
                        <th>Kategoriya adi</th>
                        <th>baxis sayi</th>
                        <th>emeliyyatlar</th>
                        
                    </tr>
                </thead>
                <tbody>
                 
                @foreach ($articles as $item)
                <tr>
                <td>
                    @if ( $item->status==1)
                        <span class="text-success">aktiv</span>
                    @else
                    <span class="text-warning">passiv</span>
                    @endif
                </td>
                <td><img src="{{$item->image}}" alt="{{$item->status}} " style="width:200px"></td>
                <td>{{$item->title}}</td>
               
                <td>{{$item->getCategory->name}}</td>
                
                <td>{{$item->hit}}</td>
                <td>
                    <a href="" class="btn btn-primary"><i class="fa fa-eye"></i></a>
                    <a href="" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                    <a href="" class="btn btn-danger"><i class="fa fa-times"></i></a>
                </td>
                </tr>
                @endforeach
  
                </tbody>				  
                <tfoot>
                    <tr>
                        <th>Status</th>
                        <th>Foto</th>
                        <th>ad</th>
                        <th>mezmun</th>
                        <th>Kategoriya adi</th>
                        <th>emeliyyatlar</th>
                    </tr>
                </tfoot>
            </table>
            </div>              
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->          
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->


@endsection
@section('css')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection
@section('script')
<script src="{{asset('admin/')}}/assets/vendor_components/datatable/datatables.min.js"></script>
<script src="{{asset('admin/admin1/')}}/js/pages/data-table.js"></script>

<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
    $(document).ready(function() {
  $('#editor').summernote();
});
</script>
@endsection