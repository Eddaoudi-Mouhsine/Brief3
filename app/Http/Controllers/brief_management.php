<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brief;
use App\Models\Task;

class brief_management extends Controller
{
    //
    public function briefFormRetriever()
    {
        return view("addBrief");
    }
    public function InsertBrief(Request $req)
    {
        $brief = new Brief();
        $brief->name = $req->name;
        $brief->creation_date = $req->creation_date;
        $brief->recuperation_date = $req->recupration_date;
        $brief->save();
        return redirect("BriefIndex");
    }
    public function indexBrief()
    {
        $brief = Brief::all(); //this is a static method inherited by Brief display all rows
        return view("BriefIndex", compact('brief'));
    }
    public function Retriever_brief($id)
    {

        $briefdata = Brief::where('id', $id)->first();
        $briefDATA = $briefdata->task;

        $brief = Brief::where('id', $id)->get();

        return view("EditBrief", compact('brief', 'briefDATA'));
    }
    public function updateBrief(Request $req, $id)
    {
        Brief::where('id', $id)->update(["name" => $req->name, "creation_date" => $req->creation_date, "recuperation_date" => $req->recuperation_date]);
        return redirect("BriefIndex");
    }
    public function DeleteBrief($id)
    {
        Brief::where('id', $id)->delete();
        return redirect("BriefIndex");
    }
}
