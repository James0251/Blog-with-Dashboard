<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Tag;
use App\User;
use Illuminate\Http\Request;

class BlogController extends Controller {
    /**
     * Главная страница блога (список всех постов)
     */
    public function index() {
        $posts = Post::orderBy('created_at', 'desc')->paginate(5);
        return view('blog.index', compact('posts'));
    }

    /**
     * Страница просмотра отдельного поста блога
     */
    public function post(Post $post) {
        return view('blog.post', compact('post'));
    }

    /**
     * Список постов блога выбранной категории
     */
    public function category(Category $category) {
        $posts = $category->posts()
            ->orderBy('created_at', 'desc')
            ->paginate(5);
        return view('blog.category', compact('category', 'posts'));
    }

    /**
     * Список постов блога выбранного автора
     */
    public function author(User $user) {
        $posts = $user->posts()
            ->orderBy('created_at', 'desc')
            ->paginate(5);
        return view('blog.author', compact('user', 'posts'));
    }

    /**
     * Список постов блога с выбранным тегом
     */
    public function tag(Tag $tag) {
        $posts = $tag->posts()
            ->orderBy('created_at', 'desc')
            ->paginate(5);
        return view('blog.tag', compact('tag', 'posts'));
    }
}
