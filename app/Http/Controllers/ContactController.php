<?php

namespace App\Http\Controllers;


use DB;
use Illuminate\Http\Request;
use App\Http\Models;
use App\Models\Contact;

class ContactController extends Controller
{

    public function index()
    {
        $users = DB::select('select * from contacts');
        return view('view',['users'=>$users]);
    }


    public function create()
    {
        return view('contact');
    }


    public function store(Request $request)
    {
        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $address = $request->input('address');
        $email = $request->input('email');
        $data=array('firstname'=>$firstname,"lastname"=>$lastname,"address"=>$address,"email"=>$email);
        DB::table('contacts')->insert($data);
        echo "Record inserted successfully.<br/>";
        echo '<a href = "/view">Click Here</a> to go back.';



    }


    public function show($id)
    {
        $users = DB::select('select * from contacts where id = ?',[$id]);
        return view('edit-delete',['users'=>$users]);
    }


    public function edit(Request $request,$id)
    {
        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $email = $request->input('email');
        $address = $request->input('address');
        DB::update('update contacts set firstname = ?,lastname=?,email=?,address=? where id = ?',[$firstname,$lastname,$email,$address,$id]);
        echo "Record updated successfully.<br/>";
      echo '<a href = "/view">Click Here</a> to go back.';

    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        DB::delete('delete from contacts where id = ?',[$id]);
        echo "Record deleted successfully.";
        echo '<a href = "/view">Click Here</a> to go back.';
        echo 'Click Here to go back.';
    }
}
