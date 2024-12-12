<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Models\Image;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $posts = Post::where('user_id', $user->id)->with('images')->latest()->get();
        return view('dashboard.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('dashboard.post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {

        $data = $request->validated();
        $data['user_id'] = auth()->id();

        $post = Post::create($data);
        $this->uploadImages($request, $post->id);

        return redirect()->route('post.index')->with('success', 'Post created successfully!');
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::with('images')->findOrFail($id);
        return view('dashboard.post.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, $id)
    {
//dd($request);
        $post = Post::findOrFail($id);
        $data = $request->validated();
        $post->update($data);
        if ($request->hasFile('images')) {
            foreach ($post->images as $image) {
                \Storage::disk('public')->delete($image->image);
                $image->delete();
            }
            $this->uploadImages($request, $post->id);
        }
        return redirect()->route('post.index')->with('success', 'Post updated successfully!');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->route('post.index')->with('success', 'Post deleted successfully!');
    }

    public function bulkDelete(Request $request)
    {
        //dd($request->input('selected_posts'));
        $selectedPosts = $request->input('selected_posts');

        if ($selectedPosts) {
            Post::whereIn('id', $selectedPosts)->delete();
            return redirect()->route('post.index')->with('success', 'Selected posts deleted successfully.');
        }

        return redirect()->route('post.index')->with('error', 'No posts were selected.');
    }

    public function uploadImages(Request $request, $post_id)
    {
        $images = [];
        foreach ($request->file("images") as $image) {

            $path = $image->store("posts","public");


            $image = Image::create([
                'image' => $path,
                'post_id' => $post_id,
            ]);
            $images[] = $image;
        }
        return $images;

    }

}
