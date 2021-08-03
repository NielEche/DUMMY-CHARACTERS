<?php

namespace App\Http\Controllers;

use App\Models\Soundcloud;
use App\Models\Spotify;
use App\Models\Apple;
use App\Models\Videos;
use Illuminate\Http\Request;

class SoundController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $soundcloud = Soundcloud::all();
        $spotify = Spotify::all();
        $apple = Apple::all();
        $videos = Videos::all();
        return view('liquidbox.sound.index', compact(['soundcloud', 'spotify', 'apple', 'videos']));
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
            $soundcloud = new Soundcloud();

            $soundcloud->link = $request->link;

            $soundcloud->save();
     
            return redirect('sound')->with('message', 'Soundcloud Added Succesfully!');
            

        } catch (\Throwable $th) {
    
            //throw $th;
            $response = [
              'ERROR' => false,
              'message' => "OOPS! Something wennt wrong"
            ];
            return response()->json($response, 422);
        }
 
    
    }


    public function showData($id)
    {
        $soundcloud = Soundcloud::find($id);
        return view('liquidbox.sound.editsound', ['soundcloud'=>$soundcloud]); 
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

            $soundcloud = Soundcloud::find($request->id);

            $soundcloud->update([
                'link' => $request['link'],
            ]);


            $soundcloud->save();
    
            return redirect('sound')->with('message', 'Soundcloud Updated  Succesfully!');
           

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
        $soundcloud = Soundcloud::find($id);

        $soundcloud->delete('delete from soundcloud where id = ?',[$id]);
        
        return redirect('sound')->with('message','soundcloud deleted successfully');
      
    }
}
