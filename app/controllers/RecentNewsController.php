<?php

class RecentNewsController extends \BaseController {

	
    protected $layout = 'admin.layouts.master';
    
    public function __construct(RecentNews $recentnews){
    
	$this->beforeFilter('auth');
        $this->common_helpers =  new Helpers();
        $this->recentnews = $recentnews;
	
	//print_r($this->recentnews);
	//die;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
	$head['page_header'] = 'Event';
        $results    = RecentNews::paginate(20);
	return View::make('admin.recentnewses.index', compact('results', 'head'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $head['page_header'] = 'Event';
        return View::make('admin.recentnewses.create', compact('head'));
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
        if ($this->recentnews->validate($input)) {
                
            $obj    = $this->recentnews->create($input);
            return Redirect::to('admin/recentnewses')->with('success', 'Insert Record Successfully');
            $validation = false;
        } else {
            // failure			
            $errors = $this->recentnews->errors();
            return Redirect::route('admin.recentnewses.create')
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
        $head['page_header'] = 'Event';
        $result = RecentNews::find($id);
        return  View::make('admin.recentnewses.show', compact('result', 'head'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $head['page_header']    = 'Event';
        $data                   = RecentNews::find($id);
        
        return View::make('admin.recentnewses.edit', compact('data', 'head' , 'id'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $input = Input::all();
        $input = array_except($input, '_token');

        if ($this->recentnews->validate($input)) {
                
                $obj    = $this->recentnews->find($id);
                $obj    = $obj->update($input);
                
                return Redirect::to('admin/recentnewses')->with('success', 'Updated Record Successfully');
                
        } else {
            // failure
            $errors = $this->recentnews->errors();
            return Redirect::route('admin.recentnewses.edit', $id)
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
        $obj = RecentNews::find($id);
        $obj->delete();
        return Redirect::to('admin/recentnewses')->with('success', 'Record Deleted Successfully');
    }
}