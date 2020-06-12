@extends('layouts.admin')
@section('title','Photo List')
@section('content')
<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-header ">
          <div class="row">
            <h4 class="card-title col-10">Photo List</h4>
            <a class="btn btn-success col-2" href="{{url('admin/photoUpload')}}">Upload Photo</a>
          </div>
        </div>
        @if(Session::has('message'))
          <div class="alert alert-success alert-dismissible">
             <button type="button" class="close" data-dismiss="alert">&times;</button>
              {{ session()->get('message') }}
          </div>
        @endif
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped" id="state-table">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Title</th>
                  <th>Photo</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @if(sizeof($photos) > 0)
                @foreach($photos as $photo)
                
                <tr>
                  <td>{{$photo->id}}</td>
                  <td>{{$photo->title}}</td>
                  <td><img src="{{url('photos').'/'.$photo->path}}" height="60px" width="80px" alt="img small" class="img1 img-thumbnail"></td>
                 <!--  <td><a href="{{url('admin/photoScan/'.$photo->id)}}" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">Scan 1</a></td> -->
                  <td><button type="button" class="btn btn-primary btn-sm scan-btn" value="Scan" data-id="{{$photo->id}}">Scan</td>
                </tr>
                @endforeach
                @else
                <tr>
                  <td colspan="5"><center>Photos not Available</center></td>
                </tr>
                @endif
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
 <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <p class="modal-title">Scan Image Text</p>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <p></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
@endsection
<style type="text/css">
  .table td .img1{
    border-radius: 0%!important;
    height: 80px;
    width: 80px;
  }
  .modal-header {
   /* display: flex;
    align-items: flex-start;*/
    /* justify-content: space-between; */
     padding: 1rem; 
    border-bottom: 1px solid #f2f2f2;
    border-top-left-radius: 0.3rem;
    border-top-right-radius: 0.3rem;
}
.modal .modal-dialog .modal-content .modal-header {
    /* padding: 25px 26px; */
}
</style>
@section('script')
<script type="text/javascript">
  $(document).ready(function(){

 $('.scan-btn').click(function(){
   var id = $(this).data('id');
   $.ajax({
    url: '{{url("admin/photoScan")}}/'+id,
    type:'GET',
    data: {id: id},
    datatype: "json",
    success: function(response){ 
      console.log(response);
      var data=JSON.parse(response); 
      console.log(data);
      console.log(data.TextResult);
      $('.modal-body').html(data.TextResult);
      $('#myModal').modal('show'); 
    }
  });
 });
});
</script>
@endsection