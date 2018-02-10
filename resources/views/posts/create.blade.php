@extends('layouts.master')

@section('content')
@include('layouts.nav1')
<div class="container">

<div class="row">

  <div class="col-sm-8 blog-main">

   <h1> create  a  post</h1>
   <form method="POST" action="/posts" enctype="multipart/form-data" >
   {{ csrf_field() }}
  <div class="form-group">

    <label for="title">Title:</label>
    <input type="text" class="form-control" id="title" name="title" required>
    
  </div>
  <div class="form-group">
    <label for="body">Body</label>
    <textarea name="body" id="body" class="form-control" ></textarea>
  </div>

 <br>
        <div class="input-group control-group increment">
                 Post photos (can attach more than one): <br>
    <br /> <br> <br> <br>
    <input type="file" name="photos[]" multiple />
        </div>



  <div class="form-group">
  <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>

   @include('layouts.errors')
  </div><!-- /.blog-main -->



</div><!-- /.row -->

</div><!-- /.container -->


<br>
@endsection 