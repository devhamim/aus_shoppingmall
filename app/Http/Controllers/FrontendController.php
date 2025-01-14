<?php

namespace App\Http\Controllers;

use App\Models\about;
use App\Models\achieve;
use App\Models\banner;
use App\Models\blog;
use App\Models\client;
use App\Models\customerSay;
use App\Models\gallery;
use App\Models\service;
use App\Models\setting;
use App\Models\team;
use App\Models\blogComment;
use App\Models\careerlist;
use App\Models\careersApplayStore;
use App\Models\country;
use App\Models\media;
use App\Models\privacyPolicy;
use App\Models\product;
use App\Models\video;
use Illuminate\Http\Request;
use Str;

class FrontendController extends Controller
{
    //home
    function home(){
        $abouts = about::where('status', 1)->where('define', 1)->get();
        $banners = banner::where('status', 1)->get();
        $products = product::where('status', 1)->where('define', 2)->get();
        $services = service::where('status', 1)->get();
        $teams = team::where('status', 1)->get();
        $gallerys = gallery::where('status', 1)->get();
        $clients = client::where('status', 1)->get();
        $achieves = achieve::where('status', 1)->get();
        $customerSays = customerSay::where('status', 1)->get();
        $videos = video::where('status', 1)->get();
        $blogs = blog::where('status', 1)->where('define', 2)->get();
        $settings = setting::all();
        return view('frontend.home',[
            'abouts'=>$abouts,
            'banners'=>$banners,
            'services'=>$services,
            'teams'=>$teams,
            'settings'=>$settings,
            'gallerys'=>$gallerys,
            'clients'=>$clients,
            'achieves'=>$achieves,
            'customerSays'=>$customerSays,
            'blogs'=>$blogs,
            'products'=>$products,
            'videos'=>$videos,
        ]);
    }

    //about_us
    function about_us(){
        $abouts = about::where('status', 1)->where('define', 2)->get();
        $products = product::where('status', 1)->get();
        $clients = client::where('status', 1)->get();
        $teams = team::where('status', 1)->get();
        $customerSays = customerSay::where('status', 1)->get();
        $settings = setting::all();
        return view('frontend.about', [
            'abouts'=>$abouts,
            'products'=>$products,
            'clients'=>$clients,
            'teams'=>$teams,
            'customerSays'=>$customerSays,
            'settings'=>$settings,
        ]);
    }
    //services
    function services(){
        // $services = service::where('slug', $slug)->where('status', 1)->first();
        // $all_services = service::where('status', 1)->get();
        // $teams = team::where('status', 1)->get();
        $settings = setting::all();
        return view('frontend.services', [
            // 'services'=>$services,
            // 'teams'=>$teams,
            'settings'=>$settings,
            // 'all_services'=>$all_services,
        ]);
    }
    //our_portfolio
    function our_portfolio(){
        return view('frontend.protfolio');
    }
    //our_blog
    function our_blog(){
        $blogs = blog::where('status', 1)->get();
        return view('frontend.blog',[
            'blogs'=>$blogs,
        ]);
    }
    //our_blog_details
    function our_blog_details($slug){
        $latest_blogs = blog::where('status', 1)->get();
        $blogs = blog::where('slug', $slug)->get();
        $blog_comment = blogComment::where('blogs_id', $blogs->first()->id)->get();
        $blog_comment_count = blogComment::where('blogs_id', $blogs->first()->id)->count();
        $blog_comment_all = blogComment::all();
        return view('frontend.blog_details',[
            'blogs'=>$blogs,
            'latest_blogs'=>$latest_blogs,
            'blog_comment'=>$blog_comment,
            'blog_comment_count'=>$blog_comment_count,
            'blog_comment_all'=>$blog_comment_all,
        ]);
    }
    //contect
    function contect(){
        $settings = setting::all();
        return view('frontend.contect', [
            'settings'=>$settings,
        ]);
    }
    //gallerys
    function gallerys(){
        $gallerys = gallery::where('status', 1)->get();
        return view('frontend.gallery', [
            'gallerys'=>$gallerys,
        ]);
    }
    //our_team
    function our_team(){
        $teams = team::where('status', 1)->get();
        return view('frontend.team', [
            'teams'=>$teams,
        ]);
    }
    //our_team
    function our_clients(){
        $clients = client::where('status', 1)->get();
        $customerSays = customerSay::where('status', 1)->get();
        $settings = setting::all();
        return view('frontend.client', [
            'clients'=>$clients,
            'customerSays'=>$customerSays,
            'settings'=>$settings,
        ]);
    }

    //our_privacy_policy
    function our_privacy_policy(){
        $privacyPolicy = privacyPolicy::all();
        return view('frontend.privacyPolicy', [
            'privacyPolicy'=>$privacyPolicy,
        ]);
    }
    //our_product
    function our_product(){
        $products = product::where('status', 1)->get();
        return view('frontend.product', [
            'products'=>$products,
        ]);
    }
     //our_media
    function our_media(){
        $medias = media::where('status', 1)->get();
        return view('frontend.media', [
            'medias'=>$medias,
        ]);
    }

    // register_dealerform
    function register_dealerform(){
        return view('frontend.dealerform');
    }

    // career
    function career(){
        $careerlists = careerlist::all();
        return view('frontend.careers', [
            'careerlists'=>$careerlists,
        ]);
    }
    // careers_applay
    function careers_applay($id){
        $careerlists = careerlist::find($id);
        $countries = country::all();

        return view('frontend.careers_applay', [
            'careerlists'=>$careerlists,
            'countries'=>$countries,
        ]);
    }


    function career_applay_store(Request $request){
        $rules = [
            'career_id'     => 'required',
            'resume'        => 'required',
            'fast_name'     => 'required',
            'middle_name'   => '',
            'last_name'     => 'required',
            'gender'        => 'required',
            'email'         => 'required',
            'country_code'  => 'required',
            'number'        => 'required',
            'country_name'  => 'required',
            'address_one'   => 'required',
            'address_two'   => '',
            'city'          => '',
            'post_code'     => '',
            'street'        => '',
            'hear_about_us' => '',
            'desired_salary'=> '',
            'job_title'     => '',
            'start_date'    => '',
            'end_date'      => '',
            'edu_level'     => '',
            'edu_institution' => '',
            'gradu_year'    => '',
            'cover_later'   => '',
            'link'          => '',
        ];

        $validatesData = $request->validate($rules);


        if($request->hasFile('resume')){
            $resume = $request->file('resume');
            $extension = $resume->getClientOriginalExtension();
            $file_name = Str::random(5). rand(1000, 999999). '.'.$extension;
            $resume->move(public_path('uploads/career'), $file_name);
            $validatesData['resume'] = $file_name;
        }
        if($request->hasFile('cover_later')){
            $cover_later = $request->file('cover_later');
            $extension = $cover_later->getClientOriginalExtension();
            $file_name = Str::random(5). rand(1000, 999999). '.'.$extension;
            $cover_later->move(public_path('uploads/career'), $file_name);
            $validatesData['cover_later'] = $file_name;
        }

        careersApplayStore::create($validatesData);
        toast('Add Success','success');
        return redirect()->route('career.applay.success');
    }

    function career_applay_success(){
        return view('frontend.career_success');
    }

}
