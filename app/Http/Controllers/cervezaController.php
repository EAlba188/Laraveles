<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cerveza;

class cervezaController extends Controller
{
    public function index(){
        
        return response()->json(Cerveza::all(), 200);
        
    }
    

    public function store(Request $request){
        try{
            
            $cervezaModel = Cerveza::create($request->all());
            $response = $cervezaModel->id;
            
        }catch(\Exception $ex){
            $response = -1;
        }
        return response()->json($response,200);
    }

    
    public function show($id){
        $cerveza = Cerveza::find($id);
        return response()->json($cerveza,200);
    }

    public function update(Request $request, $id){
       try{
           
           $cerveza = Cerveza::find($id);
           $response = $cerveza->update($request->all());
           
       }catch(\Exception $ex){
           
           $response = false;
           
       }
       
       return response()->json(['resultado'=>$response],200);
    }

    public function destroy($id){
        
       try{
           
           $response = Cerveza::destroy($id);
           
       }catch(\Exception $ex){
           
           $response = false;
           
       }
       
       return response()->json($response,200);
       
    }
}
