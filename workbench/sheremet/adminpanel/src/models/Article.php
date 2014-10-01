<?php
namespace Sheremet\Adminpanel;
use \Illuminate\Database\Eloquent\Model as Eloquent;

class Article extends Eloquent {
    protected $table = 'article';
    protected $fillable = array('name', 'description', 'category');
    protected function test()
    {
        return Article::all();
    }
}

