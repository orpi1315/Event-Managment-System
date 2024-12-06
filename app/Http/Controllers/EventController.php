<?php

namespace App\Http\Controllers;
use App\Models\Event;
use App\Models\Category;
use App\Models\Contract;
use Illuminate\Http\Request;

class EventController extends Controller
{
    //
    public function index(){
        return view('back.form');
    }
    public function cat_index(){
        return view('cat.form');
    }

    public function indexshow(){
        $show=Event::all();
        return view('back.table',compact('show'));
    }

    public function submit(Request $req){
        $store=new Event();
        $store->name=$req->name;
        $store->email =$req->email;
        $store->phone=$req->phone;
        $store->guest=$req->nog;
        $store->event=$req->event;
        $store->time=$req->time;
        $store->date=$req->date;
        $store->save();
        return redirect()->back();
    }
    public function table(){
        $show=Category::all();
        return view('cat.table',compact('show'));
    }
    public function save(Request $req){
        $store=new Category();
        $store->cat_name=$req->name;
        $store->cat_des =$req->email;
        $store->cat_venue=$req->phone;
        $store->cat_seat=$req->date;
        $store->cat_ticket=$req->time;
        $store->save();
        return redirect()->back();
    }
    public function reservation(Request $req){
        $store=new Event();
        $store->name=$req->name;
        $store->email =$req->email;
        $store->phone=$req->phone;
        $store->guest=$req->nog;
        $store->event=$req->event;
        $store->time=$req->time;
        $store->date=$req->date;
        $store->save();
        return redirect()->to('Event-Table');
    }

    public function editevent($id){
        $check=Event::find($id);
        return view('back.edit',compact('check'));
    }
    public function edit($id){
        $check=Category::find($id);
        return view('cat.edit',compact('check'));
    }

    public function updatecat(Request $req){
        
        $store= Category::find($req->c_id);
        $store->cat_name = $req->name ?? $store->cat_name;
$store->cat_des = $req->email ?? $store->cat_des;
$store->cat_venue = $req->phone ?? $store->cat_venue;
$store->cat_seat = $req->date ?? $store->cat_seat;
$store->cat_ticket = $req->time ?? $store->cat_ticket;

        $store->save();
        return redirect()->to('Category-Table');
        
    }
    public function update(Request $req){
        
        $store= Event::find($req->id);
        $store->name=$req->name;
        $store->email=$req->email;
        $store->phone=$req->phone;
        $store->guest=$req->nog;
        $store->event=$req->event;
        $store->time=$req->time;
        $store->date=$req->date;
        $store->save();
        return redirect()->to('Event-Table');
        
    }

    public function delevent($id){
        $show=Event::find($id);
        $show->delete();
        return redirect()->back();
    }
    public function del($id){
        $show=Category::find($id);
        $show->delete();
        return redirect()->back();
    }

    // Contract
    public function contract(Request $req){
        $store=new Contract();
        $store->name=$req->name;
        $store->email =$req->email;
        $store->message=$req->InputMessage;

        $store->save();
        return redirect()->to('/');
    }
  
    public function contract_table(){
        $show=Contract::all();
        return view('contract.table',compact('show'));
    }
}
