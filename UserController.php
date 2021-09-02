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
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Hash;
use Validator;
use ZipArchive;
use File;
use DateTime;
use Response;


class UserController extends Controller
{
	
	public function profile()
	{
        return view('user.profile');
	}

	public function freelancerProfile()
	{
        return view('user.freelancerProfile');
	}

	public function profileupdate(Request $request){
    if($request->profile_upload != null){
		$path = $request->profile_upload->store('/userimages/profile');
        
		$update = User::where('id',Auth::user()->id)->update([
			'name' => $request->name,
			'address' => $request->address,
			'email' =>$request->email,
			'profile_photo_path' => $path
		]);
        }else{
            $update = User::where('id',Auth::user()->id)->update([
			'name' => $request->name,
			'address' => $request->address,
			'email' =>$request->email
		]);
        }
		return back();
	}

	public function passwordchange(Request $request){
		$validator = Validator::make($request->all(), [
			'password' => 'required|password',
			'new_password' => 'required_with:confirm_password|same:confirm_password',
			'confirm_password' => ['required'],
		])->validate();
		$password = Hash::make($request->new_password);
		$update = User::where('id',Auth::user()->id)->update([
			'password' => $password
		]);

		return back();

	}


	public function allProduct(Request $request)
	{
		if(Auth::check()){
			$sortSelected = 0;
	        $filterSelected = 0;
	        $categorySelected = 0;
		if(!empty($request->category)){
			// dd($request->category);
		}

		//-- HANDLE SORTING
      	if($request->sort) {
      		$sortSelected = $request->sort;
            $filterSelected = $request->filter;
            $categorySelected = $request->category;
          switch($request->sort){
			case 1:
				$orderColumn = 'profit';
			break;
			case 2:
				$orderColumn = 'total_order';
			break;
			case 3:
				$orderColumn = 'created_at';
			break;
			case 4:
				$orderColumn = 'total_order';
			break;
			case 5:
				$orderColumn = 'total_order';
			break;
			default:
				$orderColumn = 'product_name';
			break;        
 			}
 			
      	}else{
      		$orderColumn = 'created_at';
      	}

      	//-- HANDLE CATEGORY
      	if($request->category) {
      		$sortSelected = $request->sort;
            $filterSelected = $request->filter;
            $categorySelected = $request->category;
          switch($request->category){
			case 1:
				$category = 'Women\'s Fashion';
			break;
			case 2:
				$category = 'Man\'s Fashion';
			break;
			case 3:
				$category = 'Health & Beauty';
			break;
			case 4:
				$category = 'Home Improvement';
			break;
			case 5:
				$category = 'Garden Improvement';
			break;
			case 6:
				$category = 'Pet Accessories';
			break;
			case 7:
				$category = 'Electronics';
			break;
			case 8:
				$category = 'Computer Accessories';
			break;
			case 9:
				$category = 'Baby & Kids';
			break;
			case 10:
				$category = 'Kitchen & household';
			break;
			case 11:
				$category = 'Jewellery';
			break;
			case 12:
				$category = 'Car Accessories';
			break;
			case 13:
				$category = 'Bike Accessories';
			break;
			case 14:
				$category = 'Mobile Accessories';
			break;
			case 15:
				$category = 'Fitness';
			break;
			case 16:
				$category = 'Bag\'s & Shoes';
			break;
			case 17:
				$category = 'Outdoor';
			break;
			case 18:
				$category = 'Beauty Hair';
			break;
			default:
				$category = '';
			break;        
 			}
 			
      	}else{
      		$category = '';
      	}
      
      	//-- HANDLE FILTER
      	if($request->filter) {
      		$sortSelected = $request->sort;
            $filterSelected = $request->filter;
            $categorySelected = $request->category;
          switch($request->filter){
			case 1:
				$trendingProducts = ProductDetail::where('price', '<=' ,'30')->whereNull('explore_pro_type')->where('category', 'LIKE' ,'%'.$category.'%')->orderBy($orderColumn,'DESC')->paginate(3);
				// dd($trendingProducts);
			break;
			case 2:
				$trendingProducts = ProductDetail::where('price', '>=' , '30')->whereNull('explore_pro_type')->orderBy($orderColumn,'DESC')->paginate(3);
			break;
			case 3:
				$trendingProducts = ProductDetail::where('profit', '>=' , '15')->whereNull('explore_pro_type')->orderBy($orderColumn,'DESC')->paginate(3);
			break;
			case 4:
				$trendingProducts = ProductDetail::where('cost', '<=' , '20')->whereNull('explore_pro_type')->orderBy($orderColumn,'DESC')->paginate(3);
			break;
			default:
				$filterBy = 'product_name';
			break;        
 			}
      	}else{

      	}

      	if($request->search) {
      		$sortSelected = $request->sort;
            $filterSelected = $request->filter;
            $categorySelected = $request->category;
      		// dd($request->search);
      		$trendingProducts = ProductDetail::where('product_name', 'LIKE', '%'.$request->search.'%')->whereNull('explore_pro_type')->where('category', 'LIKE' ,'%'.$category.'%')->orderBy($orderColumn,'DESC')->paginate(3);
      	}
      	if (empty($trendingProducts)) {
      		$trendingProducts = ProductDetail::where('category', 'LIKE' ,'%'.$category.'%')->whereNull('explore_pro_type')->orderBy($orderColumn,'DESC')->paginate(3);
      	}
      	

		// $trendingProducts = ProductDetail::all();
		// count($trendingProducts);

		// dd( $trendingProducts );

      	        $artilces = '';
        if ($request->ajax()) {
            foreach ($trendingProducts as $result) {

            	$product_id = $result->id;

                $artilces.=
                '<div class="col-md-4 mt-4">
              <div class="card shadow" style="min-width: 280px;">
                <div class="row px-2 video-icon">
                  <img src="'.$result->productImage[0]->image_link_1.'" class="card-img-top img-fluid" alt="...">
                  <i class="fas fa-play-circle video-play-icon"></i>
                </div>
                <div class="row card-body px-2">
                  <div class="col-12 pb-1 px-3" style="border-bottom: 2px solid #DCDCDC;">
                    <h5 class="card-title">'.$result->product_name.'</h5>
                  </div>
                  <div class="col-12 px-3">
                    <div class="row">
                      <div class="col-7">
                        <span>Order</span>
                      </div>
                      <div class="col-5 text-right">
                        <span>'.$result->total_order.'</span>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-7">
                        <span>Product Cost</span>
                      </div>
                      <div class="col-5 text-right">
                        <span>$'.$result->cost.'</span>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-7">
                        <span>Selling Price</span>
                      </div>
                      <div class="col-5 text-right">
                        <span>$'.$result->price.'</span>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-7">
                        <span>Profit Margin</span>
                      </div>
                      <div class="col-5 text-right">
                        <span>$'.$result->profit.'</span>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-7">
                        <span>Total Sales</span>
                      </div>
                      <div class="col-5 text-right">
                        <span>$'.$result->total_revenue.'</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row mx-4 px-2 mb-2 justify-content-center rounded icon-btn">
                  <a href="/all-product-details/'.$result->id.'" type="button" class="btn fb-ads-card-btn">View Product Details</a>
                </div>
              </div>
				</div>';
            }
            return $artilces;
        }


		foreach ($trendingProducts as $trendingproduct) {

			$country = $trendingproduct->country.",";

		}

		if (empty($country)) {

			return view('user.all-product',compact('trendingProducts','sortSelected','filterSelected','categorySelected'));

		}else{

			return view('user.all-product',compact('trendingProducts','country','sortSelected','filterSelected','categorySelected'));
		}

		return view('user.all-product',compact('trendingProducts','country','sortSelected','filterSelected','categorySelected'));

		}else{

	 	return view('auth.login');

	 	}
	}

	public function allProductDetails($product_id)
	{

		if(Auth::check()){
			
		$trendingProducts = ProductDetail::where('id', $product_id)
		->get();
		// dd($trendingProducts);
		
		foreach ($trendingProducts as $trendingproduct) {
			$country = $trendingproduct->country.",";

			// echo $country;
		}
			
			if (empty($country)) {

				return view('user.product-details',compact('trendingProducts'));

			}else{

				return view('user.product-details',compact('trendingProducts','country'));
			}

		}else{

	 	return view('auth.login');
		}
	}

    public function trendingProducts(Request $request)
	{
	 	if(Auth::check()){
	 		$sortSelected = 0;
            $filterSelected = 0;
            $categorySelected = 0;
		//-- HANDLE SORTING
      	if($request->sort) {
      		$sortSelected = $request->sort;
            $filterSelected = $request->filter;
            $categorySelected = $request->category;
          switch($request->sort){
			case 1:
				$orderColumn = 'profit';
			break;
			case 2:
				$orderColumn = 'total_order';
			break;
			case 3:
				$orderColumn = 'created_at';
			break;
			case 4:
				$orderColumn = 'total_order';
			break;
			case 5:
				$orderColumn = 'total_order';
			break;
			default:
				$orderColumn = 'product_name';
			break;        
 			}
 			
      	}else{
      		$orderColumn = 'created_at';
      	}

      	//-- HANDLE CATEGORY
      	if($request->category) {
      		$sortSelected = $request->sort;
            $filterSelected = $request->filter;
            $categorySelected = $request->category;
          switch($request->category){
			case 1:
				$category = 'Women\'s Fashion';
			break;
			case 2:
				$category = 'Man\'s Fashion';
			break;
			case 3:
				$category = 'Health & Beauty';
			break;
			case 4:
				$category = 'Home Improvement';
			break;
			case 5:
				$category = 'Garden Improvement';
			break;
			case 6:
				$category = 'Pet Accessories';
			break;
			case 7:
				$category = 'Electronics';
			break;
			case 8:
				$category = 'Computer Accessories';
			break;
			case 9:
				$category = 'Baby & Kids';
			break;
			case 10:
				$category = 'Kitchen & household';
			break;
			case 11:
				$category = 'Jewellery';
			break;
			case 12:
				$category = 'Car Accessories';
			break;
			case 13:
				$category = 'Bike Accessories';
			break;
			case 14:
				$category = 'Mobile Accessories';
			break;
			case 15:
				$category = 'Fitness';
			break;
			case 16:
				$category = 'Bag\'s & Shoes';
			break;
			case 17:
				$category = 'Outdoor';
			break;
			case 18:
				$category = 'Beauty Hair';
			break;
			default:
				$category = '';
			break;        
 			}
 			
      	}else{
      		$category = '';
      	}
      
      	//-- HANDLE FILTER
      	if($request->filter) {
      		$sortSelected = $request->sort;
            $filterSelected = $request->filter;
            $categorySelected = $request->category;
          switch($request->filter){
			case 1:
				$trendingProducts = ProductDetail::where('opportunity_level', 'LIKE' ,'%trending_product%')->whereNull('explore_pro_type')->where('price', '<=' ,'30')->where('category', 'LIKE' ,'%'.$category.'%')->orderBy($orderColumn,'DESC')->paginate(3);
				// dd($trendingProducts);
			break;
			case 2:
				$trendingProducts = ProductDetail::where('opportunity_level', 'LIKE' ,'%trending_product%')->whereNull('explore_pro_type')->where('price', '>' , '30')->orderBy($orderColumn,'DESC')->paginate(3);
			break;
			case 3:
				$trendingProducts = ProductDetail::where('opportunity_level', 'LIKE' ,'%trending_product%')->whereNull('explore_pro_type')->where('profit', '>=' , '15')->orderBy($orderColumn,'DESC')->paginate(3);
			break;
			case 4:
				$trendingProducts = ProductDetail::where('opportunity_level', 'LIKE' ,'%trending_product%')->whereNull('explore_pro_type')->where('cost', '<=' , '20')->orderBy($orderColumn,'DESC')->paginate(3);
			break;
			default:
				$filterBy = 'product_name';
			break;        
 			}
      	}else{

      	}

      	if($request->search) {
      		// dd($request->search);
      		$trendingProducts = ProductDetail::where('opportunity_level', 'LIKE' ,'%trending_product%')->whereNull('explore_pro_type')->where('product_name', 'LIKE', '%'.$request->search.'%')->where('category', 'LIKE' ,'%'.$category.'%')->orderBy($orderColumn,'DESC')->paginate(3);
      	}
      	if (empty($trendingProducts)) {
      		$trendingProducts = ProductDetail::where('opportunity_level', 'LIKE' ,'%trending_product%')->where('category', 'LIKE' ,'%'.$category.'%')->orderBy($orderColumn,'DESC')->paginate(3);
      		
      	}	 	
			
		// $trendingProducts = ProductDetail::where('opportunity_level', 'LIKE' ,'%trending_product%')->get();

		// dd( $trendingProducts );



      	$artilces = '';
        if ($request->ajax()) {
            foreach ($trendingProducts as $result) {
                
                $artilces.=
			'<div class="col-md-4 mt-4">
              <div class="card shadow">

                <div class="row px-2 video-icon">
                  <img src="'.$result->productImage[0]->image_link_1.'" class="card-img-top img-fluid" alt="...">
                  <i class="fas fa-play-circle video-play-icon"></i>
                </div>

                <div class="row card-body px-2">
                  <div class="col-12 pb-1 px-3" style="border-bottom: 2px solid #DCDCDC;">
                    <h5 class="card-title">'.$result->product_name.'</h5>
                  </div>
                  <div class="col-12 px-3">
                    <div class="row">
                      <div class="col-7">
                        <span>Order</span>
                      </div>
                      <div class="col-5 text-right">
                        <span>'.$result->total_order.'</span>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-7">
                        <span>Product Cost</span>
                      </div>
                      <div class="col-5 text-right">
                        <span>$'.$result->cost.'</span>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-7">
                        <span>Selling Price</span>
                      </div>
                      <div class="col-5 text-right">
                        <span>$'.$result->price.'</span>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-7">
                        <span>Profit Margin</span>
                      </div>
                      <div class="col-5 text-right">
                        <span>$'.$result->profit.'</span>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-7">
                        <span>Total Sales</span>
                      </div>
                      <div class="col-5 text-right">
                        <span>$'.$result->total_revenue.'</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row mx-4 px-2 mb-2 justify-content-center rounded icon-btn">
                  <a href="/product-details/'.$result->id.'" type="button" class="btn fb-ads-card-btn">View Product Details</a>
                </div>
              </div>
</div>';
            }
            return $artilces;
        }



		foreach ($trendingProducts as $trendingproduct) {
			$country = $trendingproduct->country.",";

			// echo $country;
		}

			if (empty($country)) {

				return view('user.trending-product',compact('trendingProducts','sortSelected','filterSelected','categorySelected'));

			}else{

				return view('user.trending-product',compact('trendingProducts','country','sortSelected','filterSelected','categorySelected'));
			}

		}else{

	 	return view('auth.login');

	 	}
	}

	public function trendingProductDetails($product_id)
	{

		if(Auth::check()){
			
		$trendingProducts = ProductDetail::where('id', $product_id)
		->get();
		
		foreach ($trendingProducts as $trendingproduct) {
			$country = $trendingproduct->country.",";

			// echo $country;
		}

		if (empty($country)) {

			return view('user.product-details',compact('trendingProducts'));

		}else{

			return view('user.product-details',compact('trendingProducts','country'));

		}
		

		}else{

	 	return view('auth.login');
		}
	}

	public function fbAdProducts(Request $request)
	{
		if(Auth::check()){
			$sortSelected = 0;
            $filterSelected = 0;
            $categorySelected = 0;
		//-- HANDLE SORTING
      	if($request->sort) {
      		$sortSelected = $request->sort;
            $filterSelected = $request->filter;
            $categorySelected = $request->category;
          switch($request->sort){
			case 1:
				$orderColumn = 'profit';
			break;
			case 2:
				$orderColumn = 'total_order';
			break;
			case 3:
				$orderColumn = 'created_at';
			break;
			case 4:
				$orderColumn = 'total_order';
			break;
			case 5:
				$orderColumn = 'total_order';
			break;
			default:
				$orderColumn = 'product_name';
			break;        
 			}
 			
      	}else{
      		$orderColumn = 'created_at';
      	}

      	//-- HANDLE CATEGORY
      	if($request->category) {
      		$sortSelected = $request->sort;
            $filterSelected = $request->filter;
            $categorySelected = $request->category;
          switch($request->category){
			case 1:
				$category = 'Women\'s Fashion';
			break;
			case 2:
				$category = 'Man\'s Fashion';
			break;
			case 3:
				$category = 'Health & Beauty';
			break;
			case 4:
				$category = 'Home Improvement';
			break;
			case 5:
				$category = 'Garden Improvement';
			break;
			case 6:
				$category = 'Pet Accessories';
			break;
			case 7:
				$category = 'Electronics';
			break;
			case 8:
				$category = 'Computer Accessories';
			break;
			case 9:
				$category = 'Baby & Kids';
			break;
			case 10:
				$category = 'Kitchen & household';
			break;
			case 11:
				$category = 'Jewellery';
			break;
			case 12:
				$category = 'Car Accessories';
			break;
			case 13:
				$category = 'Bike Accessories';
			break;
			case 14:
				$category = 'Mobile Accessories';
			break;
			case 15:
				$category = 'Fitness';
			break;
			case 16:
				$category = 'Bag\'s & Shoes';
			break;
			case 17:
				$category = 'Outdoor';
			break;
			case 18:
				$category = 'Beauty Hair';
			break;
			default:
				$category = '';
			break;        
 			}
 			
      	}else{
      		$category = '';
      	}
      
      	//-- HANDLE FILTER
      	if($request->filter) {
      		$sortSelected = $request->sort;
            $filterSelected = $request->filter;
            $categorySelected = $request->category;
          switch($request->filter){
			case 1:
				$trendingProducts = ProductDetail::where('opportunity_level', 'LIKE' ,'%facebook_ads%')->whereNull('explore_pro_type')->where('price', '<=' ,'30')->where('category', 'LIKE' ,'%'.$category.'%')->orderBy($orderColumn,'DESC')->paginate(3);
				// dd($trendingProducts);
			break;
			case 2:
				$trendingProducts = ProductDetail::where('opportunity_level', 'LIKE' ,'%facebook_ads%')->whereNull('explore_pro_type')->where('price', '>=' , '30')->orderBy($orderColumn,'DESC')->paginate(3);
			break;
			case 3:
				$trendingProducts = ProductDetail::where('opportunity_level', 'LIKE' ,'%facebook_ads%')->whereNull('explore_pro_type')->where('profit', '>=' , '15')->orderBy($orderColumn,'DESC')->paginate(3);
			break;
			case 4:
				$trendingProducts = ProductDetail::where('opportunity_level', 'LIKE' ,'%facebook_ads%')->whereNull('explore_pro_type')->where('cost', '<=' , '20')->orderBy($orderColumn,'DESC')->paginate(3);
			break;
			default:
				$filterBy = 'product_name';
			break;        
 			}
      	}else{

      	}

      	if($request->search) {
      		// dd($request->search);
      		$trendingProducts = ProductDetail::where('opportunity_level', 'LIKE' ,'%facebook_ads%')->whereNull('explore_pro_type')->where('product_name', 'LIKE', '%'.$request->search.'%')->where('category', 'LIKE' ,'%'.$category.'%')->orderBy($orderColumn,'DESC')->paginate(3);
      	}
      	if (empty($trendingProducts)) {
      		$trendingProducts = ProductDetail::where('opportunity_level', 'LIKE' ,'%facebook_ads%')->whereNull('explore_pro_type')->where('category', 'LIKE' ,'%'.$category.'%')->orderBy($orderColumn,'DESC')->paginate(3);
      	}
			
		// $trendingProducts = ProductDetail::where('opportunity_level', 'LIKE' ,'%facebook_ads%')->get();
		


      	$artilces = '';
        if ($request->ajax()) {
            
				$j=0;	
            foreach ($trendingProducts as $result) {

				$j++;	
								$date1 = new DateTime("now");

								$date2 = date_create($result->created_at);

								$diff = date_diff($date1,$date2);

								$month = $diff->m;                 
								$day = $diff->d;                 
								$hour = $diff->h;
								$minute = $diff->i;






								$boom = 0;
								if (!empty($result->productLink[0]->competitor_link_1)){
								   $boom = $result->productLink[0]->competitor_link_1;
								 }
								if(!empty($result->productLink[0]->competitor_link_2)){
								 if(!empty($boom)){
								   $boom = $boom.",".$result->productLink[0]->competitor_link_2;
								 }else{
								   $boom = $result->productLink[0]->competitor_link_2;
								 }
								}
								if (!empty($result->productLink[0]->competitor_link_3)){
								 if(!empty($boom)){
								   $boom = $boom.",".$result->productLink[0]->competitor_link_3;
								 }else{
								   $boom = $result->productLink[0]->competitor_link_3;
								 }
								}
								if (!empty($result->productLink[0]->competitor_link_4)){
								 if(!empty($boom)){
								   $boom = $boom.",".$result->productLink[0]->competitor_link_4;
								 }else{
								   $boom = $result->productLink[0]->competitor_link_4;
								 }
								}
								if (!empty($result->productLink[0]->competitor_link_5)){
								 if(!empty($boom)){
								   $boom = $boom.",".$result->productLink[0]->competitor_link_5;
								 }else{
								   $boom = $result->productLink[0]->competitor_link_5;
								 }
								}
								$files = explode(',', $boom);

								// dd($files);

								if(empty($files)){
								$shopifyStores = '<p>Not currently selling on any Shopify store</p>';
								}else{
								$shopifyStores = '<p>Selling on '.count($files).' Shopify store</p>';
								}



								$webLinks = '';
								if (!empty($files)) {
								  foreach ($files as $link) {
								    $split1 = explode(".com",$link);
								    $webLinks .= '<a href="'.$link.'" target="_blank"><p><img src="http://ecomfia.com/assets/img/web-icon.png" style="width: 20px; margin-top: -6px;" alt="">  '. $split1[0].'com...  </p></a>';
								  }
								  
								}
                            

                $ageS = $result->age;
                $ageS = explode(',', $ageS);
                $ages = '';

								foreach($ageS as $age){
									$ages .= '<p class="mt-2">
                              '.$age.'; <br>
                            </p>';

								}




               	$genderS = $result->gender;
               	$genderS = explode(',', $genderS);

               	$genders = '';
								foreach($genderS as $gender){
									$genders .= '<p class="mt-2">
                              '.$gender.'; <br>
                            </p>';

								}


								$countrys = $result->country;
								// dd($countrys);
								$countrys = explode(",", $countrys);


								$countryS = '';
								foreach($countrys as $country){
									$countryS .= '<p><img src="http://ecomfia.com/assets/img/web-path.png" style="width: 20px; margin-top: -6px;" alt=""> '.$country.'</p>';
								}

								$desc = $result->description;

									$gifs = '';
								
								if (!empty($result->productImage[0]->gif_1)){
								   $gifs .= $result->productImage[0]->gif_1;
								 }
								if(!empty($result->productImage[0]->gif_2)){
								 if(!empty($gifs)){
								   $gifs .= $gifs.",".$result->productImage[0]->gif_2;
								 }else{
								   $gifs .= $result->productImage[0]->gif_2;
								 }
								}
								if (!empty($result->productImage[0]->gif_3)){
								 if(!empty($gifs)){
								   $gifs .= $gifs.",".$result->productImage[0]->gif_3;
								 }else{
								   $gifs .= $result->productImage[0]->gif_3;
								 }
								}
    						// dd($gifs);

								if(!empty($gifs)){

                $downloadButton =  '<div class="mb-2 float-right">
                    <p class="d-inline-block" style="font-size: 13px;">Download Gif Images</p>
                    <button class="btn-download" value="download">
                    <a href="http://ecomfia.com/downloadGIF/'.$gifs.'">Download</a></button>
                 </div>';
								}else{
									$downloadButton = "";
								}

								
                $linkToDetailsPage = url("/product-details/{$result->id}");

								$product_id = $result->id;

					      $artilces.=
								'<div class="col-md-4 mt-4">
                        <div class="card shadow" style="min-width: 280px;">
                           <div class="row px-2" data-toggle="modal" data-target="#modal_demo'.$result->id.'">
                              <div class="col-12 p-0 video-icon">
                                 <img src="'.$result->productImage[0]->image_link_1.'" class="card-img-top img-fluid" alt="..." style="max-height:300px;">
                                 <i class="fas fa-play-circle video-play-icon"></i>
                              </div>
                              <div class="col-12 mt-4 pb-1 px-3" style="border-bottom: 2px solid #DCDCDC;">
                                 <h5 class="card-title">'.$result->product_name.'</h5>
                              </div>
                           </div>
                           <div class="row card-body pt-0 px-2">
                              <div class="col-12 px-3">
                                 <div class="row">
                                    <div class="col-7">
                                       <span>Order</span>
                                    </div>
                                    <div class="col-5 text-right">
                                       <span>'.$result->total_order.'</span>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-7">
                                       <span>Product Cost</span>
                                    </div>
                                    <div class="col-5 text-right">
                                       <span>$'.$result->cost.'</span>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-7">
                                       <span>Selling Price</span>
                                    </div>
                                    <div class="col-5 text-right">
                                       <span>$'.$result->price.'</span>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-7">
                                       <span>Profit Margin</span>
                                    </div>
                                    <div class="col-5 text-right">
                                       <span>$'.$result->profit.'</span>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-7">
                                       <span>Total Sales</span>
                                    </div>
                                    <div class="col-5 text-right">
                                       <span>$'.$result->total_revenue.'</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="row mx-4 px-2 mb-2 rounded justify-content-between icon-btn">
                              <a href="'.$result->productLink[0]->facebook_ad.'" class="fb-ads-card-footer"><img src="http://ecomfia.com/assets/img/fb-2.png" style="width: 20px; margin: 0 5px 2px 5px;" alt=""></a>
                              <a href="'.$result->productLink[0]->aliexpress.'" class="fb-ads-card-footer"><img src="http://ecomfia.com/assets/img/ali.png" style="width: 20px; margin: 0 5px 2px 5px;" alt=""></a>
                              <a href="'.$result->productLink[0]->amazon.'" class="fb-ads-card-footer"><img src="http://ecomfia.com/assets/img/amz.png" style="width: 20px; margin: 0 5px 2px 5px;" alt=""></a>
                              <a href="'.$result->productLink[0]->competitor_link_1.'" class="fb-ads-card-footer"><img src="http://ecomfia.com/assets/img/shp.png" style="width: 20px; margin: 0 5px 2px 5px;" alt=""></a>
                              <a href="'.$result->productLink[0]->youtube.'" class="fb-ads-card-footer"><i class="fab fa-youtube" style="color: #FF0000; font-size: 26px;margin: 0 5px;"></i></a>
                           </div>
                           <div class="modal fade" id="modal_demo'.$result->id.'" tabindex="-1" role="dialog" aria-labelledby="modal_demo'.$result->id.'" aria-hidden="true">
                              <div class="modal-dialog" role="document" style="max-width:80%; margin: auto;">
                                 <div class="modal-content">
                                    <div class="modal-header">
                                       <h5 class="modal-title pl-2" id="UntappedModalLabel">'.$result->product_name.'</h5>
                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                       <span aria-hidden="true">&times;</span>
                                       </button>
                                    </div>
                                    <div class="row uptapped-active-found">
                                       <p>Found '.$diff->m.' Month '.$diff->d.' Days '.$diff->h.' Hours '.$diff->i.' Minutes ago</p>
                                    </div>
                                    <div class="modal-body untapped-p-modal pt-1">
                                       <div class="row pt-2">
                                          <div class="col-lg-4">
                                             <div class="row mx-1 mb-4">
                                                <div class="col-12">
                                                   <div class="slickslider">
                                                      <div>
                                                         <div class="product-video-container embed-responsive embed-responsive-16by9">
                                                            <i class="fas fa-play-circle video-icon-play"></i>
                                                            <i class="fas fa-pause-circle video-icon-pause" style="display: none;"></i>
                                                            <video id="video-control" controls>
                                                               <source src="'.$result->productImage[0]->video_link.'" type="video/mp4">
                                                            </video>
                                                         </div>
                                                      </div>
                                                      <div>
                                                         <img src="'.$result->productImage[0]->image_link_1.'" class="img-fluid" alt="">
                                                      </div>
                                                      <div>
                                                         <img src="'.$result->productImage[0]->image_link_2.'" class="img-fluid" alt="">
                                                      </div>
                                                      <div>
                                                         <img src="'.$result->productImage[0]->image_link_3.'" class="img-fluid" alt="">
                                                      </div>
                                                      <div>
                                                         <img src="'.$result->productImage[0]->image_link_4.'" class="img-fluid" alt="">
                                                      </div>
                                                      <div>
                                                         <img src="'.$result->productImage[0]->image_link_5.'" class="img-fluid" alt="">
                                                      </div>
                                                   </div>
                                                   <div class="slider-nav my-3">
                                                      <img src="'.$result->productImage[0]->video_link.'" alt="">
                                                      <img src="'.$result->productImage[0]->image_link_1.'" alt="">
                                                      <img src="'.$result->productImage[0]->image_link_2.'" alt="">
                                                      <img src="'.$result->productImage[0]->image_link_3.'" alt="">
                                                      <img src="'.$result->productImage[0]->image_link_4.'" alt="">
                                                      <img src="'.$result->productImage[0]->image_link_5.'" alt="">
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-lg-8">
                                             <div class="row mx-1">
                                                <div class="col-12">
                                                   <div class="shadow bg-white rounded">
                                                      <table class="table table-borderless untapped-p-table table-responsive">
                                                         <thead>
                                                            <tr>
                                                               <th>Order</th>
                                                               <th>Product Cost</th>
                                                               <th>Selling Price</th>
                                                               <th>Profit</th>
                                                               <th>Total Sales</th>
                                                            </tr>
                                                         </thead>
                                                         <tbody>
                                                            <tr>
                                                               <th>'.$result->total_order.'</th>
                                                               <th>$'.$result->cost.'</th>
                                                               <th>$'.$result->price.'</th>
                                                               <th>$'.$result->profit.'</th>
                                                               <th>$'.$result->total_revenue.'</th>
                                                            </tr>
                                                         </tbody>
                                                      </table>
                                                   </div>
                                                   <div class="shadow bg-white rounded p-3">
                                                      <div class="row">
                                                            <div class="col-md-6">
                                                               <div class="row pl-2 selling-sc">
                                                               '.$shopifyStores.'
                                                               </div>
                                                               <div class="row selling-store">
                                                                  <div class="col-12">
																	'.$webLinks.'
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <div class="col-sm-6 col-md-6 selling-country pl-3" style="max-width: 500%;">
                                                               <div class="row pl-2 selling-sc">
                                                                <p>Selling Country</p>
                                                               </div>
                                                               <div class="row selling-store">
                                                                  <div class="col-12">
                                                                  '.$countryS.'
                                                                  </div>
                                                               </div>
                                                            </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="row mt-4">
                                          <div class="col-lg-4">
                                             <div class="row mx-2">
                                                <div class="col-12 shadow bg-white border-rounded mb-4">
                                                   <ul class="list-group list-group-flush py-3 list-unstyled prm-list">
                                                      <li><a class="list-group-item rounded my-1" href="'.$result->productLink[0]->competitor_link_1.'" role="tab"><i class="fas fa-store-alt"></i> Visit Competitor Store</a></li>
                                                      <li><a class="list-group-item rounded my-1" href="'.$result->productLink[0]->aliexpress.'" role="tab"><img src="http://ecomfia.com/assets/img/ali.png" style="width: 12px; margin-bottom: 2px;" alt=""> Visit AliExpress Source</a></li>
                                                      <li><a class="list-group-item rounded my-1" href="'.$result->productLink[0]->amazon.'" role="tab"><i class="fab fa-amazon"></i> View Product On Amazon</a></li>
                                                      <li><a class="list-group-item rounded my-1" href="'.$result->productLink[0]->ebay.'" role="tab"><i class="fab fa-ebay"></i> View Product On eBay</a></li>
                                                      <li><a class="list-group-item rounded my-1" href="'.$result->productLink[0]->facebook_ad.'" role="tab"><i class="fab fa-facebook"></i> View Facebook Ads</a></li>
                                                      <li><a class="list-group-item rounded my-1" href="'.$result->productLink[0]->youtube.'" role="tab"><i class="fab fa-youtube"></i> View YouTube Review</a></li>
                                                   </ul>
                                                   <div class="slider2">
                                                      <div>
                                                         <img src="https://ecomfia.com/storage/app/public/'.$result->productImage[0]->gif_1.'" class="img-fluid" alt="">
                                                      </div>
                                                      <div>
                                                         <img src="https://ecomfia.com/storage/app/public/'.$result->productImage[0]->gif_2.'" class="img-fluid" alt="">
                                                      </div>
                                                      <div>
                                                         <img src="https://ecomfia.com/storage/app/public/'.$result->productImage[0]->gif_3.'" class="img-fluid" alt="">
                                                      </div>
                                                   </div>
                                                   <div class="slider-nav2 my-2 justify-content-between">
                                                      <img src="https://ecomfia.com/storage/app/public/'.$result->productImage[0]->gif_1.'" class="img-fluid" alt="">
                                                      <img src="https://ecomfia.com/storage/app/public/'.$result->productImage[0]->gif_2.'" class="img-fluid" alt="">
                                                      <img src="https://ecomfia.com/storage/app/public/'.$result->productImage[0]->gif_3.'" class="img-fluid" alt="">
                                                   </div>
                                                   '.$downloadButton.'
                                                </div>
                                                
                                             </div>
                                          </div>
              <div class="col-lg-8 tab-content">
               <div class="row mb-2 mx-2">
                  <div class="tab-pane fade show active" role="tabpanel">
                    <ul class="nav nav-tabs modal-tab nav-justified shadow" role="tablist">
                      <li class="nav-item plan-tab" role="presentation">
                        <a class="nav-link active" data-toggle="tab" href="#tab'.$result->id.'" style="font-size: 13px;" role="tab">Product Description</a>
                      </li>
                      <li class="nav-item plan-tab" role="presentation">
                        <a class="nav-link nav-link-show-1" data-toggle="tab" href="#far'.$result->id.'" style="font-size: 13px;" role="tab">Facebook Audience Research</a>
                      </li>
                    </ul>
                    <div class="tab-content pr-modal-tab bg-white shadow">
                      <div class="tab-pane fade show active pb-3" id="tab'.$result->id.'" role="tabpanel">
                        <div class="row mx-3 pt-3 plan-header">
                            <p>'.$result->description.'</p>
                        </div>
                      </div>
                      <div class="tab-pane pb-3 fade" id="far'.$result->id.'" role="tabpanel">
                        <div class="row mx-3 pt-3 plan-header">
                          <div class="col-md-6">
                            <div class="far-video-hedear">
                              <h3>Facebook video ads</h3>
                              <button type="button" class="btn far-download-btn">Download</button>
                            </div>
                            <div class="product-video-container embed-responsive embed-responsive-16by9">
                              
                              <video id="video-control-2" controls>
                                <source src="https://ecomfia.com/storage/app/public/'.$result->video_name.'" type="video/mp4">
                              </video>
                            </div>
                          </div>
                          <div class="col-6">
                            <div class="far-all-hedear mb-3">
                              <h3>Facebook Content</h3>
                            </div>
                            <div class="far-fb-content-text shadow-sm">
                              <p class="far-fb-text">'.$result->content.'</p>
                            </div>
                          </div>
                        </div>
                        
                        <div class="row m-2 p-2">
                          <div class="col-6 far-all-hedear">
                            <h3>Targeting Age</h3>
                            <div class="far-age-target-content shadow-sm">
                              <p>This ads on facebook & other social media targeted age range below.</p>
                              '.$ages.'
                            </div>
                          </div>
                           
                          <div class="col-6 far-all-hedear">
                            <h3>Targeting Gender</h3>
                            <div class="far-genter-content shadow-sm">
                              <p>This ads on facebook & other social media targeted gender below.</p>
                              .'.$genders.'
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
               </div>
            	</div>
                                       </div>
                                       <div class="row">
                                          <div class="col-12 modal-footer px-0 mt-2">
                                             <button type="button" class="btn btn-modal-cancel" data-dismiss="modal">Cancel</button>
                                             <a href="http://ecomfia.com/product-details/'.$product_id.'" type="button" class="btn btn-modal-product">View Product</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
   </div>
   





								';
								
			      }
  					return $artilces;
        }


		foreach ($trendingProducts as $trendingproduct) {
			
			$country = $trendingproduct->country.",";

		}


			if (empty($country)) {

				return view('user.practice-fb-ads-product',compact('trendingProducts','sortSelected','filterSelected','categorySelected'));

			}else{

				return view('user.practice-fb-ads-product',compact('trendingProducts','country','sortSelected','filterSelected','categorySelected'));

			}
		

		}else{

	 	return view('auth.login');

	 	}
	}

	public function fbAdProductsDetails($product_id)
	{

		if(Auth::check()){
			
		$trendingProducts = ProductDetail::where('opportunity_level', 'LIKE' ,'%facebook_ads%')
		->where('id', $product_id)
		->get();
		
		foreach ($trendingProducts as $trendingproduct) {
			$country = $trendingproduct->country.",";

		}

		return view('user.product-details',compact('trendingProducts','country'));

		}else{

	 	return view('auth.login');
		}
	}

	public function untappedProducts(Request $request)
	{
		if(Auth::check()){
			$sortSelected = 0;
            $filterSelected = 0;
            $categorySelected = 0;
		//-- HANDLE SORTING
      	if($request->sort) {
      		$sortSelected = $request->sort;
            $filterSelected = $request->filter;
            $categorySelected = $request->category;
          switch($request->sort){
			case 1:
				$orderColumn = 'profit';
			break;
			case 2:
				$orderColumn = 'total_order';
			break;
			case 3:
				$orderColumn = 'created_at';
			break;
			case 4:
				$orderColumn = 'total_order';
			break;
			case 5:
				$orderColumn = 'total_order';
			break;
			default:
				$orderColumn = 'product_name';
			break;        
 			}
 			
      	}else{
      		$orderColumn = 'created_at';
      	}

      	//-- HANDLE CATEGORY
      	if($request->category) {
      		$sortSelected = $request->sort;
            $filterSelected = $request->filter;
            $categorySelected = $request->category;
          switch($request->category){
			case 1:
				$category = 'Women\'s Fashion';
			break;
			case 2:
				$category = 'Man\'s Fashion';
			break;
			case 3:
				$category = 'Health & Beauty';
			break;
			case 4:
				$category = 'Home Improvement';
			break;
			case 5:
				$category = 'Garden Improvement';
			break;
			case 6:
				$category = 'Pet Accessories';
			break;
			case 7:
				$category = 'Electronics';
			break;
			case 8:
				$category = 'Computer Accessories';
			break;
			case 9:
				$category = 'Baby & Kids';
			break;
			case 10:
				$category = 'Kitchen & household';
			break;
			case 11:
				$category = 'Jewellery';
			break;
			case 12:
				$category = 'Car Accessories';
			break;
			case 13:
				$category = 'Bike Accessories';
			break;
			case 14:
				$category = 'Mobile Accessories';
			break;
			case 15:
				$category = 'Fitness';
			break;
			case 16:
				$category = 'Bag\'s & Shoes';
			break;
			case 17:
				$category = 'Outdoor';
			break;
			case 18:
				$category = 'Beauty Hair';
			break;
			default:
				$category = '';
			break;        
 			}
 			
      	}else{
      		$category = '';
      	}
      
      	//-- HANDLE FILTER
      	if($request->filter) {
      		$sortSelected = $request->sort;
            $filterSelected = $request->filter;
            $categorySelected = $request->category;
          switch($request->filter){
			case 1:
				$trendingProducts = ProductDetail::where('opportunity_level', 'LIKE' ,'%untapped_product%')->whereNull('explore_pro_type')->where('price', '<=' ,'30')->where('category', 'LIKE' ,'%'.$category.'%')->orderBy($orderColumn,'DESC')->paginate(3);
				// dd($trendingProducts);
			break;
			case 2:
				$trendingProducts = ProductDetail::where('opportunity_level', 'LIKE' ,'%untapped_product%')->whereNull('explore_pro_type')->where('price', '>=' , '30')->orderBy($orderColumn,'DESC')->paginate(3);
			break;
			case 3:
				$trendingProducts = ProductDetail::where('opportunity_level', 'LIKE' ,'%untapped_product%')->whereNull('explore_pro_type')->where('profit', '>=' , '15')->orderBy($orderColumn,'DESC')->paginate(3);
			break;
			case 4:
				$trendingProducts = ProductDetail::where('opportunity_level', 'LIKE' ,'%untapped_product%')->whereNull('explore_pro_type')->where('cost', '<=' , '20')->orderBy($orderColumn,'DESC')->paginate(3);
			break;
			default:
				$filterBy = 'product_name';
			break;        
 			}
      	}else{

      	}

      	if($request->search) {
      		// dd($request->search);
      		$trendingProducts = ProductDetail::where('opportunity_level', 'LIKE' ,'%untapped_product%')->whereNull('explore_pro_type')->where('product_name', 'LIKE', '%'.$request->search.'%')->where('category', 'LIKE' ,'%'.$category.'%')->orderBy($orderColumn,'DESC')->paginate(3);
      	}
      	if (empty($trendingProducts)) {
      		$trendingProducts = ProductDetail::where('opportunity_level', 'LIKE' ,'%untapped_product%')->whereNull('explore_pro_type')->where('category', 'LIKE' ,'%'.$category.'%')->orderBy($orderColumn,'DESC')->paginate(3);
      	}
      	
	    // $trendingProducts = ProductDetail::where('opportunity_level', 'LIKE' ,'%untapped_product%')->where($filterBy)->orderBy($orderColumn,'DESC')->paginate(5);
	    // dd($trendingProducts);

		// $trendingProducts = ProductDetail::where('opportunity_level', 'LIKE' ,'%untapped_product%')->get();

		// dd( $trendingProducts );
		
		
		      	$artilces = '';
        if ($request->ajax()) {
				$j=0;	
            foreach ($trendingProducts as $result) {

				$j++;	
								$date1 = new DateTime("now");

								$date2 = date_create($result->created_at);

								$diff = date_diff($date1,$date2);

								$month = $diff->m;                 
								$day = $diff->d;                 
								$hour = $diff->h;
								$minute = $diff->i;






								$boom = 0;
								if (!empty($result->productLink[0]->competitor_link_1)){
								   $boom = $result->productLink[0]->competitor_link_1;
								 }
								if(!empty($result->productLink[0]->competitor_link_2)){
								 if(!empty($boom)){
								   $boom = $boom.",".$result->productLink[0]->competitor_link_2;
								 }else{
								   $boom = $result->productLink[0]->competitor_link_2;
								 }
								}
								if (!empty($result->productLink[0]->competitor_link_3)){
								 if(!empty($boom)){
								   $boom = $boom.",".$result->productLink[0]->competitor_link_3;
								 }else{
								   $boom = $result->productLink[0]->competitor_link_3;
								 }
								}
								if (!empty($result->productLink[0]->competitor_link_4)){
								 if(!empty($boom)){
								   $boom = $boom.",".$result->productLink[0]->competitor_link_4;
								 }else{
								   $boom = $result->productLink[0]->competitor_link_4;
								 }
								}
								if (!empty($result->productLink[0]->competitor_link_5)){
								 if(!empty($boom)){
								   $boom = $boom.",".$result->productLink[0]->competitor_link_5;
								 }else{
								   $boom = $result->productLink[0]->competitor_link_5;
								 }
								}
								$files = explode(',', $boom);

								

								if(empty($files)){
								$shopifyStores = '<p>Not currently selling on any Shopify store</p>';
								}else{
								$shopifyStores = '<p>Selling on '.count($files).' Shopify store</p>';
								}



								$webLinks = '';
								if (!empty($files)) {
								  foreach ($files as $link) {
								    $split1 = explode(".com",$link);
								    $webLinks .= '<a href="'.$link.'" target="_blank"><p><img src="http://ecomfia.com/assets/img/web-icon.png" style="width: 20px; margin-top: -6px;" alt="">  '. $split1[0].'com... </p></a>';
								  }
								}

								
								$desc = $result->description;


								$countrys = $result->country;
								$countrys = explode(",", $countrys);


								$countryS = '';
								foreach($countrys as $country){
									$countryS .= '<p><img src="http://ecomfia.com/assets/img/web-path.png" style="width: 20px; margin-top: -6px;" alt=""> '.$country.'</p>';
								}


								$ageS = $result->age;
                $ageS = explode(',', $ageS);
                $ages = '';

								foreach($ageS as $age){
									$ages .= '<p class="mt-2">
                              '.$age.'; <br>
                            </p>';

								}

               	$genderS = $result->gender;
               	$genderS = explode(',', $genderS);

               	$genders = '';
								foreach($genderS as $gender){
									$genders .= '<p class="mt-2">
                              '.$gender.'; <br>
                            </p>';

								}

                                
									$gifs = '';
								
								if (!empty($result->productImage[0]->gif_1)){
								   $gifs .= $result->productImage[0]->gif_1;
								 }
								if(!empty($result->productImage[0]->gif_2)){
								 if(!empty($gifs)){
								   $gifs .= $gifs.",".$result->productImage[0]->gif_2;
								 }else{
								   $gifs .= $result->productImage[0]->gif_2;
								 }
								}
								if (!empty($result->productImage[0]->gif_3)){
								 if(!empty($gifs)){
								   $gifs .= $gifs.",".$result->productImage[0]->gif_3;
								 }else{
								   $gifs .= $result->productImage[0]->gif_3;
								 }
								}
    // dd($gifs);
								if(!empty($gifs)){

								$downloadButton =  '<div class="mb-2 float-right">
                    <p class="d-inline-block" style="font-size: 13px;">Download Gif Images</p>
                    <button class="btn-download" value="download">
                    <a href="http://ecomfia.com/downloadGIF/'.$gifs.'">Download</a></button>
                 </div>';
								}else{
									$downloadButton = "";
								}
								
                                           
                $linkToDetailsPage = url("/product-details/{$result->id}");
                                
								$product_id = $result->id;

					      $artilces.=
								'<div class="col-md-4 mt-4">
                        <div class="card shadow" style="min-width: 280px;">
                           <div class="row px-2" data-toggle="modal" data-target="#modal_demo'.$product_id.'">
                              <div class="col-12 p-0 video-icon">
                                 <img src="'.$result->productImage[0]->image_link_1.'" class="card-img-top img-fluid" alt="..." style="max-height:300px;">
                                 <i class="fas fa-play-circle video-play-icon"></i>
                              </div>
                              <div class="col-12 mt-4 pb-1 px-3" style="border-bottom: 2px solid #DCDCDC;">
                                 <h5 class="card-title">'.$result->product_name.'</h5>
                              </div>
                           </div>
                           <div class="row card-body pt-0 px-2">
                              <div class="col-12 px-3">
                                 <div class="row">
                                    <div class="col-7">
                                       <span>Order</span>
                                    </div>
                                    <div class="col-5 text-right">
                                       <span>'.$result->total_order.'</span>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-7">
                                       <span>Product Cost</span>
                                    </div>
                                    <div class="col-5 text-right">
                                       <span>$'.$result->cost.'</span>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-7">
                                       <span>Selling Price</span>
                                    </div>
                                    <div class="col-5 text-right">
                                       <span>$'.$result->price.'</span>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-7">
                                       <span>Profit Margin</span>
                                    </div>
                                    <div class="col-5 text-right">
                                       <span>$'.$result->profit.'</span>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-7">
                                       <span>Total Sales</span>
                                    </div>
                                    <div class="col-5 text-right">
                                       <span>$'.$result->total_revenue.'</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="row mx-4 px-2 mb-2 rounded justify-content-between icon-btn">
                              <a href="'.$result->productLink[0]->facebook_ad.'" class="fb-ads-card-footer"><img src="http://ecomfia.com/assets/img/fb-2.png" style="width: 20px; margin: 0 5px 2px 5px;" alt=""></a>
                              <a href="'.$result->productLink[0]->aliexpress.'" class="fb-ads-card-footer"><img src="http://ecomfia.com/assets/img/ali.png" style="width: 20px; margin: 0 5px 2px 5px;" alt=""></a>
                              <a href="'.$result->productLink[0]->amazon.'" class="fb-ads-card-footer"><img src="http://ecomfia.com/assets/img/amz.png" style="width: 20px; margin: 0 5px 2px 5px;" alt=""></a>
                              <a href="'.$result->productLink[0]->competitor_link_1.'" class="fb-ads-card-footer"><img src="http://ecomfia.com/assets/img/shp.png" style="width: 20px; margin: 0 5px 2px 5px;" alt=""></a>
                              <a href="'.$result->productLink[0]->youtube.'" class="fb-ads-card-footer"><i class="fab fa-youtube" style="color: #FF0000; font-size: 26px;margin: 0 5px;"></i></a>
                           </div>
                           <div class="modal fade" id="modal_demo'.$product_id.'" tabindex="-1" role="dialog" aria-labelledby="modal_demo'.$product_id.'" aria-hidden="true">
                              <div class="modal-dialog" role="document" style="max-width:80%; margin: auto;">
                                 <div class="modal-content">
                                    <div class="modal-header">
                                       <h5 class="modal-title pl-2" id="UntappedModalLabel">'.$result->product_name.'</h5>
                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                       <span aria-hidden="true">&times;</span>
                                       </button>
                                    </div>
                                    <div class="row uptapped-active-found">
                                       <p>Found '.$diff->m.' Month '.$diff->d.' Days '.$diff->h.' Hours '.$diff->i.' Minutes ago</p>
                                    </div>
                                    <div class="modal-body untapped-p-modal pt-1">
                                       <div class="row pt-2">
                                          <div class="col-lg-4">
                                             <div class="row mx-1 mb-4">
                                                <div class="col-12">
                                                   <div class="slickslider">
                                                      <div>
                                                         <div class="product-video-container embed-responsive embed-responsive-16by9">
                                                            <i class="fas fa-play-circle video-icon-play"></i>
                                                            <i class="fas fa-pause-circle video-icon-pause" style="display: none;"></i>
                                                            <video id="video-control" controls>
                                                               <source src="'.$result->productImage[0]->video_link.'" type="video/mp4">
                                                            </video>
                                                         </div>
                                                      </div>
                                                      <div>
                                                         <img src="'.$result->productImage[0]->image_link_1.'" class="img-fluid" alt="">
                                                      </div>
                                                      <div>
                                                         <img src="'.$result->productImage[0]->image_link_2.'" class="img-fluid" alt="">
                                                      </div>
                                                      <div>
                                                         <img src="'.$result->productImage[0]->image_link_3.'" class="img-fluid" alt="">
                                                      </div>
                                                      <div>
                                                         <img src="'.$result->productImage[0]->image_link_4.'" class="img-fluid" alt="">
                                                      </div>
                                                      <div>
                                                         <img src="'.$result->productImage[0]->image_link_5.'" class="img-fluid" alt="">
                                                      </div>
                                                   </div>
                                                   <div class="slider-nav my-3">
                                                      <img src="'.$result->productImage[0]->video_link.'" alt="">
                                                      <img src="'.$result->productImage[0]->image_link_1.'" alt="">
                                                      <img src="'.$result->productImage[0]->image_link_2.'" alt="">
                                                      <img src="'.$result->productImage[0]->image_link_3.'" alt="">
                                                      <img src="'.$result->productImage[0]->image_link_4.'" alt="">
                                                      <img src="'.$result->productImage[0]->image_link_5.'" alt="">
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-lg-8">
                                             <div class="row mx-1">
                                                <div class="col-12">
                                                   <div class="shadow bg-white rounded">
                                                      <table class="table table-borderless untapped-p-table table-responsive">
                                                         <thead>
                                                            <tr>
                                                               <th>Order</th>
                                                               <th>Product Cost</th>
                                                               <th>Selling Price</th>
                                                               <th>Profit</th>
                                                               <th>Total Sales</th>
                                                            </tr>
                                                         </thead>
                                                         <tbody>
                                                            <tr>
                                                               <th>'.$result->total_order.'</th>
                                                               <th>$'.$result->cost.'</th>
                                                               <th>$'.$result->price.'</th>
                                                               <th>$'.$result->profit.'</th>
                                                               <th>$'.$result->total_revenue.'</th>
                                                            </tr>
                                                         </tbody>
                                                      </table>
                                                   </div>
                                                   <div class="shadow bg-white rounded p-3">
                                                      <div class="row">
                                                            <div class="col-md-6">
                                                               <div class="row pl-2 selling-sc">
                                                               '.$shopifyStores.'
                                                               </div>
                                                               <div class="row selling-store">
                                                                  <div class="col-12">
																	'.$webLinks.'
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <div class="col-sm-6 col-md-6 selling-country pl-3" style="max-width: 500%;">
                                                               <div class="row pl-2 selling-sc">
                                                                <p>Selling Country</p>
                                                               </div>
                                                               <div class="row selling-store">
                                                                  <div class="col-12">
                                                                  '.$countryS.'
                                                                  </div>
                                                               </div>
                                                            </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="row mt-4">
                                          <div class="col-lg-4">
                                             <div class="row mx-2">
                                                <div class="col-12 shadow bg-white border-rounded mb-4">
                                                   <ul class="list-group list-group-flush py-3 list-unstyled prm-list">
                                                      <li><a class="list-group-item rounded my-1" href="'.$result->productLink[0]->competitor_link_1.'" role="tab"><i class="fas fa-store-alt"></i> Visit Competitor Store</a></li>
                                                      <li><a class="list-group-item rounded my-1" href="'.$result->productLink[0]->aliexpress.'" role="tab"><img src="http://ecomfia.com/assets/img/ali.png" style="width: 12px; margin-bottom: 2px;" alt=""> Visit AliExpress Source</a></li>
                                                      <li><a class="list-group-item rounded my-1" href="'.$result->productLink[0]->amazon.'" role="tab"><i class="fab fa-amazon"></i> View Product On Amazon</a></li>
                                                      <li><a class="list-group-item rounded my-1" href="'.$result->productLink[0]->ebay.'" role="tab"><i class="fab fa-ebay"></i> View Product On eBay</a></li>
                                                      <li><a class="list-group-item rounded my-1" href="'.$result->productLink[0]->facebook_ad.'" role="tab"><i class="fab fa-facebook"></i> View Facebook Ads</a></li>
                                                      <li><a class="list-group-item rounded my-1" href="'.$result->productLink[0]->youtube.'" role="tab"><i class="fab fa-youtube"></i> View YouTube Review</a></li>
                                                   </ul>
                                                   <div class="slider2">
                                                      <div>
                                                         <img src="https://ecomfia.com/storage/app/public/'.$result->productImage[0]->gif_1.'" class="img-fluid" alt="">
                                                      </div>
                                                      <div>
                                                         <img src="https://ecomfia.com/storage/app/public/'.$result->productImage[0]->gif_2.'" class="img-fluid" alt="">
                                                      </div>
                                                      <div>
                                                         <img src="https://ecomfia.com/storage/app/public/'.$result->productImage[0]->gif_3.'" class="img-fluid" alt="">
                                                      </div>
                                                   </div>
                                                   <div class="slider-nav2 my-2 justify-content-between">
                                                      <img src="https://ecomfia.com/storage/app/public/'.$result->productImage[0]->gif_1.'" class="img-fluid" alt="gif 1">
                                                      <img src="https://ecomfia.com/storage/app/public/'.$result->productImage[0]->gif_2.'" class="img-fluid" alt="">
                                                      <img src="https://ecomfia.com/storage/app/public/'.$result->productImage[0]->gif_3.'" class="img-fluid" alt="">
                                                   </div>
                                                   '.$downloadButton.'
                                                </div>
                                                
                                             </div>
                                          </div>
                                          <div class="col-lg-8 tab-content">
               <div class="row mb-2 mx-2">
                  <div class="tab-pane fade show active" role="tabpanel">
                    <ul class="nav nav-tabs modal-tab nav-justified shadow" role="tablist">
                      <li class="nav-item plan-tab" role="presentation">
                        <a class="nav-link active" data-toggle="tab" href="#tab'.$result->id.'" style="font-size: 13px;" role="tab">Product Description</a>
                      </li>
                      <li class="nav-item plan-tab" role="presentation">
                        <a class="nav-link nav-link-show-1" data-toggle="tab" href="#far'.$result->id.'" style="font-size: 13px;" role="tab">Facebook Audience Research</a>
                      </li>
                    </ul>
                    <div class="tab-content pr-modal-tab bg-white shadow">
                      <div class="tab-pane fade show active pb-3" id="tab'.$result->id.'" role="tabpanel">
                        <div class="row mx-3 pt-3 plan-header">
                            <p>'.$result->description.'</p>
                        </div>
                      </div>
                      <div class="tab-pane pb-3 fade" id="far'.$result->id.'" role="tabpanel">
                        <div class="row mx-3 pt-3 plan-header">
                          <div class="col-md-6">
                            <div class="far-video-hedear">
                              <h3>Facebook video ads</h3>
                              <button type="button" class="btn far-download-btn">Download</button>
                            </div>
                            <div class="product-video-container embed-responsive embed-responsive-16by9">
                              
                              <video id="video-control-2" controls>
                                <source src="https://ecomfia.com/storage/app/public/'.$result->video_name.'" type="video/mp4">
                              </video>
                            </div>
                          </div>
                          <div class="col-6">
                            <div class="far-all-hedear mb-3">
                              <h3>Facebook Content</h3>
                            </div>
                            <div class="far-fb-content-text shadow-sm">
                              <p class="far-fb-text">'.$result->content.'</p>
                            </div>
                          </div>
                        </div>
                        
                        <div class="row m-2 p-2">
                          <div class="col-6 far-all-hedear">
                            <h3>Targeting Age</h3>
                            <div class="far-age-target-content shadow-sm">
                              <p>This ads on facebook & other social media targeted age range below.</p>
                              '.$ages.'
                            </div>
                          </div>
                           
                          <div class="col-6 far-all-hedear">
                            <h3>Targeting Gender</h3>
                            <div class="far-genter-content shadow-sm">
                              <p>This ads on facebook & other social media targeted gender below.</p>
                              .'.$genders.'
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
               </div>
            	</div>
                                       </div>
                                       <div class="row">
                                          <div class="col-12 modal-footer px-0 mt-2">
                                             <button type="button" class="btn btn-modal-cancel" data-dismiss="modal">Cancel</button>
                                             <a href="'.$linkToDetailsPage.'" type="button" class="btn btn-modal-product">View Product</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
   </div>
   





								';
								
			      }
  					return $artilces;
        }
		
		
		

		if (!empty($trendingProducts) ){

			foreach ($trendingProducts as $trendingproduct) {
				
				$country = $trendingproduct->country.",";
				// dd($country);
			}
			if (empty($country)) {
				return view('user.practice-untapped-product',compact('trendingProducts','sortSelected','filterSelected','categorySelected'));
			}else{
				return view('user.practice-untapped-product',compact('trendingProducts','country','sortSelected','filterSelected','categorySelected'));
			}
			

		}else{

			return view('user.practice-untapped-product',compact('trendingProducts','country','sortSelected','filterSelected','categorySelected'));

		}

		}else{

	 	return view('auth.login');

	 	}
	}

	public function untappedProductsDetails($product_id)
	{

		if(Auth::check()){
			
		$trendingProducts = ProductDetail::where('opportunity_level', 'LIKE' ,'%untapped_product%')
		->where('id', $product_id)
		->get();

		// dd($trendingProducts);

		foreach ($trendingProducts as $trendingproduct) {
			$country = $trendingproduct->country.",";

			// echo $country;
		}
			if (empty($country)) {

				return view('user.product-details',compact('trendingProducts'));

			}else{

				return view('user.product-details',compact('trendingProducts','country'));

			}
		}else{

	 		return view('auth.login');

		}
	}

	public function viewTutorial($value='')
	{
		return view('user.tutorial');
	}

	public function viewFAQ($value='')
	{
		return view('user.FAQ');
	}

	public function viewContactUs($value='')
	{
		return view('user.contact-us');
	}

  public function downloadGIF($gifs)
	{
    	// echo $gifs;
    	$files = explode(',', $gifs);
         // 	dd($files);
    	$headers = [
        'Content-Type' => 'application/octet-stream',
    ];
    	$zip = new ZipArchive();
		$zip_name = "ebutify_gif_".time().".zip"; // Zip name
	    touch($zip_name);
		
		$zip->open($zip_name,  ZipArchive::CREATE);
		foreach ($files as $file) {
		  $path = asset('/storage/app/public/'.$file);
		  //if(file_exists($path)){
		  $zip->addFromString(basename($path),  file_get_contents($path));
		  //}
		  //else{
		  // echo"file does not exist";
		  //}
		}
		$zip->close();
// 		dd(basename($path));
// 		dd($zip);

// 		return response()->download('http://ecomfia.com/'.$zip_name);
        return redirect('https://ebutify.com/'.$zip_name);

    }

  public function downloadVid($video)
	{
		$file = asset('/storage/app/public/'.$video);

    $headers = [
      'Content-Type' => 'application/octet-stream',
    ];

		
		return Response::download($file, $video, $headers);

    }


}
