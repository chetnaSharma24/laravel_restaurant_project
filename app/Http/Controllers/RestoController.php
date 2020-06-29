<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Restaurant;
class RestoController extends Controller
{
    //
    function index(){
         
            //$blogs = Restaurant::latest()->paginate(5);
      
           // return view('home',compact('blogs'))
             //  ->with('i', (request()->input('page', 1) - 1) * 5);
        
       // return view('home');
       $data = DB::table('restaurants')->paginate(2);
       return view('home',["data"=>$data]);
        

    }


   function list(){
       $data= restaurant::all();
       return view('list',["data"=>$data]);
   }
   function add(Request $req){
      // return $req->input();
       $resto=new Restaurant;
       $resto->name=$req->input('name');
       $resto->email=$req->input('email');
       $resto->address=$req->input('address');
       $resto->save();
       $req->session()->flash('status','restaurant submitted succesfully');
       return redirect('list');
   }
   function delete($id){
      // return $id;

      Restaurant::find($id)->delete();
      session()->flash('status','restaurant deleted succesfully');
      return redirect('list');
   }
      
      function edit($id){
        // return $id;
  
        $data= Restaurant::find($id);
        return view('edit',["data"=>$data]);
   }
   function update(Request $req){
    $resto= Restaurant::find($req->input('id'));
    $resto->name=$req->input('name');
    $resto->email=$req->input('email');
    $resto->address=$req->input('address');
    $resto->save();
    session()->flash('status','restaurant updated succesfully');
      return redirect('list');

   }
}
