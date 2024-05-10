<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Article;

class ArticleController extends Controller
{
    //
    public function index()
    {
        // Fetch all articles from the database
        $articles = Article::all();

        // dd($articles);
        // Pass the articles data to the view
        // return view('article.articles', compact('articles'));

        return view('article.articles',  ['articles' => $articles]);
    }
    public function create(){

        if (Auth::check()) {
            $user = Auth::user();
         return view('article.create', ['user' => $user]);
        }else
        {
            return redirect(route('login'))->withErrors('Vous n\'etes pas autorisé à accéder');
        }
        }

        public function store(Request $request)
        {
            if (Auth::check()) {
            // Validate the form data
            $validatedData = $request->validate([
                'categorie_fr' => 'required|string|max:255',
                'categorie_en' => 'required|string|max:255',
                'image' => 'required|image|max:2048', // 2MB maximum file size for image
                'description_fr' => 'required|string',
                'description_en' => 'required|string',
                'lien_image' => 'required|string',
                'texte_fr' => 'required|string',
                'texte_en' => 'required|string',
            ]);
    
            // Store the uploaded image
            $imagePath = $request->file('image')->store('images', 'public');
    
            // Create a new article record in the database
            $article = new Article();
            $article->categorie_fr = $validatedData['categorie_fr'];
            $article->categorie_en = $validatedData['categorie_en'];
            $article->image = $imagePath;
            $article->description_fr = $validatedData['description_fr'];
            $article->description_en = $validatedData['description_en'];
            $article->lien_image = $validatedData['lien_image'];
            $article->texte_fr = $validatedData['texte_fr'];
            $article->texte_en = $validatedData['texte_en'];
            $article->save();
    
            return redirect()->route('articles');

            }else
            {
                return redirect(route('login'))->withErrors('Vous n\'etes pas autorisé à accéder');
            }
            

            // return redirect()->route('article.articles')->with('success', 'Article created successfully.');
        }

        public function edit(Article $article)
        {
            // dd(Article::find($id));
            if (Auth::check()) {
                $user = Auth::user();

                // dd($article);
            return view('article.edit', ['article' => $article, 'user' => $user]);
            }
            else
            {
                return redirect(route('login'))->withErrors('Vous n\'etes pas autorisé à accéder');
            }
        }

        public function update(Article $article, Request  $request){
            if (Auth::check()) {
                // Validate the form data
                $validatedData = $request->validate([
                    'categorie_fr' => 'required|string|max:255',
                    'categorie_en' => 'required|string|max:255',
                    'image' => 'nullable|image|max:2048', // Allow image update (optional)
                    'description_fr' => 'required|string',
                    'description_en' => 'required|string',
                    'lien_image' => 'required|string',
                    'texte_fr' => 'required|string',
                    'texte_en' => 'required|string',
                ]);
        
                // Update the article data
                $article->categorie_fr = $validatedData['categorie_fr'];
                $article->categorie_en = $validatedData['categorie_en'];
                $article->description_fr = $validatedData['description_fr'];
                $article->description_en = $validatedData['description_en'];
                $article->lien_image = $validatedData['lien_image'];
                $article->texte_fr = $validatedData['texte_fr'];
                $article->texte_en = $validatedData['texte_en'];
        
                // Update image if provided
                if ($request->hasFile('image')) {
                    $imagePath = $request->file('image')->store('images', 'public');
                    $article->image = $imagePath;
                }
        
                $article->save();
        
                return redirect()->route('articles')->with('success', 'Article updated successfully.');
            } else {
                return redirect()->route('articles')->withErrors('You are not authorized to update this article.');
            }
        }

        public function  destroy(Article $article){
            if (Auth::check()) {
            $article->delete();
    
            return redirect(route('articles'))->with('success', 'Product deleted successfully');
            }
            else
            {
                return redirect(route('login'))->withErrors('Vous n\'etes pas autorisé à accéder');
            }
        }
}
