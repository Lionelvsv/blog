

        <div class="blog-masthead">
      <div class="container">
        <nav class="nav blog-nav">
          <a class="nav-link active" href="{{ url('/home') }}">Home</a>
          <a class="nav-link" href="{{ url('/livesearch') }}">Search</a>
          <a class="nav-link" href="{{ url('/create') }}">create</a>
          <a class="nav-link active" href="{{ url('/home') }}">Posts</a>
          @if (Auth::check())
          <a class="nav-link ml-auto " href="#">{{ Auth::user()->name }}</a>
          <a class="nav-link  " href="{{ url('/logout') }}">logout</a>
          @endif 
        </nav>
      </div>
    </div>
    
