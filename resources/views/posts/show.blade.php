@extends('layouts.master')

@section('content')
@include('layouts.nav1')
<div class="container">

<div class="row">


<div class="col-sm-8 blog-main">


   
    @foreach($images as $image)
             
              <img src="/images/{{ $image}}" class="img-thumbnail"  >
           
           @endforeach


<h1> {{ $post->title}}</h1>

{{ $post->body }}
{{--  
<hr>

    <div class="comments">
        <ul class="list-group">
        @foreach ($post->comments as  $comment)
        <li  class=""list-group-item>
        <strong>
            {{ $comment->created_at->diffForHumans()  }} :&nbsp;
        </strong>
            {{ $comment->body }}
        </li>
        @endforeach
        </ul>
        
    </div>
    <hr>    --}}

        {{--  <div class="car-block">
           
                <form  action="/posts/{{ $post->id }}/comments" method=POST>
                <div class="form-group"  >
                    {{ csrf_field()   }}
                   <textarea name="body" id="body" placeholder="Your comment  here." class="form-control" >    

                   </textarea>
                
                </div> 
                <div class="form-group">
                        <button type="submit" id='commentsubmit' class="btn btn-primary">Submit</button>
                        </div>
            
                    </form>
            @include('layouts.errors')

        </div>  --}}
      

</div>



  

    </div><!-- /.row -->

</div><!-- /.container -->



@include('laravelLikeComment::comment', ['comment_item_id' => '5' ])


@endsection 

@section('content1')

@include('layouts.script')

@endsection 
