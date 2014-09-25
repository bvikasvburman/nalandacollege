<?php

class ContentController extends \BaseController {

	
    protected $layout = 'admin.layouts.master';
    
    public function __construct(Content $content){
    
        $this->beforeFilter('auth');
        $this->common_helpers =  new Helpers();
        $this->content = $content;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
	$head['page_header'] = 'Content';
        $results    = Content::paginate(20);
        return View::make('admin.contents.index', compact('results', 'head'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $head['page_header'] = 'Content';
        return View::make('admin.contents.create', compact('head'));
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
        if ($this->content->validate($input)) {
                
            $obj    = $this->content->create($input);
            return Redirect::to('admin/contents')->with('success', 'Insert Record Successfully');
            $validation = false;
        } else {
            // failure			
            $errors = $this->content->errors();
            return Redirect::route('admin.contents.create')
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
        $head['page_header'] = 'Content';
        $result = Content::find($id);
        return  View::make('admin.contents.show', compact('result', 'head'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $head['page_header']    = 'Content';
        $data                   = Content::find($id);
        
        return View::make('admin.contents.edit', compact('data', 'head' , 'id'));
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

        if ($this->content->validate($input)) {
                
                $obj    = $this->content->find($id);
                $obj    = $obj->update($input);
                
                return Redirect::route('admin.contents.edit', $id)->with('success', 'Updated Record Successfully');
                
        } else {
            // failure
            $errors = $this->content->errors();
            return Redirect::route('admin.contents.edit', $id)
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
        $obj = Content::find($id);
        $obj->delete();
        return Redirect::to('admin/contents')->with('success', 'Record Deleted Successfully');
    }
}