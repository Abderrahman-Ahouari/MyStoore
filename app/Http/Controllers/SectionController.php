<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\section;

class SectionController extends Controller
{
        public function create(Request $request){
        $validateData = $request->validate([
            'name'=>'required|string|max:70',   
            'description'=>'required|string|max:400',   
        ]);

        section::create($validateData);
        }

        public function update(request $request,$id){
            $section = section::findorFail($id);

            $validateData = $request->validate([
                'name'=>'nullable|string|max:70',   
                'description'=>'nullable|string|max:400',   
            ]);
             $section::update($validateData);
        }

        public function destroy($id){
            $section = section::findorFail($id);

            $section->delete();
        }

        public function getAll(){
            $section = DB::table('sections')->get();
            return responce()->json($section);
        }
}
