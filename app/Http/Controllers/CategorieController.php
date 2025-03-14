<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\categorie;


class CategorieController extends Controller
{
        public function create(Request $request){
        $validateData = $request->validate([
            'name'=>'required|string|max:70',   
            'description'=>'required|string|max:400',   
        ]);

        categorie::create($validateData);
        }

        public function update(request $request,$id){
            $categorie = categorie::findorFail($id);

            $validateData = $request->validate([
                'name'=>'nullable|string|max:70',   
                'description'=>'nullable|string|max:400',   
            ]);
             $categorie::update($validateData);
        }

        public function destroy($id){
            $categorie = categorie::findorFail($id);

            $categorie->delete();
        }

        public function getAll(){
            $categories = DB::table('categories')->get();
            return responce()->json($categories);
        }
}
