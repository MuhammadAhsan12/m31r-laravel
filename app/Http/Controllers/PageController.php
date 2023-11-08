<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::paginate(4);
        //return $articles;
        return view('pages.index')
        ->withArticles($articles);
    }

    public function services()
    {
    	return view('pages.services');
    }

     public function about()
    {
    	return view('pages.about');
    }

     public function careers(){
        return view('pages.careers');
    }
     public function partner()
    {
    	return view('pages.partner');
    }

    public function countries()
    {
    	return view('pages.countries');
    }

    public function work()
    {
    	$articles = Article::OrderByDesc('created_at')->paginate(6);
        return view('pages.work')
        ->withArticles($articles);
    }

    public function article($slug)
    {
        $article = Article::whereSlug($slug)->FirstOrFail();
        return view('pages.article')->withArticle($article);
    }

    public function datacollection()
    {
    	return view('services.datacollection');
    }
    public function research()
    {
    	return view('services.research');
    }

    public function insight()
    {
    	return view('services.insight');
    }

    public function team() {
        return view('pages.team');
    }
    
}
