<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ProductDetail;
use App\Models\ProductImage;
use App\Models\ProductLink;
use App\Models\ProductType;
use App\Models\Category;
use App\Models\Gender;
use App\Models\Country;
use App\Models\ShopifyProduct;
use ZipArchive;
use File;

class ExploreController extends Controller
{

    public function exploreAliProduct()
    {
        $user_id = auth()->id();

        $productDetails = ProductDetail::where('user_id', $user_id)
                                            ->where('explore_pro_type', 'LIKE','%ali_express%')
                                            ->orderBy('created_at','DESC')
                                            ->paginate(50);
                                            
        // $productDetails = ProductDetail::orderBy('created_at','DESC')
        //                                     ->paginate(1000);

        // $productDetails = $collections->orderBy('created_at','DESC')->paginate('10');

        return view('freelancer.explorer-ali-express', compact('productDetails'));
    }
    public function uploadAliPage()
    {
        return view('freelancer.add-new-ali-ex');
    }

    public function uploadAli(Request $request)
    {
        $category = $request->category;

        if (is_array($category)) {
        $category = implode(',', $category);
        }

        $validatedData = $request->validate([
        'pname' => 'required|unique:product_details,product_name|max:255',
        'ali_express_link' => 'required',
        'amz_link' => 'required',
        'img_link' => 'required',
        'price' => 'required',
        'star_rating' => 'required',
        't_review' => 'required',
        'category' => 'required'
        ]);

        $productDetails = new ProductDetail;
        $productDetails->product_name = $request->input('pname');
        $productDetails->price = $request->input('price');
        $productDetails->explore_t_review = $request->input('t_review');
        $productDetails->explore_star_rating = $request->input('star_rating');
        $productDetails->explore_pro_type = "ali_express";
        $productDetails->category = $category;
        $productDetails->product_type_id = $request->input('type');
        $productDetails->user_id  = auth()->id();
        $productDetails->uploader_name = $request->input('uploadername');
        $productDetails->total_revenue = $request->input('t_sales');
        $productDetails->save();

        $productLinks = new ProductLink;
        $productLinks->aliexpress = $request->input('ali_express_link');
        

        $productDetails->productLink()->save($productLinks);

        $productImage = new ProductImage;
        $productImage->image_link_1 = $request->input('img_link');

        $productDetails->productImage()->save($productImage);

        return back()->with('status', 'Product Uploaded Successfully!');
    }

    public function exploreAmazonProduct()
    {
        $user_id = auth()->id();

        $productDetails = ProductDetail::where('user_id', $user_id)
                                            ->where('explore_pro_type', 'LIKE' ,'%amazon%')
                                            ->orderBy('created_at','DESC')
                                            ->paginate(50);

        return view('freelancer.explorer-amazon', compact('productDetails'));
    }
    
    public function uploadAmazonPage()
    {
        $productDetails = ProductDetail::all();

        return view('freelancer.add-new-amz',compact('productDetails'));
    }

    public function uploadAmazon(Request $request)
    {

        $category = $request->category;

        if (is_array($category)) {
        $category = implode(',', $category);
        }

        $validatedData = $request->validate([
        'pname' => 'required|unique:product_details,product_name|max:255',
        'ali_express_link' => 'required',
        'amz_link' => 'required',
        'img_link' => 'required',
        'price' => 'required',
        'star_rating' => 'required',
        't_review' => 'required',
        'category' => 'required'
    ]);

        $productDetails = new ProductDetail;
        $productDetails->product_name = $request->input('pname');
        $productDetails->price = $request->input('price');
        $productDetails->explore_t_review = $request->input('t_review');
        $productDetails->explore_star_rating = $request->input('star_rating');
        $productDetails->explore_pro_type = "amazon";
        $productDetails->category = $category;
        $productDetails->product_type_id = $request->input('type');
        $productDetails->user_id  = auth()->id();
        $productDetails->uploader_name = $request->input('uploadername');
        $productDetails->save();

        $productLinks = new ProductLink;
        $productLinks->aliexpress = $request->input('ali_express_link');
        $productLinks->amazon = $request->input('amz_link');

        $productDetails->productLink()->save($productLinks);

        $productImage = new ProductImage;
        $productImage->image_link_1 = $request->input('img_link');

        $productDetails->productImage()->save($productImage);

        return back()->with('status', 'Product Uploaded Successfully!');
    }

    public function exploreShopifyProduct()
    {
        $user_id = auth()->id();

        $productDetails = ShopifyProduct::where('user_id', $user_id)
                                            ->orderBy('created_at','DESC')
                                            ->paginate(50);

        return view('freelancer.explorer-shopify', compact('productDetails'));
    }

    public function uploadShopifyPage()
    {
        $productDetails = ShopifyProduct::all();

        return view('freelancer.add-new-shopify',compact('productDetails'));
    }

    public function uploadShopify(Request $request)
    {
                $shopify_products = new ShopifyProduct;
                $shopify_products->shopify_link = $request->input('shopify');
                $shopify_products->monthly_traffic = $request->input('monthly_traffic');
                $shopify_products->ad_spend = $request->input('ad_spend');
                $shopify_products->running_ads = $request->input('running_ads');
                $shopify_products->fb_link = $request->input('fb_page_link');
                
                $shopify_products->product_name = $request->input('pname');
                $shopify_products->image_link = $request->input('img1');
                $shopify_products->price  = $request->input('price');
                $shopify_products->product_link = $request->input('competitor1');
                $shopify_products->ali_express_link = $request->input('aliexpress');
                $shopify_products->product_type = $request->input('type'); 
                
                $shopify_products->product_name2 = $request->input('pname1');
                $shopify_products->image_link2 = $request->input('img11');
                $shopify_products->price2  = $request->input('price1');
                $shopify_products->product_link2 = $request->input('competitor11');
                $shopify_products->ali_express_link2 = $request->input('aliexpress1');
                $shopify_products->product_type2 = $request->input('type1');
                
                $shopify_products->product_name3 = $request->input('pname2');
                $shopify_products->image_link3 = $request->input('img12');
                $shopify_products->price3  = $request->input('price2');
                $shopify_products->product_link3 = $request->input('competitor12');
                $shopify_products->ali_express_link3 = $request->input('aliexpress2');
                $shopify_products->product_type3 = $request->input('type2');
                
                $shopify_products->product_name4 = $request->input('pname3');
                $shopify_products->image_link4 = $request->input('img13');
                $shopify_products->price4  = $request->input('price3');
                $shopify_products->product_link4 = $request->input('competitor13');
                $shopify_products->ali_express_link4 = $request->input('aliexpress3');
                $shopify_products->product_type4 = $request->input('type3');
                
                $shopify_products->uploader_name = $request->input('uploadername');
                $shopify_products->user_id = auth()->id();
                $shopify_products->save();
                return back()->with('status', 'Product Uploaded Successfully!');
    }
}
