<?php

class CourseController extends \BaseController {

	
    protected $layout = 'admin.layouts.master';
    
    public function __construct(Course $course){
    
        $this->beforeFilter('auth');
        $this->common_helpers =  new Helpers();
        $this->course = $course;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
	$head['page_header'] = 'Course';
        $results    = Course::paginate(20);
        return View::make('admin.courses.index', compact('results', 'head'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $head['page_header'] = 'Course';
        return View::make('admin.courses.create', compact('head'));
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
        if ($this->course->validate($input)) {
                
            $obj    = $this->course->create($input);
            return Redirect::to('admin/courses')->with('success', 'Insert Record Successfully');
            $validation = false;
        } else {
            // failure			
            $errors = $this->course->errors();
            return Redirect::route('admin.courses.create')
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
        $head['page_header'] = 'Course';
        $result = Course::find($id);
        return  View::make('admin.courses.show', compact('result', 'head'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $head['page_header']    = 'Course';
        $data                   = Course::find($id);
        
        return View::make('admin.courses.edit', compact('data', 'head' , 'id'));
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

        if ($this->course->validate($input)) {
                
                $obj    = $this->course->find($id);
                $obj    = $obj->update($input);
                
                return Redirect::to('admin/courses')->with('success', 'Updated Record Successfully');
                
        } else {
            // failure
            $errors = $this->course->errors();
            return Redirect::route('admin.courses.edit', $id)
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
        $obj = Course::find($id);
        $obj->delete();
        return Redirect::to('admin/courses')->with('success', 'Record Deleted Successfully');
    }
}