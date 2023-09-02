<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ArticleModel;

class Article extends BaseController
{
    private $articleModel;
    public function __construct()
    {
        $this->articleModel = new ArticleModel();
    }
    public function index()
    {
        $articlesData = $this->articleModel->findAll();
        $data = [
            'title' => 'Article list',
            'articlesData' => $articlesData
        ];
        return view('articles/list', $data);
    }
    public function detail($articelSlug)
    {
        $articleBySlug = $this->articleModel->where('article_slug', $articelSlug)->first();
        $data = [
            'title' => $articleBySlug['article_title'],
            'articleBySlug' => $articleBySlug
        ];
        return view('articles/detail', $data);
    }
    public function create()
    {
        $data = [
            'title' => 'Create a article'
        ];
        return view('articles/create', $data);
    }
    public function save()
    {
        $articleTitle =  $this->request->getVar('title');
        $articelSlug = strtolower(url_title($articleTitle)) . date('ymdhis');
        $data = [
            'article_title' =>  $articleTitle,
            'article_content' =>  $this->request->getVar('content'),
            'article_slug' =>  $articelSlug
        ];
        $this->articleModel->save($data);
        return redirect()->to('articles');
    }
}
