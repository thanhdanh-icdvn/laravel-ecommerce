<?php

namespace App\Http\Controllers;

use App\Http\Requests\Post\PostStoreRequest;
use App\Http\Requests\Post\PostUpdateRequest;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $paginateNumber = 10;
        $posts = Post::with('author')->with(['tags'])->search()->paginate($paginateNumber);
        return view('admin.posts.index', compact('posts'))
            ->with('i', (request()->input('page', 1) - 1) * $paginateNumber);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostStoreRequest $request)
    {
        $post = null;
        if ($request->hasFile('featured_image')) {
            $path = 'images/post_images/';
            $file = $request->file('featured_image');
            $filename = $file->getClientOriginalName();
            $new_filename = time() . '_' . $filename;
            $upload = Storage::disk('public')->put($path . $new_filename, (string) file_get_contents($file));
            $post_thumbnails_path = $path . 'thumbnails';
            if (!Storage::disk('public')->exists($post_thumbnails_path)) {
                Storage::disk('public')->makeDirectory($post_thumbnails_path);
            }

            // Create square thumbnail

            Image::make(storage_path('app/public/' . $path . $new_filename))
                ->fit(200, 200)
                ->save(storage_path('app/public/' . $path . 'thumbnails/' . 'thumb_' . $new_filename));

            // Create resized image
            Image::make(storage_path('app/public/' . $path . $new_filename))
                ->fit(500, 350)
                ->save(storage_path('app/public/' . $path . 'thumbnails/' . 'resized_' . $new_filename));

            if ($upload) {
                $post = Post::create(array_merge($request->only('title', 'description', 'body'), [
                    'user_id' => auth()->id(),
                    'featured_image' => $new_filename
                ]));
            }
        }else{
            $post = Post::create(array_merge($request->only('title', 'description', 'body'), [
                'user_id' => auth()->id()
            ]));
        }
        if($request->has('tags')){
            $post->tags()->attach($request->tags);
        }
        return redirect()->route('admin.posts.index')
            ->withSuccess(__('Post created successfully.'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('admin.posts.show', [
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('admin.posts.edit', [
            'post' => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostUpdateRequest $request, Post $post)
    {
        $post->update($request->only('title', 'description', 'body'));

        return redirect()->route('admin.posts.index')
            ->withSuccess(__('Post updated successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index')
            ->withSuccess(__('Post deleted successfully.'));
    }
}
