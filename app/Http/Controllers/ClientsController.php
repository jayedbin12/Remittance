<?php

namespace App\Http\Controllers;
use App\Models\Clients;

use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function showUsers(Request $request){
        $search = $request['search'] ?? "";
        if($search != ""){
            $clients = Clients::where('id','=',$search)->orWhere('email','LIKE',"%$search%")->get(); // "%$search%")->orWhere('id','LIKE','%$search%')->get();
        }
        else{
        $clients = Clients::all();}
        return view('clients.view',compact('clients','search'));
    }
    
    public function deleteUser($id){
        $data = Clients::find($id);
        $data->delete();
        return redirect()->back();
    }
}