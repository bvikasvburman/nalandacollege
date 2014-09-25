<?php

class QuoteController extends \BaseController {

	
    protected $layout = 'admin.layouts.master';
    
    public function __construct(Quote $quote){
    
        $this->beforeFilter('auth');
        $this->common_helpers =  new Helpers();
        $this->quote = $quote;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
	$head['page_header'] = 'Quote';
        $results    = Quote::paginate(20);
        return View::make('admin.quotes.index', compact('results', 'head'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $head['page_header'] = 'Quote';
        return View::make('admin.quotes.create', compact('head'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $input = Input::all();
        $input = array_except($input, '_token');
        //print_r($input);
        //die;
        if ($this->quote->validate($input)) {
                
            $obj    = $this->quote->create($input);
            return Redirect::to('admin/quotes')->with('success', 'Insert Record Successfully');
            $validation = false;
        } else {
            // failure			
            $errors = $this->quote->errors();
            return Redirect::route('admin.quotes.create')
                ->withInput()
                ->withErrors($errors)
                ->with('error', 'There were validation errors.');
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $head['page_header'] = 'Quote';
        $result = Quote::find($id);
        return  View::make('admin.quotes.show', compact('result', 'head'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
	
	switch($id){
	    case 1:
		$title = 'Principal  Message';
		break;
	    case 2:
		$title = 'Director Message';
		break;
	}
        $head['page_header']    = $title;
        $data                   = Quote::find($id);
        
        return View::make('admin.quotes.edit', compact('data', 'head' , 'id'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
	
	
			    
	$obj    = $this->quote->find($id);
        $input = Input::all();
        $input = array_except($input, '_token');
	
	if (Input::hasFile('profile_picture')) {
	    
	    File::delete(public_path().'/assets/uploads/achievers/'. $obj->profile_picture);
	    
	    $file            = Input::file('profile_picture');
	    $destinationPath = public_path().'/assets/uploads/quotes';
	    $filename        = str_random(6) . '_' . $file->getClientOriginalName();
	    $image = Image::make(Input::file('profile_picture')->getRealPath())->resize(200, 200);
	    $image->save($destinationPath . '/' . $filename);

	    $input['profile_picture'] = $filename;
	
	} else {
	    
	    $input['profile_picture'] = $obj->profile_picture;
	}
	//print_r($input);
	//die('v');

        if ($this->quote->validate($input)) {
                
                $obj    = $this->quote->find($id);
                $obj    = $obj->update($input);
                
                return Redirect::route('admin.quotes.edit', $id)->with('success', 'Record Updated Successfully');
                
        } else {
            // failure
            $errors = $this->quote->errors();
            return Redirect::route('admin.quotes.edit', $id)
                ->withInput()
                ->withErrors($errors)
                ->with('error', 'There were validation errors.');
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $obj = Quote::find($id);
        $obj->delete();
        return Redirect::to('admin/quotes')->with('success', 'Record Deleted Successfully');
    }
}