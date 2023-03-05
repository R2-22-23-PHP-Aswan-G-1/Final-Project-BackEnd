<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\languageResource;
use App\Models\Language;
use Illuminate\Http\Request;

class languageController extends Controller
{
   public function index() {
    return (['message' => 'success' , 'languages' => languageResource::collection(Language::all()) ]  );
   }

   public function destroy( Language $language) {
    Language::destroy($language);
    return (['message' => 'success']);
   }

   public function store(Request $request){
    $request->validate([
        'name'=>"required"
    ]);
    Language::create([
        'name'=>$request->name,
    ]);
    return (['message' => 'success']);
   }  
}
