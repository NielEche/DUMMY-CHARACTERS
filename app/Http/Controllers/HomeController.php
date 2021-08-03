<?php

namespace App\Http\Controllers;

use App\Models\Abouts;
use App\Models\Sliders;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts = Abouts::all();
        $sliders = Sliders::all();
        return view('liquidbox.homePage.index', compact(['abouts', 'sliders']));
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
            $sliders = new Sliders();

            $sliders->headtext = $request->headtext;

            if ($request->hasfile('file_path')) {
                $file = $request->file('file_path');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('uploads/slider/', $filename);
                $sliders->file_path = $filename;
            } else {
                return $request;
                $sliders->file_path = '';
            }


            $sliders->save();
     
            return redirect('home')->with('message', 'Slider Added Succesfully!');
            

        } catch (\Throwable $th) {
    
            //throw $th;
            $response = [
              'ERROR' => false,
              'message' => "OOPS! Something wennt wrong"
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
        $sliders = Sliders::find($id);
        return view('liquidbox.homePage.edit', ['sliders'=>$sliders]); 
    }

    public function showAbout($id)
    {
        $abouts = Abouts::find($id);
        return view('liquidbox.homePage.editAbout', ['abouts'=>$abouts]); 
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

            $sliders = Sliders::find($request->id);

            $sliders->update([
                'headtext' => $request['headtext'],
            ]);

            if ($request->hasfile('file_path')) {
                $file = $request->file('file_path');
                $extension = $file->getClientOriginalExtension();
                $file_path = time() . '.' . $extension;
                $file->move('uploads/slider/', $file_path);
                $sliders->file_path = $file_path;
            } else {
                $sliders->save();
            }

            $sliders->save();
    
            return redirect('home')->with('message', 'Slider Updated  Succesfully!');
           

        } catch (\Throwable $th) {
   
            throw $th;
            $response = [
              'success' => false,
              'message' => "OOPS! Something fucking wennt wrong"
            ];
            return response()->json($response, 422);
        }
   
   }

   public function updateH(Request $request)
   {
       
       try {

           $abouts = abouts::find($request->id);

           $abouts->update([
               'about_text' => $request['about_text'],
           ]);
           $abouts->save();
   
           return redirect('home')->with('message', 'About Updated  Succesfully!');
          

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
             
        $sliders = Sliders::find($id);

        $sliders->delete('delete from home where id = ?',[$id]);
        
        return redirect('home')->with('message','Image deleted successfully');
    }
}
