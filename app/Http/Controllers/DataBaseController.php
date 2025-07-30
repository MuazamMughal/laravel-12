<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;

class DataBaseController extends Controller
{
    public function adddata(Request $request){
        $StoredData = new Data();
        $StoredData->email = $request->email;
        $StoredData->username = $request->username;
        $StoredData->number = $request->number;
        $StoredData->password = $request->password;
        $StoredData->save();
        $request->session()->flash('message', 'Data Successfully Added');
        return redirect('data1');
    }

    public function getdata(){
        $data = Data::all();
        return view('data_list',['data'=>$data]);
    }
    public function delete(Request $request , $id){
        $data = Data::find($id);
        $data->delete();
        $request->session()->flash('deletemessage', 'Data Successfully Deleted');
        return redirect('data_list');
    }
    public function edit($id){
        // $req = Data::find($id);
        // return view('edit_page', ['data' => $req]);
        return view('edit_page');
    }
}
