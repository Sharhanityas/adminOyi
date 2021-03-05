<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id');
        $limit = $request->input('limit', 6);
        $judul_article = $request->input('judul_article');
        $isi = $request->input('isi');

        if ($id) {
            $article = Article::with('galleries')->find($id);

            if ($article)
                return ResponseFormatter::success($article, 'Data Artikel berhasil diambil');

            else
                return ResponseFormatter::error(null, 'Data Artikel Tidak Ada', 404);
        }


        $article = Article::with('galleries');

        if ($judul_article)
            $article->where('judul_article', 'like', '%' . $judul_article . '%');

        if ($isi)
            $article->where('isi', 'like', '%' . $isi . '%');

        return ResponseFormatter::success(
            $article->paginate($limit),
            'Data List Isi berhasil diambil'
        );
    }
}
