@extends('layouts.master')


@section('content')

<!-- search box container starts  -->
    <div class="search">
        <h3 class="text-center title-color">Ajax Live Search Table Demo</h3>
        <p>&nbsp;</p>
        <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1">
                <div class="input-group">
                    <span class="input-group-addon" style="color: white; background-color: rgb(124,77,255);">BLOG SEARCH</span>
                    <input type="text" autocomplete="off" id="search" class="form-control input-lg" placeholder="Enter Blog Title Here">
                </div>
            </div>
        </div> </div>  
    </div>  
<!-- search box container ends  -->
<div id="txtHint" class="title-color" style="padding-top:50px; text-align:center;" ><b>Blogs information will be listed here...</b></div>
     


<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
@endsection        
@section('content1')

@include('layouts.script')

@endsection 