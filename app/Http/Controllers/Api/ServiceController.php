<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function indix(){
        $service = Service::all();

        return $service ;
    }

    public function store(Request $request){
        
        $name = $request['name'] ; 

        Service::create([

            'name' => $name ,
        ]);
        return 'done';
    }

    public function destroy($id){
        Service::find($id)->delete();
        return redirect('/services');
    }

    public function update(Request $request ,$id){
        $serviceup = Service::findOrFail($id) ;
        $name = $service['name'];
        $service->update([
            'name'=>$name
        ]);
        return redirect('/services');
    }
}
