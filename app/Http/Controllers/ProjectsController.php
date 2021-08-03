<?php

namespace App\Http\Controllers;

use App\Models\Projects;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Projects::all();
        return view('liquidbox.projects.index', compact(['projects']));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            //code...
            $projects = new Projects();

            $projects->title = $request->title;
            $projects->field = $request->field;
            $projects->field2 = $request->field2;
            $projects->location = $request->location;
            $projects->flag = $request->flag;
            $projects->date = $request->date;
            $projects->about = $request->about;

            if ($request->hasfile('file_path')) {
                $file_file = cloudinary()->upload($request->file('file_path')->getRealPath())->getSecurePath();

                $projects->file_path = $file_file;
            } else {
                return $request;
                $projects->file_path = '';
            }

            $projects->save();
     
            return redirect('projects')->with('message', 'Project Added Succesfully!');
            

        } catch (\Throwable $th) {
    
            //throw $th;
            $response = [
              'success' => false,
              'message' => "OOPS! Something fucking wennt wrong"
            ];
            return response()->json($response, 422);
        }
 
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function showData($id)
    {
        $projects = Projects::find($id);
        return view('liquidbox.projects.edit', ['projects'=>$projects]); 
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        
         try {

            $projects = Projects::find($request->id);

            if ($request->hasfile('file_path')) {
                $file_file = cloudinary()->upload($request->file('file_path')->getRealPath())->getSecurePath();
                $projects->file_path = $file_file;
            } else {
                $projects->save();
            }
        
          
             $projects->update([
                 'title' => $request['title'],
                 'field' => $request['field'],
                 'field2' => $request['field2'],
                 'location' => $request['location'],
                 'flag' => $request['flag'],
                 'date' => $request['date'],
                 'about' => $request['about'],
             ]);

             $projects->save();
     
             return redirect('projects')->with('message', 'Projects Updated  Succesfully!');
            

         } catch (\Throwable $th) {
    
             throw $th;
             $response = [
               'success' => false,
               'message' => "OOPS! Something fucking wennt wrong"
             ];
             return response()->json($response, 422);
         }
 
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $projects = Projects::find($id);

        $projects->delete('delete from projects where id = ?',[$id]);
        
        return redirect('projects')->with('message','Project deleted successfully');
      
    }
}
