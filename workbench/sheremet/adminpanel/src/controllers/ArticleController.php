<?php 
namespace Sheremet\Adminpanel;
use \Illuminate\Routing\Controller;
use \Illuminate\Support\Facades\View;
use \Illuminate\Support\Facades\Input;
use \Illuminate\Support\Facades\Redirect;


class ArticleController extends \BaseController {
  protected $layout = 'adminpanel::template-default.template';
  
  /**
  * Display a listing of the resource.
  *
  * @return Response
  */
  public function index(){
    $this->layout->title = 'Article';
    $article = Article::all();
    $data = array(
        'articles'=> $article
    );
    $this->layout->body = View::make('adminpanel::article.index',$data);   
  }
  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    $this->layout->title = 'Article create';    
    $this->layout->body = View::make('adminpanel::article.create');
    
  }
  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store()
  {
    Article::create(
      array(
          'name'=> Input::get('name'),
          'description'=>Input::get('description'),
          'category'=>Input::get('category')
      )
    );
    return Redirect::action('Sheremet\Adminpanel\ArticleController@index');
  }
  
  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    return $id;
  }
  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
          return $id;
  }
  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
          return $id;
  }
  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
         return $id;
  }
}
