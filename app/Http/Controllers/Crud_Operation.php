<?php

namespace App\Http\Controllers;

use App\Models\promotion;
use Illuminate\Http\Request;
use App\Models\Apprentice;
use Illuminate\Support\Facades\DB;


class Crud_Operation extends Controller
{
    //create a controller named crud_operation it has two method one that redirect u to welcome page
    //the other insert data into database

    public function Form_Page()
    {
        return view('add');
    }
    //fct for inserting data in ur database
    public function Insert(Request $req)
    {
        $promo = new promotion();
        $promo->name = $req->name;
        $promo->save();
        return redirect("index");
    }
    //fct for displaying your date in your database
    public function index()
    {
        $data = promotion::all(); //this is a static method inherited by apprentice display all rows
        return view("index", compact('data'));
    }
    //fct for retrieving the specific data you want to edit by its id 
    public function Retriever($id)
    {
        $student = DB::table('apprentices')
            ->join('promotions', 'promotions.id', '=', 'apprentices.promotion_id')
            ->select('apprentices.*')
            ->where('promotions.id', $id)
            ->get();
        $data = promotion::where('id', $id)->get();

        return view("Edit", compact('student', 'data'));
    }
    //fct for inserting the modified data coming from the update post route champ
    public function update(Request $req, $id)
    {
        $promo = promotion::where('id', $id)->update(["name" => $req->name]);
        return redirect("index");
    }
    //fct for deleting the specific data you want to delete by its id
    public function Delete($id)
    {
        promotion::where('id', $id)->delete();
        return redirect("index");
    }
}
