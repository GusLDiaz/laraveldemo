<?php
/**
 * Created by PhpStorm.
 * User: Gusli
 * Date: 9/24/2018
 * Time: 10:29 AM
 */

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Models\Category;

class MenuComposer
{
	/**
	 * Bind data to the view.
	 *
	 * @param  View  $view
	 * @return void
	 */
	public function compose(View $view)
	{
		$view->with('categories', Category::select('title', 'slug')->get());
	}
}
