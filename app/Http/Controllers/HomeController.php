<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Client;
use App\Models\Gallery;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Blog;
use App\Models\Testimonial;
use App\Models\Product;
use App\Models\ProductRecommendations;
use App\Models\ProductAccessories;
use DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Mail\ServiceMail;
use App\Mail\ExpressInterestMail;
use App\Mail\ExpressInterestMailDeals;
use App\Mail\ThankyouExpressInterestMailDeals;
use App\Mail\RequestacallbackMail;
use Config;
use App\Mail\EventRegisterMail;
use App\Models\ProductClearanceSale;
use App\Models\Supplier;


class HomeController extends BaseController
{
    //
    public function index()
    {
        $banners = Banner::all();
        $categories = Category::where('parent_id', 0)->orderBy('menu_order', 'asc')->get();
        $blogs = Blog::limit(5)->get();
        $testimonials = Testimonial::limit(10)->get();
        $clients = Client::all();
        $trendings_products = Product::where('trending_products', '1')->orderBy('menu_order', 'desc')->limit(15)->get();
        return view('index', compact('banners', 'categories', 'blogs', 'testimonials', 'clients', 'trendings_products'));
    }
    public function contact()
    {
        return view('contact');
    }
    public function cleaningChemicals()
    {
        return view('cleaning_chemicals');
    }
    public function faq()
    {
        return view('faq');
    }
    public function about()
    {
        $clients = Client::all();
        return view('about', compact('clients'));
    }
    public function gallery()
    {
        $gallery = Gallery::all();
        return view('gallery', compact('gallery'));
    }
    public function galleryLoad(Request $request)
    {
        if ($request->get('id')) {

            $gallery_images = DB::table('gallery_images')
                ->select('image', 'image_alt')
                ->where('gallery_id', $request->get('id'))
                ->get();
            $output = '';
            foreach ($gallery_images as $gallery_image) {
                $output .= '<div class="swiper-slide">
                    <img src="' . env('APP_ADMIN_URL') . $gallery_image->image . '" alt="' . $gallery_image->image_alt . '">
                </div>';
            }
            echo $output;
        }
    }
    public function searchajaxload(Request $request)
    {

        if ($request->get('query')) {
            $query = $request->get('query');
            $a = DB::table('products')
                ->select('name as name', 'slug')
                ->where('name', 'LIKE', "%{$query}%")
                ->get();
            $b = DB::table('categories')
                ->select('name as name', 'short_code as slug')
                ->where('name', 'LIKE', "%{$query}%")
                ->get();
            $collection = collect([$a, $b]);

            $data = $collection->collapse();

            $output = '';

            $output .= '<style>
                            .dropdown-menu{
                                        display:block; position:relative;border-radius: 2px;
                                        padding: 0.5em 1em;
                                        color: #666;
                                        font-size: 14px;
                                        overflow: auto;
                                        width: 100%;
                                        }

                       </style>';
            if (count($data) != 0) {
                $output .= '<ul class="dropdown-menu" style="overflow: auto;border-radius: 2px;height: 300px;">';
                foreach ($data as $row) {
                    $output .= '
                    <li id="data_list"><a href="' . route('search', $row->slug) . '">' . $row->name . '</a></li>';
                }
                $output .= '</ul>';
            } else {
                $output .= '<ul class="dropdown-menu">';
                $output .= '<li><a href="#">No data</a></li>';
                $output .= '</ul>';
            }
            echo $output;
        }
    }
    public function search($slug)
    {
        $product_count = Product::where('slug', $slug)->get();

        if (count($product_count) == 1) {
			
            // $products = DB::table('products as p')
            //     ->leftJoin('categories as c', 'p.category', '=', 'c.id')
            //     ->select('p.*', 'c.name as category_name')
            //     ->where('p.slug', 'LIKE', $product_count['0']->slug)
            //     ->first();
            // //DB::select("SELECT *  FROM `products` WHERE slug='$slug' ORDER BY `products`.`created_at` DESC");

            $term = $product_count['0']->id;

            // $images = DB::table('images as pi')
            //     ->where('pi.product_id', $term)
            //     ->get();

            // $graphs = DB::table('graphs as gr')
            //     ->where('gr.product_id', $term)
            //     ->get();

            // $videos = DB::table('videos as pv')
            //     ->where('pv.product_id', $term)
            //     ->get();

            // $datasheets = DB::table('datasheets as d')
            //     ->where('d.product_id', $term)
            //     ->get();

            // $relatedProducts = Product::where('category', $products->category)->where('id', '!=', $products->id)->get();

            // return view('frontend.product-details', compact('products', 'images', 'graphs', 'videos', 'relatedProducts', 'datasheets'));
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
            $productTeam = Product::where('slug', $slug)->first();

            $productImages = DB::table('product_images as pi')
                ->where('pi.product_id', $product_count['0']->id)
                ->where('pi.image_type', 'gallery')
                ->orderBy('pi.priority', 'asc')
                ->get();

            $productAppImages = DB::table('product_images as pi')
                ->where('pi.product_id', $product_count['0']->id)
                ->where('pi.image_type', 'application')
                ->orderBy('pi.priority', 'asc')
                ->get();

            $productTechicalImages = DB::table('product_images as pi')
                ->where('pi.product_id', $product->id)
                ->where('pi.image_type', 'technical')
                ->orderBy('pi.priority', 'asc')
                ->get();

            $productBanners = DB::table('product_images as pi')
                ->where('pi.product_id', $product_count['0']->id)
                ->where('pi.image_type', 'banner')
                ->orderBy('pi.priority', 'asc')
                ->get();

            $productVideos = DB::table('product_videos as pv')
                ->where('pv.product_id', $product_count['0']->id)
                ->orderBy('pv.priority', 'asc')
                ->get();

            $productSpecs = DB::table('product_specifications as ps')
                ->where('ps.product_id', $product_count['0']->id)
                ->orderBy('ps.priority', 'asc')
                ->get();

            $productRecommendations = ProductRecommendations::where('product_id', $product->id)->where('rec_product_id', '<>', $product->id)->get();
            $productCats = DB::table('product_catalogues as pc')
                ->where('pc.product_id', $product_count['0']->id)
                ->orderBy('pc.priority', 'asc')
                ->get();
            $productOptionals = ProductAccessories::where('accessories_type', 'optional_Accessories')->where('product_id', $product->id)->get();
            $productScopes = ProductAccessories::where('accessories_type', 'scope_of_delivery')->where('product_id', $product->id)->get();



            return view('product_details', compact('product', 'productImages', 'productBanners', 'productVideos', 'productSpecs', 'productCats', 'productAppImages', 'productScopes', 'productOptionals', 'productRecommendations', 'productTechicalImages', 'productTeam','slug'));
        } else {
			
            $cat = Category::where('parent_id', 0)->where('short_code', $slug)->orderBy('menu_order', 'asc')->get();
            $count_cat = count($cat);
            if ($count_cat >= 1) {
				
                $this_cat = Category::where('short_code', $slug)->first();
                $categories = Category::where('parent_id', $this_cat->id)->orderBy('menu_order', 'asc')->get();
                return view('categories', compact('categories', 'this_cat', 'count_cat','slug'));
            } else {
                  
                $this_cat = Category::where('short_code', $slug)->first();
                $products = Product::where('category_id', $this_cat->id)->orderBy('menu_order', 'asc')->get();
                return view('categories', compact('products', 'count_cat', 'this_cat','slug'));
            }
        }
    }
    public function mail(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',

        ]);
        $to_email = "sales@yesclean.ae";
        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
        );

        Mail::to($to_email)->send(new ContactMail($data));
        return redirect()->back()->with('message', "Thank You for contacting Us.We will get back to you as soon as possible");
    }

    public function requestQuotationMail(Request $request)
    {


        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'service_quatation' => 'required',

        ]);



        $to_email = "sales@yesclean.ae";
        $quatation_data = array(
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'service_quatation' => $request->service_quatation,
            'message_quatation' => $request->message_quatation,


        );

        Mail::to($to_email)->send(new ServiceMail($quatation_data));
        return response()->json([
            'success' =>  'Your booking has been saved by the website.We will get back to you',
        ]);
    }
    public function expressInterestMail(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'product_name' => 'required',

        ]);
        $to_email = env('MAIL_FROM_ADDRESS');
        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'product_name' => $request->product_name,
        );

       $express_mail=Mail::to($to_email)->send(new ExpressInterestMail($data));
	   if($express_mail)
	   {
		   Mail::to($data['email'])->send(new ThankyouExpressInterestMailDeals());
	   } 	   
        return response()->json([
            'success' =>  "Thank You for sending us your Interest.We will get back to you as soon as possible.",
        ]);
    }
	
	 public function expressInterestMailDeals(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'product_name' => 'required',

        ]);
        $to_email = env('MAIL_FROM_ADDRESS');
		$to_cc = env('MAIL_CC');
        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'product_name' => $request->product_name,
        );

       $express_mail=Mail::to($to_email)->cc($to_cc)->send(new ExpressInterestMailDeals($data));
	   if($express_mail)
	   {
		   Mail::to($data['email'])->send(new ThankyouExpressInterestMailDeals());
	   } 	   
        return response()->json([
            'success' =>  "Thank You for sending us your Interest.We will get back to you as soon as possible.",
        ]);
    }
	
    public function requestCallBackMail(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'product_name' => 'required',

        ]);
        $to_email = "sales@yesclean.ae";
        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'product_name' => $request->product_name,
        );

        Mail::to($to_email)->send(new RequestacallbackMail($data));
        return response()->json([
            'success' =>  "You have requested a call with us.We will get back to you as soon as possible.",
        ]);
    }

    public function openHouse(Request $request)
    {
        return view('openhouse');
    }

    public function registerEvents(Request $request)
    {

        $input = $request->all();

        $mail = Mail::to(Config::get('mail.from.address'))->send(new EventRegisterMail($input));

        if ($mail) {
            return response()->json([
                'success' => true,
                'message' => "Great! Successfully Registered",
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Sorry! Please try again latter',
            ], 403);
        }
    }
    public function deals($slug=null)
    {
		if($slug=='thankyou')
		{
			$deals =
            Product::select('products.name as pname','products.slug as pslug', 'products.default_image as pimage','categories.name as cname' ,'products.id as pid', 'products.status as pstatus', 'product_clearance_sales.*','countries.name as cname')
            ->join('product_clearance_sales', 'product_clearance_sales.product_id', '=', 'products.id')
            ->join('categories', 'categories.id', '=', 'products.category_id')
			->join('suppliers', 'suppliers.id', '=', 'products.brand_id')
			->join('countries', 'countries.id', '=', 'suppliers.country_id')
            ->where('products.status', '!=', 0)->orderBy('product_clearance_sales.id', 'DESC')
			->get();	
        $supplier = [
		 'meta_title' => '',
		 'keywords' => '',
		 'meta_description' => '',
		 'banner_url' => '',
		 'banner_mobile_url' => '',
		];
        $supplier = (object) $supplier;	
	  	
        return view('thankyou', compact('deals','slug','supplier'));
		}	else {
		$supplier = Supplier::where('landing_short_code',$slug)->first();
	    if($supplier!="")
	    {
	        $supplier = $supplier;
	    } else {
	         $supplier = Supplier::where('short_code',$slug)->first();
	    }
		
		if($slug!="")
		{
			$deals =
            Product::select('products.name as pname','products.slug as pslug', 'products.default_image as pimage','categories.name as cname' ,'products.id as pid', 'products.status as pstatus', 'product_clearance_sales.*','suppliers.brand as sname','suppliers.banner_url as sbanner','suppliers.banner_url as sbanner','suppliers.id as sid','suppliers.meta_title as smeta_title','suppliers.meta_description as smeta_description','suppliers.keywords as skeywords','countries.name as cname')
            ->join('product_clearance_sales', 'product_clearance_sales.product_id', '=', 'products.id')
            ->join('categories', 'categories.id', '=', 'products.category_id')
			->join('suppliers', 'suppliers.id', '=', 'products.brand_id')
			->join('countries', 'countries.id', '=', 'suppliers.country_id')
            ->where('products.status', '!=', 0)->where('products.brand_id',$supplier->id)
			->orderBy('product_clearance_sales.id', 'DESC')
			->get();
		} else {	
		$deals =
            Product::select('products.name as pname','products.slug as pslug', 'products.default_image as pimage','categories.name as cname' ,'products.id as pid', 'products.status as pstatus', 'product_clearance_sales.*','countries.name as cname')
            ->join('product_clearance_sales', 'product_clearance_sales.product_id', '=', 'products.id')
            ->join('categories', 'categories.id', '=', 'products.category_id')
			->join('suppliers', 'suppliers.id', '=', 'products.brand_id')
			->join('countries', 'countries.id', '=', 'suppliers.country_id')
            ->where('products.status', '!=', 0)->orderBy('product_clearance_sales.id', 'DESC')
			->get();	
        }
        	
	  	
        return view('deals', compact('deals','slug','supplier'));
		}	
    }
	public function thankDeals1($slug=null,$status=null)
    {
		if($slug=='thankyou')
		{
			$deals =
            Product::select('products.name as pname','products.slug as pslug', 'products.default_image as pimage','categories.name as cname' ,'products.id as pid', 'products.status as pstatus', 'product_clearance_sales.*','countries.name as cname')
            ->join('product_clearance_sales', 'product_clearance_sales.product_id', '=', 'products.id')
            ->join('categories', 'categories.id', '=', 'products.category_id')
			->join('suppliers', 'suppliers.id', '=', 'products.brand_id')
			->join('countries', 'countries.id', '=', 'suppliers.country_id')
            ->where('products.status', '!=', 0)->orderBy('product_clearance_sales.id', 'DESC')
			->get();	
    
        	
	  	
        return view('thankyou', compact('deals'));
		}			
		$supplier = Supplier::where('landing_short_code',$slug)->first();
	    if($supplier!="")
	    {
	        $supplier = $supplier;
	    } else {
	         $supplier = Supplier::where('short_code',$slug)->first();
	    }
		
		if($slug!="")
		{
			$deals =
            Product::select('products.name as pname','products.slug as pslug', 'products.default_image as pimage','categories.name as cname' ,'products.id as pid', 'products.status as pstatus', 'product_clearance_sales.*','suppliers.brand as sname','suppliers.banner_url as sbanner','suppliers.banner_url as sbanner','suppliers.id as sid','suppliers.meta_title as smeta_title','suppliers.meta_description as smeta_description','suppliers.keywords as skeywords','countries.name as cname')
            ->join('product_clearance_sales', 'product_clearance_sales.product_id', '=', 'products.id')
            ->join('categories', 'categories.id', '=', 'products.category_id')
			->join('suppliers', 'suppliers.id', '=', 'products.brand_id')
			->join('countries', 'countries.id', '=', 'suppliers.country_id')
            ->where('products.status', '!=', 0)->where('products.brand_id',$supplier->id)
			->orderBy('product_clearance_sales.id', 'DESC')
			->get();
		} else {	
		$deals =
            Product::select('products.name as pname','products.slug as pslug', 'products.default_image as pimage','categories.name as cname' ,'products.id as pid', 'products.status as pstatus', 'product_clearance_sales.*','countries.name as cname')
            ->join('product_clearance_sales', 'product_clearance_sales.product_id', '=', 'products.id')
            ->join('categories', 'categories.id', '=', 'products.category_id')
			->join('suppliers', 'suppliers.id', '=', 'products.brand_id')
			->join('countries', 'countries.id', '=', 'suppliers.country_id')
            ->where('products.status', '!=', 0)->orderBy('product_clearance_sales.id', 'DESC')
			->get();	
        }
        	
	  	
        return view('thankyou', compact('deals','slug','supplier'));
    }
	public function thankDeals2($status=null)
    {
				
		$deals =
            Product::select('products.name as pname','products.slug as pslug', 'products.default_image as pimage','categories.name as cname' ,'products.id as pid', 'products.status as pstatus', 'product_clearance_sales.*','countries.name as cname')
            ->join('product_clearance_sales', 'product_clearance_sales.product_id', '=', 'products.id')
            ->join('categories', 'categories.id', '=', 'products.category_id')
			->join('suppliers', 'suppliers.id', '=', 'products.brand_id')
			->join('countries', 'countries.id', '=', 'suppliers.country_id')
            ->where('products.status', '!=', 0)->orderBy('product_clearance_sales.id', 'DESC')
			->get();	
    
        	
	  	
        return view('thankyou', compact('deals'));
    }
}
