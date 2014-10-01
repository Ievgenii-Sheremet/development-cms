<?php 
namespace Sheremet\Adminpanel;
use \Illuminate\Routing\Controller;
use \Illuminate\Support\Facades\View;

class AdminpanelController extends \BaseController {
  protected $layout = 'adminpanel::template-default.template';
  public function index(){
    $this->layout->title = 'Home Page';
    $this->layout->body = View::make('adminpanel::home.index');
  }

}
