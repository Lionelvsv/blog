<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

use  App\Post;

use Carbon\Carbon;
class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $posts= Post::latest();

        if($month = request('month')){
            $posts->whereYear('created_at', carbon::parse($month)->month);
        }


        if($year = request('year')){
            $posts->whereMonth('created_at', $year );
        }

        $posts = $posts->get();
        

        $archives = Post::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
            ->groupBy('year', 'month')
            ->orderByRaw('min(created_at) desc')
            ->get()
            ->toArray();

        


        return view('posts.index' ,compact('posts', 'archives'));
    } 

    public function show(Post  $post )
    {
        $images = json_decode($post->filename,true);

            
        return view('posts.show' ,compact('post' , 'images'));
    }
    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request )
    {
      $post = new Post;

   
    $this->validate(request(),[
        'title' => 'required',
        'body' => 'required',
        'photos' => 'required',
        'photos.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
    ]);



    if($request->hasfile('photos'))
    {

       foreach($request->file('photos') as $image)
       {
           $name=$image->getClientOriginalName();
           $image->move(public_path().'/images/', $name);  
           $data[] = $name;  
       }
    }

    $post->filename=json_encode($data);

    $post->title = request('title');

    $post->body = request('body');

    $post->user_id = auth()->id();
    

    $post->save();



        

   
        return back()->with('success', 'Your images has been successfully');

    }
}
