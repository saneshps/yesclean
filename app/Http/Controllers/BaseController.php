<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Category;


class BaseController extends Controller
{
    //
    public function __construct(Request $request)
    {
        $_CategoryMenu = $this->categoryMenu();

        //$_latestBlogs = $this->latestBlogs();

        View::share(['_CategoryMenu' => $_CategoryMenu]);
    }

    protected function categoryMenu()
    {
        return Category::where('parent_id', '=', 0)
            ->with(['products' => function ($query) {
                $query->where('status', '=', 1)
                    ->orderBy('menu_order', 'asc');
            }])
            ->where("status", 1)
            ->orderBy('menu_order', 'asc')
            ->get();
    }

    // protected function latestBlogs()
    // {
    //     return Blog::where('status', 1)->orderBy('created_at', 'desc')->take(4)->get();
    // }
}
