<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $users = DB::table('users')->paginate(3);
        return view('index',['users' => $users]);
    }
    public function create(){
        return view('create');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'address' => 'required',
            'city' => 'required',
            'gender' => 'required',
        ]);
        
        DB::table('users')->insert([
            'name'=> $request->name,
            'address'=> $request->address,
            'city'=> $request->city,
            'gender'=> $request->gender,
        ]);
        return redirect()->route('index')->with('message','user created successfully');
    }
    public function edit($id)
    {
        $users = DB::table('users')->find($id);
        return view('edit', ['users' => $users]);       
    }
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'address' => 'required',
            'city' => 'required',
            'gender' => 'required',
        ]);
        DB::table('users')->where('id', $id)->update([
            'name'=> $request->name,
            'address'=> $request->address,
            'city'=> $request->city,
            'gender'=> $request->gender,
        ]);
        return redirect()->route('index')->with('message','user updated successfully');
    }
    public function delete($id)
    {
        DB::table('users')->where('id', $id)->delete();
        return redirect()->route('index')->with('message','user deleted successfully');
   
    }
}
