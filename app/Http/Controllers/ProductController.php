<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductDetail;
use App\Models\ProductImage;
use App\Models\ProductLink;
use App\Models\ProductType;
use App\Models\Category;
use App\Models\Gender;
use App\Models\Country;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use App\Models\ShopifyProduct;
use App\Models\FileName;
use App\Models\GifName;
use App\Models\GifName2;
use App\Models\GifName3;

class ProductController extends Controller
{

    public function productResearch()
    {
        $user_id = auth()->id();

        $productDetails = ProductDetail::where('user_id', $user_id)
        ->whereNull('explore_pro_type')
        ->orderBy('created_at','DESC')->paginate(50);
        // dd($productDetails);
        // $productDetails = $collections->sortBy('created_at','DESC');

        return view('freelancer.product-research-new', compact('productDetails'));
    }
    
    public function uploadPage()
    {
        $productDetails = ProductDetail::all();

        return view('freelancer.practice-upload-new',compact('productDetails'));
    }

    public function uploadProduct(Request $request)
    {

        // if(!empty($request->gif1)){
        //     $request->file('gif1')->store('public');  
        //     $gifFileName1 = $request->gif1->hashName();
 

        // }
        // if(!empty($request->gif2)){
        //     $request->file('gif2')->store('public');  
        //     $gifFileName2 = $request->gif2->hashName();
 
        // }
        // if(!empty($request->gif3)){
        //     $request->file('gif3')->store('public');  
        //     $gifFileName3 = $request->gif3->hashName();

        // }
        
        $opportunity = $request->opportunity;

        if (is_array($opportunity)) {
            $opportunity = implode(',', $opportunity);
        }
        
        $age = $request->age;

        if (is_array($age)) {
            $age = implode(',', $age);
        }

        $gender = $request->gender;

        if (is_array($gender)) {
            $gender = implode(',', $gender);
        }

        $category = $request->category;

        if (is_array($category)) {
        $category = implode(',', $category);
        }

        $country = $request->country;

        if (is_array($country)) {
        $country = implode(',', $country);
        }
        // dd($country);

        $tag = $request->tag;

        if (is_array($tag)) {
        $tag = implode(',', $tag);
        }

        $fileName = FileName::value('video_name');     
        $gifName = GifName::value('name');
        $gifName2 = GifName2::value('name');
        $gifName3 = GifName3::value('name');

        $validatedData = $request->validate([
        'pname' => 'required|unique:product_details,product_name|max:255',
        'cost' => 'required',
        'profit' => 'required',
        'torder' => 'required',
        'trevinue' => 'required',
        'alexarank' => 'required',
        'opportunity' => 'required',
        'tag' => 'required',
        'age' => 'required',
        'gender' => 'required',
        'category' => 'required',
        'country' => 'required',
        'desc' => 'required',
        'video'=> 'required',

    ]);

        $productDetails = new ProductDetail;
        $productDetails->product_name = $request->input('pname');        
        $productDetails->price = $request->input('price');
        $productDetails->cost = $request->input('cost');
        $productDetails->profit = $request->input('profit');
        $productDetails->total_order = $request->input('torder');
        $productDetails->total_revenue = $request->input('trevinue');
        $productDetails->alexa_rank = $request->input('alexarank');
        $productDetails->age = $age;
        $productDetails->gender  = $gender;
        $productDetails->country = $country;
        $productDetails->category = $category;
        $productDetails->description = $request->input('desc');
        $productDetails->status = $request->input('status');
        $productDetails->product_type_id = $request->input('type');
        $productDetails->tag = $tag;
        $productDetails->opportunity_level  = $opportunity;
        $productDetails->content = $request->input('content');
        $productDetails->user_id  = auth()->id();
        $productDetails->uploader_name = $request->input('uploadername');
        if(!empty($fileName)){
            $productDetails->video_name = $fileName;

            FileName::where('video_name', $fileName)->delete();
        }
        $productDetails->save();

        $productLinks = new ProductLink;
        $productLinks->aliexpress = $request->input('aliexpress');
        $productLinks->ebay = $request->input('ebay');
        $productLinks->google_trend = $request->input('google');
        $productLinks->facebook_ad = $request->input('fbadd');
        $productLinks->youtube = $request->input('youtube');
        $productLinks->shopify = $request->input('shopify');
        $productLinks->amazon = $request->input('amazon');
        $productLinks->competitor_link_1 = $request->input('competitor1');
        $productLinks->competitor_link_2 = $request->input('competitor2');
        $productLinks->competitor_link_3 = $request->input('competitor3');
        $productLinks->competitor_link_4 = $request->input('competitor4');
        $productLinks->competitor_link_5 = $request->input('competitor5');

        $productDetails->productLink()->save($productLinks);

        $productImage = new ProductImage;
        $productImage->image_link_1 = $request->input('img1');
        $productImage->image_link_2 = $request->input('img2');
        $productImage->image_link_3 = $request->input('img3');
        $productImage->image_link_4 = $request->input('img4');
        $productImage->image_link_5 = $request->input('img5');
        $productImage->video_link = $request->input('video');
        if (!empty($gifName)) {
            $productImage->gif_1 = $gifName;
            
            GifName::whereNotNull('id')->delete();

        }
        if (!empty($gifName2)) {
            $productImage->gif_2 = $gifName2;

            GifName2::whereNotNull('id')->delete();

        }
        if (!empty($gifName3)) {
            $productImage->gif_3 = $gifName3;
            
            GifName3::whereNotNull('id')->delete();
        }

        $productDetails->productImage()->save($productImage);


        return back()->with('status', 'Product Uploaded Successfully!');
    }

    public function productEdit($id)
    {
        //  FETCH PRODUCT DETAILS BY ID
        $productDetails = ProductDetail::find($id);
        
        $productImages = ProductImage::firstWhere('product_detail_id', $id);
         
        $productLinks = ProductLink::firstWhere('product_detail_id', $id);
        


        //  FETCH SELECTED OPPORTUNITY DATA
        $opportunitys = $productDetails->opportunity_level;

        $containsT = Str::contains($opportunitys, 'trending_product');
        $containsF = Str::contains($opportunitys, 'facebook_ads');
        $containsU = Str::contains($opportunitys, 'untapped_product');


        //  FETCH SELECTED GENDER DATA
        $gender = $productDetails->gender;
        
        $containsMen = Str::contains($gender, 'Men');
        $containsWomen = Str::contains($gender, 'Women');
        $containsBaby = Str::contains($gender, 'Baby');
        $containsUnisex = Str::contains($gender, 'Unisex');


        //  FETCH SELECTED AGE DATA
        $customerAge = $productDetails->age;

        $containsUnder18   = Str::contains($customerAge, 'Under 18');
        $containsUnder1824 = Str::contains($customerAge, '18-24');
        $containsUnder2534 = Str::contains($customerAge, '25-34');
        $containsUnder3444 = Str::contains($customerAge, '34-44');
        $containsUnder4554 = Str::contains($customerAge, '45-54');
        $containsUnder5564 = Str::contains($customerAge, '55-64');
        $containsUnder65   = Str::contains($customerAge, '65+');

        //  FETCH SELECTED CATEGORY DATA
        $category = $productDetails->category;

        $containsBAC = Str::contains($category, 'Bike Accessories');
        $containsMAC = Str::contains($category, 'Mobile Accessories');
        $containsBS = Str::contains($category, 'Bag\'s & Shoes');
        $containsOD = Str::contains($category, 'Outdoor');
        $containsBH = Str::contains($category, 'Beauty Hair');

        $containsJW = Str::contains($category, 'Jewellery');
        $containsKH = Str::contains($category, 'Kitchen & household');
        $containsCUC = Str::contains($category, 'Computer Accessories');
        $containsELE = Str::contains($category, 'Electronics');
        $containsGIM = Str::contains($category, 'Garden Improvement');
        $containsMFA = Str::contains($category, 'Man\'s Fashion');

        $containsWf = Str::contains($category, ' Women\'s Fashion');
        $containsHB = Str::contains($category, 'Health & Beauty');
        $containsBK = Str::contains($category, 'Baby & Kids');
        $containsFIT = Str::contains($category, 'Fitness');
        $containsCA = Str::contains($category, 'Car Accessories');
        $containsHG = Str::contains($category, 'Home & Gerden');
        $containsPA = Str::contains($category, 'Pet Accessories');

        //  FETCH SELECTED TYPE DATA
        $productType = $productDetails->product_type_id;

        $containsSa = Str::contains($productType, 1);
        $containsUn = Str::contains($productType, 2);


        //  FETCH SELECTED STATUS
        $productStatus = $productDetails->status;
        
        $containsAv = Str::contains($productStatus, 'Available');
        $containsUnav = Str::contains($productStatus, 'Unavailable');

        return view('freelancer.practice-edit-product', compact('id', 'productDetails', 'productLinks', 'productImages','containsT','containsF','containsU','containsUnder18','containsUnder1824','containsUnder2534','containsUnder3444','containsUnder4554','containsUnder5564','containsUnder65','containsMen','containsWomen','containsBaby','containsUnisex','containsSa','containsUn','containsAv','containsUnav','containsHB','containsBK','containsFIT','containsCA','containsHG','containsPA','containsBAC','containsMAC','containsBS','containsOD','containsBH','containsJW','containsKH','containsCUC','containsELE','containsGIM','containsMFA','containsWf'));
    }


    public function amazonProductEdit($id)
    {
        //  FETCH PRODUCT DETAILS BY ID
        $productDetails = ProductDetail::find($id);
        
        $productImages = ProductImage::firstWhere('product_detail_id', $id);
         
        $productLinks = ProductLink::firstWhere('product_detail_id', $id);
        


        //  FETCH SELECTED OPPORTUNITY DATA
        $opportunitys = $productDetails->opportunity_level;

        $containsT = Str::contains($opportunitys, 'trending_product');
        $containsF = Str::contains($opportunitys, 'facebook_ads');
        $containsU = Str::contains($opportunitys, 'untapped_product');


        //  FETCH SELECTED GENDER DATA
        $gender = $productDetails->gender;
        
        $containsMen = Str::contains($gender, 'Men');
        $containsWomen = Str::contains($gender, 'Women');
        $containsBaby = Str::contains($gender, 'Baby');
        $containsUnisex = Str::contains($gender, 'Unisex');


        //  FETCH SELECTED AGE DATA
        $customerAge = $productDetails->age;

        $containsUnder18   = Str::contains($customerAge, 'Under 18');
        $containsUnder1824 = Str::contains($customerAge, '18-24');
        $containsUnder2534 = Str::contains($customerAge, '25-34');
        $containsUnder3444 = Str::contains($customerAge, '34-44');
        $containsUnder4554 = Str::contains($customerAge, '45-54');
        $containsUnder5564 = Str::contains($customerAge, '55-64');
        $containsUnder65   = Str::contains($customerAge, '65+');

        //  FETCH SELECTED CATEGORY DATA
        $category = $productDetails->category;

        $containsBAC = Str::contains($category, 'Bike Accessories');
        $containsMAC = Str::contains($category, 'Mobile Accessories');
        $containsBS = Str::contains($category, 'Bag\'s & Shoes');
        $containsOD = Str::contains($category, 'Outdoor');
        $containsBH = Str::contains($category, 'Beauty Hair');

        $containsJW = Str::contains($category, 'Jewellery');
        $containsKH = Str::contains($category, 'Kitchen & household');
        $containsCUC = Str::contains($category, 'Computer Accessories');
        $containsELE = Str::contains($category, 'Electronics');
        $containsGIM = Str::contains($category, 'Garden Improvement');
        $containsMFA = Str::contains($category, 'Man\'s Fashion');

        $containsWf = Str::contains($category, ' Women\'s Fashion');
        $containsHB = Str::contains($category, 'Health & Beauty');
        $containsBK = Str::contains($category, 'Baby & Kids');
        $containsFIT = Str::contains($category, 'Fitness');
        $containsCA = Str::contains($category, 'Car Accessories');
        $containsHG = Str::contains($category, 'Home & Gerden');
        $containsPA = Str::contains($category, 'Pet Accessories');

        //  FETCH SELECTED TYPE DATA
        $productType = $productDetails->product_type_id;

        $containsSa = Str::contains($productType, 1);
        $containsUn = Str::contains($productType, 2);


        //  FETCH SELECTED STATUS
        $productStatus = $productDetails->status;
        
        $containsAv = Str::contains($productStatus, 'Available');
        $containsUnav = Str::contains($productStatus, 'Unavailable');

        return view('freelancer.amazon-edit-product', compact('id', 'productDetails', 'productLinks', 'productImages','containsT','containsF','containsU','containsUnder18','containsUnder1824','containsUnder2534','containsUnder3444','containsUnder4554','containsUnder5564','containsUnder65','containsMen','containsWomen','containsBaby','containsUnisex','containsSa','containsUn','containsAv','containsUnav','containsHB','containsBK','containsFIT','containsCA','containsHG','containsPA','containsBAC','containsMAC','containsBS','containsOD','containsBH','containsJW','containsKH','containsCUC','containsELE','containsGIM','containsMFA','containsWf'));
    }

    public function aliProductEdit($id)
    {
        //  FETCH PRODUCT DETAILS BY ID
        $productDetails = ProductDetail::find($id);
        
        $productImages = ProductImage::firstWhere('product_detail_id', $id);
         
        $productLinks = ProductLink::firstWhere('product_detail_id', $id);
        


        //  FETCH SELECTED OPPORTUNITY DATA
        $opportunitys = $productDetails->opportunity_level;

        $containsT = Str::contains($opportunitys, 'trending_product');
        $containsF = Str::contains($opportunitys, 'facebook_ads');
        $containsU = Str::contains($opportunitys, 'untapped_product');


        //  FETCH SELECTED GENDER DATA
        $gender = $productDetails->gender;
        
        $containsMen = Str::contains($gender, 'Men');
        $containsWomen = Str::contains($gender, 'Women');
        $containsBaby = Str::contains($gender, 'Baby');
        $containsUnisex = Str::contains($gender, 'Unisex');


        //  FETCH SELECTED AGE DATA
        $customerAge = $productDetails->age;

        $containsUnder18   = Str::contains($customerAge, 'Under 18');
        $containsUnder1824 = Str::contains($customerAge, '18-24');
        $containsUnder2534 = Str::contains($customerAge, '25-34');
        $containsUnder3444 = Str::contains($customerAge, '34-44');
        $containsUnder4554 = Str::contains($customerAge, '45-54');
        $containsUnder5564 = Str::contains($customerAge, '55-64');
        $containsUnder65   = Str::contains($customerAge, '65+');

        //  FETCH SELECTED CATEGORY DATA
        $category = $productDetails->category;

        $containsBAC = Str::contains($category, 'Bike Accessories');
        $containsMAC = Str::contains($category, 'Mobile Accessories');
        $containsBS = Str::contains($category, 'Bag\'s & Shoes');
        $containsOD = Str::contains($category, 'Outdoor');
        $containsBH = Str::contains($category, 'Beauty Hair');

        $containsJW = Str::contains($category, 'Jewellery');
        $containsKH = Str::contains($category, 'Kitchen & household');
        $containsCUC = Str::contains($category, 'Computer Accessories');
        $containsELE = Str::contains($category, 'Electronics');
        $containsGIM = Str::contains($category, 'Garden Improvement');
        $containsMFA = Str::contains($category, 'Man\'s Fashion');

        $containsWf = Str::contains($category, ' Women\'s Fashion');
        $containsHB = Str::contains($category, 'Health & Beauty');
        $containsBK = Str::contains($category, 'Baby & Kids');
        $containsFIT = Str::contains($category, 'Fitness');
        $containsCA = Str::contains($category, 'Car Accessories');
        $containsHG = Str::contains($category, 'Home & Gerden');
        $containsPA = Str::contains($category, 'Pet Accessories');

        //  FETCH SELECTED TYPE DATA
        $productType = $productDetails->product_type_id;

        $containsSa = Str::contains($productType, 1);
        $containsUn = Str::contains($productType, 2);


        //  FETCH SELECTED STATUS
        $productStatus = $productDetails->status;
        
        $containsAv = Str::contains($productStatus, 'Available');
        $containsUnav = Str::contains($productStatus, 'Unavailable');

        return view('freelancer.ali-edit-product', compact('id', 'productDetails', 'productLinks', 'productImages','containsT','containsF','containsU','containsUnder18','containsUnder1824','containsUnder2534','containsUnder3444','containsUnder4554','containsUnder5564','containsUnder65','containsMen','containsWomen','containsBaby','containsUnisex','containsSa','containsUn','containsAv','containsUnav','containsHB','containsBK','containsFIT','containsCA','containsHG','containsPA','containsBAC','containsMAC','containsBS','containsOD','containsBH','containsJW','containsKH','containsCUC','containsELE','containsGIM','containsMFA','containsWf'));
    }
    
    public function shopifyProductEdit($id)
    {
        //  FETCH PRODUCT DETAILS BY ID
        $productDetails = ShopifyProduct::find($id);

        //  FETCH SELECTED TYPE DATA
        $productType = $productDetails->product_type;

        //  FETCH SELECTED STATUS
        $productStatus = $productDetails->status;
        
        $containsAv = Str::contains($productStatus, 'Available');
        $containsUnav = Str::contains($productStatus, 'Unavailable');

        return view('freelancer.shopify-edit-product', compact('id', 'productDetails','containsAv','containsUnav','productType'));
    }


    public function productUpdate(Request $request)
    {
        if ($request->type == 'Saturated' ) {
            $type_id = 1;
        }else{
            $type_id = 2;
        }

        // if(!empty($request->gif1)){
        //     $request->file('gif1')->store('public');  
        //     $gifFileName1 = $request->gif1->hashName();
        //     // dd($gifFileName1);

        // }
        // if(!empty($request->gif2)){
        //     $request->file('gif2')->store('public');  
        //     $gifFileName2 = $request->gif2->hashName();
 
        // }
        // if(!empty($request->gif3)){
        //     $request->file('gif3')->store('public');  
        //     $gifFileName3 = $request->gif3->hashName();

        // }

        $fileName = FileName::value('video_name');     
        $gifName = GifName::value('name');
        $gifName2 = GifName2::value('name');
        $gifName3 = GifName3::value('name');

        $validatedData = $request->validate([
        'pname' => 'required|max:255',
    ]);

        $productDetails = ProductDetail::find($request->id);
        $productDetails->product_name = $request->input('pname');        
        $productDetails->price = $request->input('price');
        $productDetails->cost = $request->input('cost');
        $productDetails->profit = $request->input('profit');
        $productDetails->total_order = $request->input('torder');
        $productDetails->total_revenue = $request->input('trevinue');
        $productDetails->alexa_rank = $request->input('alexarank');
        $productDetails->age = $request->input('age');
        $productDetails->gender  = $request->input('gender');
        $productDetails->country = $request->input('country');
        $productDetails->category = $request->input('category');
        $productDetails->description = $request->input('desc');
        $productDetails->status = $request->input('status');
        $productDetails->product_type_id = $type_id;
        $productDetails->opportunity_level  = $request->input('opportunity');
        $productDetails->user_id  = auth()->id();
        $productDetails->tag = $request->input('tag');
        $productDetails->content = $request->input('content');
        $productDetails->uploader_name = $request->input('uploadername');
        if(!empty($fileName)){
            $productDetails->video_name = $fileName;

            FileName::where('video_name', $fileName)->delete();
        }
        $productDetails->save();

        $productLinks = ProductLink::find($request->productLinksId);
        $productLinks->aliexpress = $request->input('aliexpress');
        $productLinks->ebay = $request->input('ebay');
        $productLinks->google_trend = $request->input('google');
        $productLinks->facebook_ad = $request->input('fbadd');
        $productLinks->youtube = $request->input('youtube');
        $productLinks->shopify = $request->input('shopify');
        $productLinks->competitor_link_1 = $request->input('competitor1');
        $productLinks->competitor_link_2 = $request->input('competitor2');
        $productLinks->competitor_link_3 = $request->input('competitor3');
        $productLinks->competitor_link_4 = $request->input('competitor4');
        $productLinks->competitor_link_5 = $request->input('competitor5');
        $productLinks->amazon = $request->input('amazon');

        //$productDetails->productLink()->save($productLinks);
        $productLinks->save();

        $productImage = ProductImage::find($request->productImagesId);
        $productImage->image_link_1 = $request->input('img1');
        $productImage->image_link_2 = $request->input('img2');
        $productImage->image_link_3 = $request->input('img3');
        $productImage->image_link_4 = $request->input('img4');
        $productImage->image_link_5 = $request->input('img5');
        $productImage->video_link = $request->input('video');

        if (!empty($gifName)) {
            $productImage->gif_1 = $gifName;
            
            GifName::whereNotNull('id')->delete();

        }
        if (!empty($gifName2)) {
            $productImage->gif_2 = $gifName2;

            GifName2::whereNotNull('id')->delete();

        }
        if (!empty($gifName3)) {
            $productImage->gif_3 = $gifName3;
            
            GifName3::whereNotNull('id')->delete();
        }

        //$productDetails->productImage()->save($productImage);
        $productImage->save();

        return back()->with('status', 'Product Updated Successfully!');
    }

    public function amazonProductUpdate(Request $request)
    {
        $category = $request->category;

        if (is_array($category)) {
        $category = implode(',', $category);
        }

        $validatedData = $request->validate([
        'pname' => 'required|max:255',
        'ali_express_link' => 'required',
        'amz_link' => 'required',
        'img_link' => 'required',
        'price' => 'required',
        'star_rating' => 'required',
        't_review' => 'required',
        'category' => 'required'
    ]);

        $productDetails = ProductDetail::find($request->id);
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

        $productLinks = ProductLink::find($request->productLinksId);
        $productLinks->aliexpress = $request->input('ali_express_link');
        $productLinks->amazon = $request->input('amz_link');

        $productLink->save();

        $productImage = ProductImage::find($request->productImagesId);
        $productImage->image_link_1 = $request->input('img_link');

        $productImage->save();

        return back()->with('status', 'Product Updated Successfully!');
    }

    public function aliProductUpdate(Request $request)
    {
        $category = $request->category;

        if (is_array($category)) {
        $category = implode(',', $category);
        }

        $validatedData = $request->validate([
        'pname' => 'required|max:255',
        'ali_express_link' => 'required',
        'amz_link' => 'required',
        'img_link' => 'required',
        'price' => 'required',
        'star_rating' => 'required',
        't_review' => 'required',
        'category' => 'required'
    ]);

        $productDetails = ProductDetail::find($request->id);
        $productDetails->product_name = $request->input('pname');
        $productDetails->price = $request->input('price');
        $productDetails->explore_t_review = $request->input('t_review');
        $productDetails->explore_star_rating = $request->input('star_rating');
        $productDetails->explore_pro_type = "ali_express";
        $productDetails->category = $category;
        $productDetails->product_type_id = $request->input('type');
        $productDetails->user_id  = auth()->id();
        $productDetails->uploader_name = $request->input('uploadername');
        $productDetails->total_revenue = $request->input('amz_link');
        $productDetails->save();

        $productLinks = ProductLink::find($request->productLinksId);
        $productLinks->aliexpress = $request->input('ali_express_link');

        $productLinks->save();

        $productImage = ProductImage::find($request->productImagesId);
        $productImage->image_link_1 = $request->input('img_link');

        $productImage->save();

        return back()->with('status', 'Product Updated Successfully!');
    }
    
    public function shopifyProductUpdate(Request $request){
        
        
        $validatedData = $request->validate([

        ]);
                
        $shopify_products = ShopifyProduct::find($request->id);
        
        $shopify_products->shopify_link = $request->input('shopify_link');
        $shopify_products->monthly_traffic = $request->input('monthly_traffic');
        $shopify_products->ad_spend = $request->input('ads_spend');
        $shopify_products->running_ads = $request->input('running_ads');
        $shopify_products->fb_link = $request->input('fb_page_link');
        
        $shopify_products->product_name = $request->input('pname');
        $shopify_products->image_link = $request->input('img1');
        $shopify_products->price  = $request->input('price');
        $shopify_products->product_link = $request->input('competitor1');
        $shopify_products->ali_express_link = $request->input('aliexpress');
        $shopify_products->product_type = $request->input('type'); 
        
        $shopify_products->product_name2 = $request->input('pname2');
        $shopify_products->image_link2 = $request->input('img12');
        $shopify_products->price2  = $request->input('price2');
        $shopify_products->product_link2 = $request->input('competitor12');
        $shopify_products->ali_express_link2 = $request->input('aliexpress2');
        $shopify_products->product_type2 = $request->input('type2');
        
        $shopify_products->product_name3 = $request->input('pname3');
        $shopify_products->image_link3 = $request->input('img13');
        $shopify_products->price3  = $request->input('price3');
        $shopify_products->product_link3 = $request->input('competitor13');
        $shopify_products->ali_express_link3 = $request->input('aliexpress3');
        $shopify_products->product_type3 = $request->input('type3');
        
        $shopify_products->product_name4 = $request->input('pname4');
        $shopify_products->image_link4 = $request->input('img14');
        $shopify_products->price4  = $request->input('price4');
        $shopify_products->product_link4 = $request->input('competitor14');
        $shopify_products->ali_express_link4 = $request->input('aliexpress4');
        $shopify_products->product_type4 = $request->input('type4');
        
        $shopify_products->uploader_name = $request->input('uploadername');
        $shopify_products->user_id = $request->input('id');
        $shopify_products->save();
        
        return back()->with('status', 'Product Updated Successfully!');
        
    }
}
