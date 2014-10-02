<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

  	/**
     * The layout that should be used for responses.
     */
    protected $layout = 'front.layouts.master';
    public $common_helpers;
    
    public function __construct(User $user){
	
	$this->common_helpers =  new Helpers();
	$this->user = $user;
	
	$link_arr = $this->common_helpers->getLinksCategory();
	
	$this->links 		= $link_arr['links'];
	$this->link_categories 	= $link_arr['link_categories'];
    }
    //=======================================
    
    
    public function index()
    {
	$links 			= $this->links;
	$link_categories 	= $this->link_categories;
	
	$principle_quote = Quote::find(1);
	$director_quote = Quote::find(2);
	//quotes
	//print_r($principle_quote);
	//die;
	$active_menu = '1';
	
	return View::make('front.home.index', compact('active_menu', 'links', 'link_categories', 'principle_quote', 'director_quote' ));
    }
    //=======================================
    
    
    public function getAboutUs()
    {
	$links 		    = $this->links;
	$link_categories    = $this->link_categories;
	$active_menu 	    = '2';
	
	$aboutus = Content::find(1);
	$principle_quote = Quote::find(1);
	$director_quote = Quote::find(2);
	return View::make('front.home.aboutus', compact('active_menu', 'links', 'link_categories', 'aboutus', 'principle_quote', 'director_quote'));
    }
    //=======================================
    
    
    public function getCourses()
    {
	$links 		    = $this->links;
	$link_categories    = $this->link_categories;
	$active_menu 	    = '3';
	
	$courses = Course::paginate('5');
	return View::make('front.home.courses', compact('active_menu', 'links', 'link_categories', 'courses'));
    }
    //=======================================
    
    
    public function getLibraryFacility()
    {
	$links 		    = $this->links;
	$link_categories    = $this->link_categories;
	$active_menu 	    = '6';
	
	$aboutus = Content::find(2);
	$principle_quote = Quote::find(1);
	$director_quote = Quote::find(2);
	return View::make('front.home.aboutus', compact('active_menu', 'links', 'link_categories', 'aboutus', 'principle_quote', 'director_quote'));
    }
    //=======================================
    
    
    public function getComputerLab()
    {
	$links 		    = $this->links;
	$link_categories    = $this->link_categories;
	$active_menu 	    = '6';
	
	$aboutus = Content::find(3);
	$principle_quote = Quote::find(1);
	$director_quote = Quote::find(2);
	return View::make('front.home.aboutus', compact('active_menu', 'links', 'link_categories', 'aboutus', 'principle_quote', 'director_quote'));
    }
    //=======================================
    

    public function getContactUs()
    {
	$links 			= $this->links;
	$link_categories 	= $this->link_categories;
	$active_menu 	    = '9';
	
	return View::make('front.home.contactus', compact('active_menu', 'links', 'link_categories', 'principle_quote', 'director_quote' ));
    }
    //=======================================
    
    
    public function postContactUs()
    {
	$input = Input::all();
	
	///$v =  View::make('front.emails.contactus', compact('input' ));
	
	$data['name'] 		= $input['name'];
	$data['email'] 		= $input['email'];
	$data['phone'] 		= $input['phone'];
	$data['subject'] 	= $input['subject'];
	$data['message'] 	= $input['message'];
	
	
	Mail::send('front.emails.contactus', $data, function($message)
	{
	    $message->from('manjhisamaj14@gmail.com', 'Manjhi');
	    $message->to('bvikasvburman@gmail.com', 'Vikas Burman')->subject('test');
	});
	
	return Redirect::to('/contactus')
	->with('success', 'Your messege has been send! ')
	->withInput();
	
    }
    //=======================================


    public function getPortfolio()
    {
	$links 		    = $this->links;
	$link_categories    = $this->link_categories;
	$active_menu 	    = '5';
	
	$principle_quote = Quote::find(1);
	$director_quote = Quote::find(2);
	return View::make('front.home.portfolio', compact('active_menu', 'links', 'link_categories', 'principle_quote', 'director_quote' ));
    }
    //=======================================
    
    public function postSignup()
    {
	$input = Input::all();
        $input['password'] 	= Hash::make(Input::get('password'));
	$input['profile_code'] 	= $this->common_helpers->getProfileId();
	
	if ($this->user->validate($input)) {
	    //print_r('v');
	    //die;
	    $input = array_except($input, array('_token', 'confirm_password'));
	    $obj    = $this->user->create($input);
            return Redirect::to('/')->with('success', 'Updated Record Successfully');
        } else {
            // failure
            $errors = $this->user->errors();
	    //print_r($errors);
	    //die;
	    //Redirect::route('/')
            return 
		Redirect::to('/')
                ->withInput()
                ->withErrors($errors)
                ->with('error', 'There were validation errors.');
        }
    }
    //=======================================
    
    

}
