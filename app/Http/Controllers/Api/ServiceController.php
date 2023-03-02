<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index(){
        $service = Service::all();

        return $service ;
    }


    public function store(Request $request){
        
        $service = $request->all() ; 
        $name = $service['name'];

        Service::create([

            'name' => $name ,
        ]);
        return 'done';
    }

    public function destroy($id){
        Service::find($id)->delete();
        return $this->index();
    }

    public function update(Request $request ,$id){
        $serviceup = Service::findOrFail($id) ;
        $service = $request->all() ; 
        $name = $service['name'];
        $serviceup->update([
            'name'=>$name
        ]);
        return $this->index();
    }
}
