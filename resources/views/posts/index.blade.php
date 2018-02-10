@extends('layouts.master')


@section('content')

@include('layouts.nav1')


    <div class="container">

      <div class="row">

        <div class="col-sm-8 blog-main">

           
 






        @foreach ($posts  as $post)

          @include('posts.post')
          
        @endforeach

          

         <br> <br> <br> <br> <br>

        </div><!-- /.blog-main -->

       @include('layouts.sidebar')

      </div><!-- /.row -->

    </div><!-- /.container -->

@endsection