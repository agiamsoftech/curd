<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    function insertTodo(Request $req){
        // dd($req['totoid']);
        if(!empty($req['totoid'])){
            $data   =   Todo::find($req['totoid']);
            // dd($data);
        }else{
            $data   =   new Todo();
        }
        $data->name             =   $req['name'];
        $data->email     =   $req['email'];
        $data->save();
        return redirect("/viewtodo");
        
    }
    function viewtodo(Request $req)
    {
        $datas = Todo::all();
        return view('managetodo',[
            'datas' => $datas
        ]);
    }
    function edittodo($data)
    {
        $data = Todo::find($data);
        return view('updatetodo',[
            'data' => $data                                   
        ]);
        
    }
    function destory($id)
    {
        $data = Todo::find($id)->delete();
        return redirect("/viewtodo");        
    }
}
