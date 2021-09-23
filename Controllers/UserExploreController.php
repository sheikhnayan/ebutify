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
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Hash;
use Validator;
use DateTime;
use Response;


class UserExploreController extends Controller
{
    public function exploreAli(Request $request)
    {
        $realCategory = Category::whereNotNull('id')->get();

        if(Auth::check()){
            $sortSelected = 0;
            $filterSelected = 0;

        //-- HANDLE SORTING
        if($request->sort) {
            $sortSelected = $request->sort;
            $filterSelected = $request->filter;

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
    
      
        //-- HANDLE FILTER
        if($request->filter) {
            $sortSelected = $request->sort;
            $filterSelected = $request->filter;
          switch($request->filter){
            case 1:
                $trendingProducts = ProductDetail::where('explore_pro_type', 'LIKE' ,'%ali_express%')->where('price', '<=' ,'30')->orderBy($orderColumn,'DESC')->paginate(3);
                // dd($trendingProducts);
            break;
            case 2:
                $trendingProducts = ProductDetail::where('explore_pro_type', 'LIKE' ,'%ali_express%')->where('price', '>=' , '30')->orderBy($orderColumn,'DESC')->paginate(3);
            break;
            case 3:
                $trendingProducts = ProductDetail::where('explore_pro_type', 'LIKE' ,'%ali_express%')->where('profit', '>=' , '15')->orderBy($orderColumn,'DESC')->paginate(3);
            break;
            case 4:
                $trendingProducts = ProductDetail::where('explore_pro_type', 'LIKE' ,'%ali_express%')->where('cost', '<=' , '20')->orderBy($orderColumn,'DESC')->paginate(3);
            break;
            default:
                $filterBy = 'product_name';
            break;        
            }
        }else{

        }

        if($request->search) {
            // dd($request->search);
            $trendingProducts = ProductDetail::where('explore_pro_type', 'LIKE' ,'%ali_express%')->where('product_name', 'LIKE', '%'.$request->search.'%')->orderBy($orderColumn,'DESC')->paginate(3);
        }
        if (empty($trendingProducts)) {
            $trendingProducts = ProductDetail::where('explore_pro_type', 'LIKE' ,'%ali_express%')->orderBy($orderColumn,'DESC')->paginate(3);
        }
            
        // $trendingProducts = ProductDetail::where('explore_pro_type', 'LIKE' ,'%ali_express%')->get();
        

        $artilces = '';
            if ($request->ajax()) {

            // dd($trendingProducts);
            foreach ($trendingProducts as $result) {
                if($result->explore_star_rating >= 1){
                    $star1 = '<span class="fa fa-star checked"></span>';
                }else{
                    $star1 = '<span class="fa fa-star"></span>';
                }
                if($result->explore_star_rating >= 2){
                    $star2 = '<span class="fa fa-star checked"></span>';
                }else{
                    $star2 = '<span class="fa fa-star"></span>';
                }
                if($result->explore_star_rating >= 3){
                    $star3 = '<span class="fa fa-star checked"></span>';
                }else{
                    $star3 = '<span class="fa fa-star"></span>';
                }
                if($result->explore_star_rating >= 4){
                    $star4 = '<span class="fa fa-star checked"></span>';
                }else{
                    $star4 = '<span class="fa fa-star"></span>';
                }
                if($result->explore_star_rating >= 5){
                    $star5 = '<span class="fa fa-star checked"></span>';
                }else{
                    $star5 = '<span class="fa fa-star"></span>';
                }
                $artilces.=
                '<div class="col-md-4 mt-4" style="box-sizing: border-box; flex-flow: row wrap; margin: auto;">
                    <div class="card shadow">
                      <img src="'.$result->productImage[0]->image_link_1.'" class="card-img-top img-fluid" alt="...">
                      <div class="row card-body px-2">
                        <div class="col-12 pb-1 px-3" style="border-bottom: 2px solid #DCDCDC;">
                          <h5 class="card-title">'.$result->product_name.'</h5>
                        </div> 
                        <div class="row mt-3">
                          <div class="col-12 text-center px-3">
                            '.$star1.'
                            '.$star2.'
                            '.$star3.'
                            '.$star4.'
                            '.$star5.'
                            
                            <span>'.$result->explore_star_rating.'</span>
                          </div>
                          <div class="col-12 text-center px-3">
                            <span class="cae-cart-icon"><i class="fas fa-shopping-basket"></i> Total Order</span>
                            <span>'.$result->total_order.'</span>
                          </div>

                          <div class="col-12 text-center px-3">
                            <span class="cae-cart-icon"><i class="fas fa-shopping-basket"></i> Total Review</span>
                            <span>'.$result->total_revenue.'</span>
                          </div>

                          <div class="col-12 text-center px-3">
                            <span class="cae-cart-icon"><i class="fas fa-shopping-basket"></i> Total Price</span>
                            <span>'.$result->price.'</span>
                          </div>
                          
                          <div class="col-12 text-center px-3">
                            <span class="cae-cart-icon"><i class="fas fa-atom"></i> Total Revenue</span>
                            <span>'.$result->total_revenue.'</span>
                          </div>
                        </div>
                      </div>
                      <div class="row px-2 mb-2 rounded justify-content-center">
                        <a href="'.$result->productLink[0]->aliexpress.'" class="cae-view"><img src="https://ebutify.com/assets/img/ali.png" class="img-fluid" style="width: 16px; margin: 5px;" alt=""> View on AliExpress</a>
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

                return view('user.explore-ali',compact('trendingProducts','sortSelected','filterSelected','realCategory'));

            }else{

                return view('user.explore-ali',compact('trendingProducts','country','sortSelected','filterSelected','realCategory'));

            }
        

        }else{

        return view('auth.login');

        }
    }

    public function exploreAmz(Request $request)
    {
        $realCategory = Category::whereNotNull('id')->get();

        if(Auth::check()){
            $sortSelected = 0;
            $filterSelected = 0;

        //-- HANDLE SORTING
        if($request->sort) {
            $sortSelected = $request->sort;
            $filterSelected = $request->filter;

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
    
      
        //-- HANDLE FILTER
        if($request->filter) {
            $sortSelected = $request->sort;
            $filterSelected = $request->filter;
          switch($request->filter){
            case 1:
                $trendingProducts = ProductDetail::where('explore_pro_type', 'LIKE' ,'%amazon%')->where('price', '<=' ,'30')->orderBy($orderColumn,'DESC')->paginate(3);
                // dd($trendingProducts);
            break;
            case 2:
                $trendingProducts = ProductDetail::where('explore_pro_type', 'LIKE' ,'%amazon%')->where('price', '>=' , '30')->orderBy($orderColumn,'DESC')->paginate(3);
            break;
            case 3:
                $trendingProducts = ProductDetail::where('explore_pro_type', 'LIKE' ,'%amazon%')->where('profit', '>=' , '15')->orderBy($orderColumn,'DESC')->paginate(3);
            break;
            case 4:
                $trendingProducts = ProductDetail::where('explore_pro_type', 'LIKE' ,'%amazon%')->where('cost', '<=' , '20')->orderBy($orderColumn,'DESC')->paginate(3);
            break;
            default:
                $filterBy = 'product_name';
            break;        
            }
        }else{

        }

        if($request->search) {
            // dd($request->search);
            $trendingProducts = ProductDetail::where('explore_pro_type', 'LIKE' ,'%amazon%')->where('product_name', 'LIKE', '%'.$request->search.'%')->orderBy($orderColumn,'DESC')->paginate(3);
        }
        if (empty($trendingProducts)) {
            $trendingProducts = ProductDetail::where('explore_pro_type', 'LIKE' ,'%amazon%')->orderBy($orderColumn,'DESC')->paginate(3);
        }
            
        // $trendingProducts = ProductDetail::where('explore_pro_type', 'LIKE' ,'%amazon%')->get();
        

        $artilces = '';
            if ($request->ajax()) {

            // dd($trendingProducts);
            foreach ($trendingProducts as $result) {
                if($result->explore_star_rating >= 1){
                    $star1 = '<span class="fa fa-star checked"></span>';
                }else{
                    $star1 = '<span class="fa fa-star"></span>';
                }
                if($result->explore_star_rating >= 2){
                    $star2 = '<span class="fa fa-star checked"></span>';
                }else{
                    $star2 = '<span class="fa fa-star"></span>';
                }
                if($result->explore_star_rating >= 3){
                    $star3 = '<span class="fa fa-star checked"></span>';
                }else{
                    $star3 = '<span class="fa fa-star"></span>';
                }
                if($result->explore_star_rating >= 4){
                    $star4 = '<span class="fa fa-star checked"></span>';
                }else{
                    $star4 = '<span class="fa fa-star"></span>';
                }
                if($result->explore_star_rating >= 5){
                    $star5 = '<span class="fa fa-star checked"></span>';
                }else{
                    $star5 = '<span class="fa fa-star"></span>';
                }
                $artilces.=
                '<div class="col-md-4 mt-4" style="box-sizing: border-box; flex-flow: row wrap; margin: auto;">
                    <div class="card shadow">
                      <img src="'.$result->productImage[0]->image_link_1.'" class="card-img-top img-fluid" alt="...">
                      <div class="row card-body px-2">
                        <div class="col-12 pb-1 px-3" style="border-bottom: 2px solid #DCDCDC;">
                          <h5 class="card-title">'.$result->product_name.'</h5>
                        </div> 
                        <div class="row mt-3">
                          <div class="col-12 text-center px-3">
                            '.$star1.'
                            '.$star2.'
                            '.$star3.'
                            '.$star4.'
                            '.$star5.'
                            
                            <span>'.$result->explore_star_rating.'</span>
                          </div>


                          <div class="col-12 text-center px-3">
                            <span class="cae-cart-icon"><i class="fas fa-shopping-basket"></i> Total Review</span>
                            <span>'.$result->explore_t_review.'</span>
                          </div>

                          <div class="col-12 text-center px-3">
                            <span class="cae-cart-icon"><i class="fas fa-shopping-basket"></i> Selling Price</span>
                            <span>'.$result->price.'</span>
                          </div>
                          
                        </div>
                      </div>
                      <div class="row mb-3 mx-1">
                        <div class="col-6 text-center p-0">
                          <a href="'.$result->productLink[0]->amazon.'" class="cae-view rounded px-2 py-1" style="color: #918C9B;"><i class="fab fa-amazon" style="background: #191919; color: #fff; font-size: 12px; padding: 2px; line-height: 13px;"></i> Amazon</a>
                        </div>
                        <div class="col-6 text-center p-0">
                          <a href="'.$result->productLink[0]->aliexpress.'" class="cae-view rounded px-2 py-1" style="color: #918C9B;"><img src="https://ebutify.com/assets/img/ali.png" style="width: 16px; padding-bottom: 5px;" alt=""> AliExpress</a>
                        </div>
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

                return view('user.explore-amazon',compact('trendingProducts','sortSelected','filterSelected','realCategory'));

            }else{

                return view('user.explore-amazon',compact('trendingProducts','country','sortSelected','filterSelected','realCategory'));

            }
        

        }else{

        return view('auth.login');

        }
    }

    public function exploreStore(Request $request)
    {
        $realCategory = Category::whereNotNull('id')->get();

        if(Auth::check()){
            
        $trendingProducts = ShopifyProduct::orderBy('created_at','DESC')->paginate(3);

        // dd( $trendingProducts );
        
        
        
        $artilces = '';
        if ($request->ajax()) {
            foreach ($trendingProducts as $trendingProduct) {

                      $address = $trendingProduct->shopify_link;
                      $split = explode("com",$address);
                      $resultAddr = $split[0];
                      
                $artilces.='
        <div class="row cse-main-body p-3 m-3">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="row cse-content-header">
              <div class="col-lg-2 col-md-2 col-sm-6">
                <a target="_blank" href="'.$trendingProduct->shopify_link.'" style="color: #17a2b8;"><i class="fas fa-shopping-bag" style="color: #DC143C;"></i>
                      '.$resultAddr.'
                      </a>
                <a target="_blank" href="'.$trendingProduct->shopify_link.'" class="cse-see-link-2 float-right" style="color: #17a2b8;">See all <i class="fas fa-chevron-right"></i></a>
              </div>
              <div class="col-lg-2 col-md-2 cse-hide">
                <span><strong>Traffic:</strong>'.$trendingProduct->monthly_traffic.'M/month</span>
              </div>
              <div class="col-lg-2 col-md-2 cse-hide">
                <span>Tech Spend: '.$trendingProduct->ad_spend.'K/mo</span>
              </div>
              <div class="col-lg-2 col-md-2 cse-hide">
                <span>Tracking '.$trendingProduct->running_ads.' <i class="fab fa-facebook-f" style="color: #3B5998;"></i> </span>
              </div>

              <div class="col-lg-2 col-md-2 col-sm-6 show-right">
                <a target="_blank" href="'.$trendingProduct->shopify_link.'" class="cse-see-link-1" style="color: #17a2b8;">See all <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="row pt-3">
              <div class="col-md-6 col-lg-3">
                <div class="row">
                  <div class="col-6 my-2">
                    <img src="'.$trendingProduct->image_link.'" class="img-fluid" style="height: 85px;" alt="">
                  </div>
                  <div class="col-6 my-2">
                    <a target="_blank" href="'.$trendingProduct->product_link.'" style="font-size: 14px; color: #B1B1B1;">'.$trendingProduct->product_name.'</a>
                    
                    <p style="font-size: 13px;">Price: $'.$trendingProduct->price.'</p>
                    <a target="_blank" href="'.$trendingProduct->ali_express_link.'" class="cse-link"><img src="assets/img/ali.png" style="width: 14px; margin: 0 0 5px 0;" alt=""> AliExpress</a>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="row">
                  <div class="col-6 my-2">
                    <img src="'.$trendingProduct->image_link2.'" class="img-fluid" style="height: 85px;" alt="">
                  </div>
                  <div class="col-6 my-2">
                    <a target="_blank" href="'.$trendingProduct->product_link2.'" style="font-size: 14px; color: #B1B1B1;">'.$trendingProduct->product_name2.'</a>
                    <p style="font-size: 13px;">Price: $'.$trendingProduct->price2.'</p>
                    <a target="_blank" href="'.$trendingProduct->ali_express_link2.'" class="cse-link"><img src="assets/img/ali.png" style="width: 14px; margin: 0 0 5px 0;" alt=""> AliExpress</a>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="row">
                  <div class="col-6 my-2">
                    <img src="'.$trendingProduct->image_link3.'" class="img-fluid" style="height: 85px;" alt="">
                  </div>
                  <div class="col-6 my-2">
                    <a target="_blank" href="'.$trendingProduct->product_link3.'" style="font-size: 14px; color: #B1B1B1;">'.$trendingProduct->product_name3.'</a>
                    
                    <p style="font-size: 13px;">Price: $'.$trendingProduct->price3.'</p>
                    <a target="_blank" href="'.$trendingProduct->ali_express_link3.'" class="cse-link"><img src="assets/img/ali.png" style="width: 14px; margin: 0 0 5px 0;" alt=""> AliExpress</a>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="row">
                  <div class="col-6 my-2">
                    <img src="'.$trendingProduct->image_link4.'" class="img-fluid" style="height: 85px;" alt="">
                  </div>
                  <div class="col-6 my-2">
                    <a target="_blank" href="'.$trendingProduct->product_link4.'" style="font-size: 14px; color: #B1B1B1;">'.$trendingProduct->product_name4.'</a>
                    <p style="font-size: 13px;">Price: $'.$trendingProduct->price4.'</p>
                    <a target="_blank" href="'.$trendingProduct->ali_express_link4.'" class="cse-link"><img src="assets/img/ali.png" style="width: 14px; margin: 0 0 5px 0;" alt=""> AliExpress</a>
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

                return view('user.explore-store',compact('trendingProducts','realCategory'));

            }else{

                return view('user.explore-store',compact('trendingProducts','country','realCategory'));
            }

        }else{

        return view('auth.login');

        }
    }
}
