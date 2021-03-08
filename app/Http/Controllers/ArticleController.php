<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::orderBy('id', 'desc')->paginate(6);

        return view('article.index', compact('articles'));
    }

    public function show($slug)
    {
        $article = Article::where('slug', $slug)->first();

        if($article == null)
        {
            abort(404);
        }
        return view('article.single', compact('article'));
    }

    public function create()
    {
        return view('article.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'thumbnail' => 'mimes:jpeg,png,jpg,gif,svg|max:1024',
            'title' => 'required|max:255|min:3',
            'subject' => 'required|max:255|min:10',
        ]);
        $imgName = null;
        if($request->thumbnail)
        {
            $request->validate([
                'thumbnail' => 'mimes:jpeg,png,jpg,gif,svg|max:1024',
            ]);
            $imgName = $request->thumbnail->getClientOriginalName() . '-' . time() . '.' . $request->thumbnail->extension();
            $request->thumbnail->move(public_path('image'), $imgName);
        }
        // $article = new Article;
        // $article->title = $request->title;
        // $article->subject = $request->subject;

        // $article->save();

        Article::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title, '-'),
            'subject' => $request->subject,
            'thumbnail' => $imgName
        ]);

        return redirect()->route('article.index');
    }

    public function edit($id)
    {
        $article = Article::find($id);

        return view('article.edit', compact('article'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'thumbnail' => 'mimes:jpeg,png,jpg,gif,svg|max:1024',
            'title' => 'required|max:255|min:3',
            'subject' => 'required|max:255|min:10',
        ]);

        $imgName = null;
        if ($request->thumbnail)
        {
            $request->validate([
                'thumbnail' => 'mimes:jpeg,png,jpg,gif,svg|max:1024',
            ]);
            $imgName = $request->thumbnail->getClientOriginalName() . '-' . time() . '.' . $request->thumbnail->extension();
            $request->thumbnail->move(public_path('image'), $imgName);
        }


        Article::find($id)->update([
            'title' => $request->title,
            'subject' => $request->subject,
            'thumbnail' => $imgName
        ]);

        return redirect()->route('article.index');

    }

    public function destroy($id)
    {
        Article::find($id)->delete();

        return redirect()->route('article.index');

    }
}
