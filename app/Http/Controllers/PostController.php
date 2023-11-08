<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Response;

class PostController extends Controller
{
    /**
     * @param \App\Models\Post $post
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function show(Post $post)
    {
        $post->with('comments');

        return view('post.show', [
            'post'  => $post,
        ]);
    }

    public function edit(Post $post): View
    {
        //нужно будет проверять аавтора, если пост существует

        $title = $post->exists ? 'Редактирование' : 'Новая статья';
        return view('post.edit', [
            'title' => $title,
            'post'  => $post,
        ]);
    }

    public function update(Request $request, Post $post)
    {
        //нужно проверять аавтора, если пост существует

        $request->validate([
            'title'   => 'required|string',
            'content' => 'required|string',
        ]);

        $post->fill([
            'title'   => $request->get('title'),
            'content' => $request->get('content'),
            'user_id' => $request->user()->id,
        ])->save();

        //сюда поставить уведомление

        return redirect()->route('post.edit', $post);//пока сюда
    }

    /**
     * @param \Illuminate\Http\Request $request
     *
     * @return string
     */
    public function list(Request $request)
    {
        $posts = Post::with(['user'])
            ->withCount('comments')
            ->orderBy('id', 'desc')
            ->simplePaginate(5);

        $test = view('post.list', [
            'posts' => $posts,
        ])->fragmentsIf(!$request->isMethodSafe());

        return  $test;
    }
}
