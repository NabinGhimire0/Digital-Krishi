<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\CommunityPost;
use Illuminate\Http\Request;

class CommunityPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $perPage = 10;
        $page = request('page', 1);
        $posts = CommunityPost::latest()->paginate($perPage, ['*'], 'page', $page);
        return view('frontend.pages.community', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('frontend.userdashboard.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->file('media'));
        $request->validate([
            'title' => 'required',
            'media.*' => 'required|mimes:jpg,jpeg,png,gif,mp4',
        ]);
        $post = new CommunityPost();
        $post->title = $request->title;
        $post->user_id = auth()->user()->id;

        $content = [];

        if ($request->has('content')) {
            $content = json_decode($request->content, true);
        }

        foreach ($request->file('media') as $mediaFile) {
            $mediaType = $mediaFile->getClientOriginalExtension() == 'mp4' ? 'video' : 'image';
            $mediaPath = $mediaFile->store('community', 'public');

            $mediaData = [
                'type' => $mediaType,
                'path' => $mediaPath,
            ];

            $content[] = $mediaData;
        }

        $post->content = json_encode($content);

        $post->save();

        return redirect('/dashboard')->with('success', 'Post created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = CommunityPost::find($id);
        if ($post->user_id == auth()->user()->id) {
            return view('frontend.userdashboard.posts.edit', compact('post'));
        } else {
            return redirect('/dashboard')->with('error', 'Unauthorized access');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
        ]);
        $post = CommunityPost::find($id);
        if ($post->user_id == auth()->user()->id) {
            $post->title = $request->title;
            $content = [];

            if ($request->has('content')) {
                $content = json_decode($request->content, true);
            }

            foreach ($request->file('media') as $mediaFile) {
                $mediaType = $mediaFile->getClientOriginalExtension() == 'mp4' ? 'video' : 'image';
                $mediaPath = $mediaFile->store('community', 'public');

                $mediaData = [
                    'type' => $mediaType,
                    'path' => $mediaPath,
                ];

                $content[] = $mediaData;
            }

            $post->content = json_encode($content);
            $post->update();
            return redirect()->back()->with('success', 'Post updated successfully');
        } else {
            return redirect('/dashboard')->with('error', 'Unauthorized access');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = CommunityPost::find($id);
        if ($post->user_id == auth()->user()->id) {
            $post->delete();
            return redirect()->back()->with('success', 'Post deleted successfully');
        } else {
            return redirect()->back()->with('error', 'Unauthorized access');
        }
    }
}
