<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        // ダミー
        $articles = [
            (object) [
                'id' => 1,
                'title' => 'title1',
                'body' => 'body1',
                'created_at' => now(),
                'user' => (object) [
                    'id' => 1,
                    'name' => 'user1',
                ],
            ],
            (object) [
                'id' => 2,
                'title' => 'title2',
                'body' => 'body2',
                'created_at' => now(),
                'user' => (object) [
                    'id' => 2,
                    'name' => 'user2',
                ],
            ],
            (object) [
                'id' => 3,
                'title' => 'title3',
                'body' => 'body3',
                'created_at' => now(),
                'user' => (object) [
                    'id' => 3,
                    'name' => 'user3',
                ],
            ],
        ];

        return view('articles.index', ['articles' => $articles]);
    }
}
