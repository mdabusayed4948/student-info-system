<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Academic;
use App\Program;
use App\Level;
use App\Shift;
use App\Time;
use App\Batch;
use App\Group;
use App\MyClass;

class CourseController extends Controller
{
    public function __construct()
    {
    	$this->middleware('web');
    }

//==============================

    public function getManageCourse()
    {
        $programs  = Program::all();
        $shift     = Shift::all();
        $time      = Time::all();
        $batch     = Batch::all();
        $group     = Group::all();
        $academics = Academic::orderBy('academic_id','DESC')->get();
    	return view('courses.manageCourse', compact('programs','academics','shift','time','batch','group'));
    }

//==============================

    public function postInsertAcademic(Request $request)
    {
    	if ($request->ajax()) {
    		//return response($request->all());
    		return response(Academic::create($request->all()));
    	}
    }

//==============================

    public function postInsertProgram(Request $request)
    {
    	if ($request->ajax()) {
    		//return response($request->all());
    		return response(Program::create($request->all()));
    	}
    }

//==============================

    public function postInsertLevel(Request $request)
    {
        if ($request->ajax()) {
            //return response($request->all());
            return response(Level::create($request->all()));
        }
    }
//==============================

    public function showLevel(Request $request)
    {
        if ($request->ajax()) {
            return response(Level::where('program_id',$request->program_id)->get());
        }
    }
//==============================

    public function createShift(Request $request)
    {
        if ($request->ajax()) {
            //return response($request->all());
            return response(Shift::create($request->all()));
        }
    }
//==============================

    public function createTime(Request $request)
    {
        if ($request->ajax()) {
            //return response($request->all());
            return response(Time::create($request->all()));
        }
    }
//==============================

    public function createBatch(Request $request)
    {
        if ($request->ajax()) {
            //return response($request->all());
            return response(Batch::create($request->all()));
        }
    }
//==============================

    public function createGroup(Request $request)
    {
        if ($request->ajax()) {
            //return response($request->all());
            return response(Group::create($request->all()));
        }
    }    
//==============================

    public function createClass(Request $request)
    {
        if ($request->ajax()) {
            //return response($request->all());
            return response(MyClass::create($request->all()));
        }
    }

    public function showClassInformation(Request $request)
    {
       // return response($this->ClassInformation());
        // if ($request->academic_id!="" && $request->program_id=="") {
        //     $criterial = array('academics.academic_id'=>$request->academic_id);
        // }elseif ($request->academic_id!="" &&
        //  $request->program_id!=""
        //   && $request->level_id!="")
        //    {
        //     $criterial = array('academics.academic_id'=>$request->academic_id,
        //         'programs.program_id'=>$request->program_id,
        //         'levels.level_id'=>$request->level_id);
        // }
         $classes = $this->ClassInformation()->get();
        return view('class.classInfo',compact('classes'));
    }

    public function ClassInformation()
    {
        return MyClass::join('academics','academics.academic_id','=','classes.academic_id')
        ->join('levels','levels.level_id','=','classes.level_id')
        ->join('programs','programs.program_id','=','levels.program_id')
        ->join('shifts','shifts.shift_id','=','classes.shift_id')
        ->join('times','times.time_id','=','classes.time_id')
        ->join('groups','groups.group_id','=','classes.group_id')
        ->join('batches','batches.batch_id','=','classes.batch_id')
        //->where($criterial)
        ->orderBy('classes.class_id','DESC');
        
      // ->get();
       
    //dump($classes);
    //return view('class.classinfo',compact('classes')) ; 
       
    }  

    public function deleteClass(Request $request)
    {
        if ($request->ajax()) {
            MyClass::destroy($request->class_id);
        }
    }

    public function editClass(Request $request)
    {
        if ($request->ajax()) {
            return response(MyClass::find($request->class_id));
        }
    }

    public function updateClassInfo(Request $request)
    {
        if ($request->ajax()) {
            return response(MyClass::updateOrCreate(['class_id' => $request->class_id],$request->all()));
        }
    }

}
