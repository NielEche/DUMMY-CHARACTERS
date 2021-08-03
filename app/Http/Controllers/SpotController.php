<?php

namespace App\Http\Controllers;

use App\Models\Spotify;
use Illuminate\Http\Request;

class SpotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
            $spotify = new Spotify();

            $spotify->link = $request->link;

            $spotify->save();
     
            return redirect('sound')->with('message', 'Spotify Added Succesfully!');
            

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
        $spotify = Spotify::find($id);
        return view('liquidbox.sound.editspotify', ['spotify'=>$spotify]); 
    }


    /**
     * Show the form for editing the specified resource.
     *x
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

            $spotify = Spotify::find($request->id);

            $spotify->update([
                'link' => $request['link'],
            ]);


            $spotify->save();
    
            return redirect('sound')->with('message', 'spotify Updated  Succesfully!');
           

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
        $spotify = Spotify::find($id);

        $spotify->delete('delete from spotify where id = ?',[$id]);
        
        return redirect('sound')->with('message','spotify deleted successfully');
      
    }
}
