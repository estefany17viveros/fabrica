<?php

namespace App\Http\Controllers;

use App\Models\training_center;
use Illuminate\Http\Request;

class training_centerController extends Controller
{
    public function create(){
        return view('frm');
        
            }
        
            public function store(request $request){
        
        $training = new training_center();
        $training->name=$request->name;
        $training->location=$request->location;
        $training->save();
        
        return $training;
            }
            
        
            // Eliminar un perfil
            public function destroy(training_center $training)
            {
                $training->delete();
                return redirect()->route('training.store');
            }
}
