<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\PostsUser;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Post[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        DB::enableQueryLog();
      $posts= Post::with(['author','comments'])->withCount(['pined as pin_user'=>function($query){
            return  $query->where('id_user',Auth::id())->where('pin_post',1);
        }])->withCount(['pined as like_user'=>function($query){
            return  $query->where('id_user',Auth::id())->where('like_post',1);
        }])->orderBy('pin_user','DESC')->get();
        return view('posts.posts',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return ["Mensaje"=>"text"];
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $post=Post::create(array_merge($request->all(),['id_user'=>Auth::id()]));
        return $post;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model|object
     */
    public function show($id)
    {

        return Post::with(['author','comments',])->withCount(['pined as pin_user'=>function($query){
            return  $query->where('id_user',Auth::id())->where('pin_post',1);
        }])->withCount(['pined as like_user'=>function($query){
            return  $query->where('id_user',Auth::id())->where('like_post',1);
        }])->where('post.id',$id)->orderBy('pin_user','DESC')->first();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model|object
     */
    public function update(Request $request, $id)
    {
        Post::where([['id',"=",$id],["id_user","=",Auth::id()]])->update($request->only('body'));
        return $this->show($id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Post::destroy($id);
    }
    public function like(Request $request){

        if($request->isMethod('post')){
          $posts_user= PostsUser::updateOrCreate(
              ['id_post'=>$request->id,'id_user'=>Auth::id()],[
                  'id_post'=>$request->id,
                  'id_user'=>Auth::id(),
          ]
            );
          $posts_user->like_post=1;
          $posts_user->save();
          $post=Post::find($request->id);
          $post->likes+=1;
          $post->save();
        }
        if($request->isMethod('patch')){
             PostsUser::where([
                ['id_post',"=",$request->id],
                ['id_user',"=",Auth::id()]
            ])->update([
                    'id_post'=>$request->id,
                    'id_user'=>Auth::id(),
                    'like_post' =>0
                ]
            );
            $post=Post::find($request->id);
            $post->likes-=1;
            $post->save();
        }

        return $this->show($request->id);

    }
    public function pin(Request $request){
        if($request->isMethod('post')){
            $posts_user= PostsUser::updateOrCreate(
                ['id_post'=>$request->id,'id_user'=>Auth::id()],[
                    'id_post'=>$request->id,
                    'id_user'=>Auth::id(),
                ]
            );
            $posts_user->pin_post=1;
            $posts_user->save();

        }
        if($request->isMethod('patch')){
            PostsUser::where([
                ['id_post',"=",$request->id],
                ['id_user',"=",Auth::id()]
            ])->update([
                    'id_post'=>$request->id,
                    'id_user'=>Auth::id(),
                    'pin_post' =>0
                ]
            );
        }

        return $this->show($request->id);
    }
}
