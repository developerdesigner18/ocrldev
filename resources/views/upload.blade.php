
<div class="content-wrapper">
  <div class="row">
    <div class="col-md-6 d-flex align-items-stretch grid-margin">
      <div class="row flex-grow">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
             
              <h3 class="card-title mb-3"><b>Add New Photo</b></h3>
              <hr>
              <form method="post" action="{{url('api')}}" class="forms-sample" enctype="multipart/form-data">
            
                @csrf
                 <div class="col-lg-12 col-sm-12 col-xs-12" id="my-msg" >
                   @if ($errors->any())
                   <div class="alert alert-danger">
                   </div>
                   @endif
                   @if(session()->has('message'))
                   <div class="alert alert-success">
                    {{ session()->get('message') }}
                  </div>
                  @endif
                </div>
               
                <div class="form-group">
                  <label>File upload</label>
                  <input type="file" name="photo" class="file-upload-default">
                  <div class="input-group col-xs-12">
                    <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                    <span class="input-group-append">
                      <button class="file-upload-browse btn btn-info" type="button">Upload</button>
                    </span>
                  </div>
                </div>
              
                <button type="submit" class="btn btn-success mr-2">Submit</button>
               
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
