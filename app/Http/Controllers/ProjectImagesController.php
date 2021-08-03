<?php

namespace App\Http\Controllers;

use Cloudder;
use App\Models\ProjectImages;
use Illuminate\Http\Request;

class ProjectImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projectImages = ProjectImages::all();
        return view('liquidbox.projectImages.index', compact(['projectImages']));
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
            $projectImages = new ProjectImages();

            $projectImages->name = $request->name;
            $projectImages->project_id = $request->project_id;

            if ($request->hasfile('file_path1')) {
                
                $file_file = cloudinary()->upload($request->file('file_path1')->getRealPath())->getSecurePath();

                $projectImages->file_path1 = $file_file;
            } else {
                return $request;
                $projectImages->file_path1 = '';
            }

            $projectImages->save();
     
            return redirect()->back()->with('message', 'Images Added Succesfully!');
            

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

    public function showImages($id)
    {

        $projectImages = ProjectImages::where('project_id', $id)->get(); 
        return view('liquidbox.projectImages.index',compact('projectImages'))->with('id', $id);
    }


    public function showData($id)
    {
        $projectImages = ProjectImages::find($id);
        return view('liquidbox.projectImages.edit', ['projectImages'=>$projectImages]); 
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
            $projectImages = ProjectImages::find($request->id);
            
            if ($request->hasfile('file_path1')) {
                $file_file = cloudinary()->upload($request->file('file_path1')->getRealPath())->getSecurePath();
                $projectImages->file_path1 = $file_file;
            } else {
                $projectImages->save();
            }
    
             $projectImages->update([

                'name' => $request['name'],
                'project_id' => $request['project_id'],
             ]);

             $projectImages->save();
     
             return redirect('projects' )->with('message', 'Image Updated  Succesfully!');
            

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
        $projectImages = ProjectImages::find($id);

        $projectImages->delete('delete from projectImages where id = ?',[$id]);
        
        return redirect('projects')->with('message','Image deleted successfully');
      
    }
}
