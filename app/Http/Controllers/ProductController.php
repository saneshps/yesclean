<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductAccessories;
use App\Models\ProductRecommendations;
use DB;

class ProductController extends BaseController
{
  //
  public function category($slug)
  {


    // $cat = Category::where('parent_id', 0)->where('short_code', $slug)->get();  
    $cat_check = Category::where('short_code', $slug)->first();
    $cat_id = $cat_check->id;
    $cat = Category::where('parent_id', $cat_id)->orderBy('menu_order', 'asc')->get();
    $count_cat = count($cat);
    if ($count_cat >= 1) {

      $this_cat = Category::where('short_code', $slug)->first();
      $categories = Category::where('parent_id', $this_cat->id)->orderBy('menu_order', 'asc')->get();
      return view('categories', compact('categories', 'this_cat', 'count_cat', 'slug'));
    } else {

      $this_cat = Category::where('short_code', $slug)->first();
      $products = Product::where('category_id', $this_cat->id)
        ->where('status', 1)
        ->orderBy('menu_order', 'asc')->get();
      return view('categories', compact('products', 'count_cat', 'this_cat', 'slug'));
    }
  }
  public function allProducts()
  {

    $categories = Category::where('parent_id', 0)->orderBy('menu_order', 'asc')->get();
    return view('all_products', compact('categories'));
  }

  public function productDetails($slug)
  {

    $product = DB::table('products as p')
      ->leftJoin('categories as c', 'p.category_id', '=', 'c.id')
      ->leftJoin('suppliers as s', 'p.brand_id', '=', 's.id')
      ->leftJoin('countries as co', 's.country_id', '=', 'co.id')
      ->leftJoin('teams as t', 'p.manager_id', '=', 't.id')
      ->leftJoin('users as u', 't.user_id', '=', 'u.id')
      ->leftJoin('product_metas as pm', 'pm.product_id', '=', 'p.id')
      ->select(
        'p.*',
        'c.name as category',
        'c.short_code as c_slug',
        's.brand',
        't.image_url',
        'u.name as manager',
        'co.name as country',
        'pm.meta_title',
        'pm.keywords',
        'pm.meta_details',
        's.logo_url as s_logo_url',
        's.website as s_website',
        's.brand as s_brand'
      )
      ->where('p.slug', '=', $slug)
      ->first();

    $prod = Product::where('slug', $slug)->first();

    $productTeam = Product::where('slug', $slug)->first();

    $productImages = DB::table('product_images as pi')
      ->where('pi.product_id', $product->id)
      ->where('pi.image_type', 'gallery')
      ->orderBy('pi.priority', 'asc')
      ->get();

    $productAppImages = DB::table('product_images as pi')
      ->where('pi.product_id', $product->id)
      ->where('pi.image_type', 'application')
      ->orderBy('pi.priority', 'asc')
      ->get();

    $productTechicalImages = DB::table('product_images as pi')
      ->where('pi.product_id', $product->id)
      ->where('pi.image_type', 'technical')
      ->orderBy('pi.priority', 'asc')
      ->get();

    $productBanners = DB::table('product_images as pi')
      ->where('pi.product_id', $product->id)
      ->where('pi.image_type', 'banner')
      ->orderBy('pi.priority', 'asc')
      ->get();

    $productVideos = DB::table('product_videos as pv')
      ->where('pv.product_id', $product->id)
      ->orderBy('pv.priority', 'asc')
      ->get();

    $productSpecs = DB::table('product_specifications as ps')
      ->where('ps.product_id', $product->id)
      ->orderBy('ps.priority', 'asc')
      ->get();

    $productOptionals = ProductAccessories::where('accessories_type', 'optional_Accessories')->where('product_id', $product->id)->get();
    $productScopes = ProductAccessories::where('accessories_type', 'scope_of_delivery')->where('product_id', $product->id)->get();
    $productRecommendations = ProductRecommendations::where('product_id', $product->id)->where('rec_product_id', '<>', $product->id)->get();


    $productCats = DB::table('product_catalogues as pc')
      ->where('pc.product_id', $product->id)
      ->orderBy('pc.priority', 'asc')
      ->get();


    return view('product_details', compact('product', 'productImages', 'productBanners', 'productVideos', 'productSpecs', 'productCats', 'productAppImages', 'productScopes', 'productOptionals', 'productRecommendations', 'productTechicalImages', 'productTeam', 'prod'));
  }
}
