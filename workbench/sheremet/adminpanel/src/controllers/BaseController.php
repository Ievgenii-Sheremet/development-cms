<?php
namespace Sheremet\Adminpanel;
use \Illuminate\Routing\Controller;
use \Illuminate\Support\Facades\View;
use \Illuminate\Support\Facades\Blade;

class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

}
