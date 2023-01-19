<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function store(Request $request)
    {
       /*
        $client = Client::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'id_number' => $request->id_number
        ]);
        
        return response()->json($client);
        */
        Client::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'id_number' => $request->id_number
        ]);

       
    }

    public function show($id){
        $client = Client::find($id);
        
        return response()->json($client);

        

    }


    
    public function show_name($name){
        $client = Client::select('id', 'name', 'email', 'id_number')->
            where('name', '=', $name)->first();
        
        return response()->json($client); 

    }

    public function search_text($text){
        $client = Client::select('id', 'name', 'email', 'id_number')->
            where('name', 'LIKE', '%'.$text.'%')->get();
        
        return response()->json($client); 

    }

    public function search_bills_client($client){
        $bill = Bill::where('client_id', $client)->get();
        
        return response()->json($bill); 

    }

}
