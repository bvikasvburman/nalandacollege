<?php

class StaffController extends \BaseController {

	
    protected $layout = 'admin.layouts.master';
    
    public function __construct(Staff $staff){
    
        $this->beforeFilter('auth');
        $this->common_helpers =  new Helpers();
        $this->staff = $staff;
	$this->department_array = $this->common_helpers->departmentArray();
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $head['page_header'] = 'Staffs';
        $results    = Staff::paginate(20);
	$department_array  = $this->department_array;
        return View::make('admin.staffs.index', compact('results', 'head', 'department_array'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $head['page_header'] = 'Staff';
	
	$department_array  = $this->department_array;
	
        return View::make('admin.staffs.create', compact('head', 'department_array'));
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
	
	if (Input::hasFile('profile_picture')) {
	   
	    $file            = Input::file('profile_picture');
	    $destinationPath = public_path().'/assets/uploads/staffs';
	    $filename        = str_random(6) . '_' . $file->getClientOriginalName();
	    //$uploadSuccess   = $file->move($destinationPath, $filename);
	    $image = Image::make(Input::file('profile_picture')->getRealPath())->resize(200, 200);
	    $image->save($destinationPath . '/' . $filename);

	    $input['profile_picture'] = $filename;
	}
	
	
        if ($this->staff->validate($input)) {
                
            $obj    = $this->staff->create($input);
            return Redirect::to('admin/staffs')->with('success', 'Insert Record Successfully');
            $validation = false;
        } else {
            // failure			
            $errors = $this->staff->errors();
            return Redirect::route('admin.staffs.create')
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
        $head['page_header'] = 'Staff';
        $result = Staff::find($id);
	$department_array  = $this->department_array;
        return  View::make('admin.staffs.show', compact('result', 'head', 'department_array'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $head['page_header']    = 'Staff';
        $data                   = Staff::find($id);
        $department_array  	= $this->department_array;
	
	return View::make('admin.staffs.edit', compact('data', 'head' , 'id', 'department_array'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $obj    = $this->staff->find($id);
	
	$input = Input::all();
	$input = array_except($input, '_token');
	
	if (Input::hasFile('profile_picture')) {
	   
	    File::delete(public_path().'/assets/uploads/staffs/'. $obj->profile_picture);
	    
	    $file            = Input::file('profile_picture');
	    $destinationPath = public_path().'/assets/uploads/staffs';
	    $filename        = str_random(6) . '_' . $file->getClientOriginalName();
	    $image = Image::make(Input::file('profile_picture')->getRealPath())->resize(200, 200);
	    $image->save($destinationPath . '/' . $filename);

	    $input['profile_picture'] = $filename;
	
	} else {
	    $input['profile_picture'] = $obj->profile_picture;
	}
	

        if ($this->staff->validate($input)) {
                
                $obj    = $this->staff->find($id);
                $obj    = $obj->update($input);
                
                return Redirect::to('admin/staffs')->with('success', 'Updated Record Successfully');
                
        } else {
            // failure
            $errors = $this->staff->errors();
            return Redirect::route('admin.staffs.edit', $id)
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
        $obj = Staff::find($id);
        $obj->delete();
        return Redirect::to('admin/staffs')->with('success', 'Record Deleted Successfully');
    }
}