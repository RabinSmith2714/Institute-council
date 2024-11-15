<?php

namespace App\Http\Controllers;

use App\Models\Journal;
use App\Models\Consultancy;
use App\Models\Fundedproject;
use App\Models\Awarenessprogram;
use App\Models\Conference;
use App\Models\Patent;
use Illuminate\Http\Request;


class userController extends Controller
{
    public function admin()
    {
        $data = Journal::all();
        $data1 = Consultancy::all();
        $data2 = Fundedproject::all();
        $data3 = Awarenessprogram::all();
        $data4 = Conference::all();
        $data5 = Patent::all();
        return view('hod', compact('data', 'data1', 'data2', 'data3', 'data4', 'data5'));
    }


    // add journal
    public function addJournal(Request $request)
    {
        $request->validate([
            'image' => 'file|mimes:pdf,doc,docx,png,jpg,jpeg,ppt|max:10240',
        ]);
        if ($request->hasfile('image')) {
            $image = $request->file('image');
            $name = $image->getClientOriginalName();
            $image->move(public_path('uploads'), $name);
            Journal::create([
                'faculty_name' => $request->faculty_name,
                'faculty_id' => $request->faculty_id,
                'type' => $request->type,
                'title' => $request->title,
                'volume' => $request->volume,
                'issuenumber' => $request->issuenumber,
                'page' => $request->Page,
                'date' => $request->date,
                'link' => $request->link,
                'noauthor' => $request->noauthor,
                'uploadfile' => $name,
            ]);
            return response()->json([
                'status' => 200,
                'message' => 'Journal added successfully'
            ]);
        } else {
            Journal::create($request->all());
            return response()->json([
                'status' => 200,
                'message' => 'Journal added successfully'
            ]);
        }
    }
    // delete Journal
    public function deleteJournal($id)
    {
        $user = Journal::findorFail(id: $id);
        $user->delete();
        return response()->json(data: [
            'status' => 200,
            'message' => 'Journal deleted sucessfully'
        ]);
    }
    // edit Journal



    // add consultancy
    public function addConsultancy(Request $request)
    {
        $request->validate([
            'image' => 'file|mimes:pdf,doc,docx,png,jpg,jpeg,ppt|max:10240',
        ]);

        if ($request->hasfile('image')) {
            $image = $request->file('image');
            $name = $image->getClientOriginalName();
            $image->move(public_path('uploads'), $name);

            Consultancy::create([
                'faculty_name' => $request->faculty_name,
                'faculty_id' => $request->faculty_id,
                'title' => $request->title,
                'type' => $request->industryType,
                'date' => $request->date,
                'moe' => $request->moe,
                'earnings' => $request->earnings,
                'uploadfile' => $name,
            ]);
            return response()->json([
                'status' => 200,
                'message' => 'Consultancy added successfully'
            ]);
        } else {
            Consultancy::create($request->all());
            return response()->json([
                'status' => 200,
                'message' => 'Consultancy added successfully'
            ]);
        }
    }
    // delete Consultancy
    public function deleteConsultancy($id)
    {
        $user = Consultancy::findorFail(id: $id);
        $user->delete();
        return response()->json(data: [
            'status' => 200,
            'message' => 'Consultancy deleted sucessfully'
        ]);
    }


    // add funded project
    public function addFundedproject(Request $request)
    {
        $request->validate([
            'image' => 'file|mimes:pdf,doc,docx,png,jpg,jpeg,ppt|max:10240',
        ]);
        if ($request->hasfile('image')) {
            $image = $request->file('image');
            $name = $image->getClientOriginalName();
            $image->move(public_path('uploads'), $name);

            Fundedproject::create([
                'faculty_name' => $request->faculty_name,
                'faculty_id' => $request->faculty_id,
                'type' => $request->type,
                'title' => $request->title,
                'date' => $request->date,
                'projectid' => $request->projectid,
                'fundingagency' => $request->fundingagency,
                'link' => $request->link,
                'requestedamount' => $request->requestedamount,
                'uploadfile' => $name
            ]);
            return response()->json([
                'status' => 200,
                'message' => 'Funded Projects added successfully'
            ]);
        } else {
            Fundedproject::create($request->all());
            return response()->json([
                'status' => 200,
                'message' => 'Funded Project added successfully'
            ]);
        }
    }
    // delete Fundedprojects
    public function deleteFundedproject($id)
    {
        $user = Fundedproject::findorFail(id: $id);
        $user->delete();
        return response()->json(data: [
            'status' => 200,
            'message' => 'Funded Project deleted sucessfully'
        ]);
    }


    // add awareness program    
    public function addAwarenessprogram(Request $request)

    {
        $request->validate([
            'image' => 'file|mimes:pdf,doc,docx,png,jpg,jpeg,ppt|max:10240',
        ]);
        if ($request->hasfile('image')) {
            $image = $request->file('image');
            $name = $image->getClientOriginalName();
            $image->move(public_path('uploads'), $name);
            Awarenessprogram::create([
                'faculty_name' => $request->faculty_name,
                'faculty_id' => $request->faculty_id,
                'organiserName' => $request->organiserName,
                'programName' => $request->programName,
                'date' => $request->date,
                'placeHeld' => $request->placeHeld,
                'programDetails' => $request->programDetails,
                'speaker' => $request->speaker,
                'uploadfile' => $name,
            ]);
            return response()->json([
                'status' => 200,
                'message' => 'Awareness Program added successfully'
            ]);
        } else {
            Awarenessprogram::create($request->all());
            return response()->json([
                'status' => 200,
                'message' => 'Awareness Program added successfully'
            ]);
        }
    }
    // delete Awareness Program
    public function deleteawarenessProgram($id)
    {
        $user = Awarenessprogram::findorFail(id: $id);
        $user->delete();
        return response()->json(data: [
            'status' => 200,
            'message' => 'Awareness Program deleted sucessfully'
        ]);
    }
  

    // add Conference
    public function addConference(Request $request)
    {
        $request->validate([
            'image' => 'file|mimes:pdf,doc,docx,png,jpg,jpeg,ppt|max:10240',
        ]);
        if ($request->hasfile('image')) {
            $image = $request->file('image');
            $name = $image->getClientOriginalName();
            $image->move(public_path('uploads'), $name);
            Conference::create([
                'faculty_name' => $request->faculty_name,
                'faculty_id' => $request->faculty_id,
                'Title' => $request->Title,
                'organizer' => $request->organizer,
                'publisher_name' => $request->publisher_name,
                'indexing_detail' => $request->indexing_detail,
                'level' => $request->level,
                'date' => $request->date,
                'title_of_paper' => $request->title_of_paper,
                'isbn' => $request->isbn,
                'no_of_authors' => $request->no_of_authors,
                'authors_position' => $request->authors_position,
                'link' => $request->link,
                'uploadfile' => $name,
            ]);
            return response()->json([
                'status' => 200,
                'message' => 'Conference added successfully'
            ]);
        } else {
            Conference::create($request->all());
            return response()->json([
                'status' => 200,
                'message' => 'Conference added successfully'
            ]);
        }
    }
    // delete Conference
    public function deleteConference($id)
    {
        $user = Conference::findorFail(id: $id);
        $user->delete();
        return response()->json(data: [
            'status' => 200,
            'message' => 'Conference deleted sucessfully'
        ]);
    }


    // add patent
    public function addPatent(Request $request)
    {
        $request->validate([
            'image' => 'file|mimes:pdf,doc,docx,png,jpg,jpeg,ppt|max:10240',
        ]);
        if ($request->hasfile('image')) {
            $image = $request->file('image');
            $name = $image->getClientOriginalName();
            $image->move(public_path('uploads'), $name);
            Patent::create([
                'faculty_name' => $request->faculty_name,
                'faculty_id' => $request->faculty_id,
                'title' => $request->title,
                'field_of_innovation' => $request->field_of_innovation,
                'date' => $request->date,
                'no_of_authors' => $request->no_of_authors,
                'authors_position' => $request->authors_position,
                'file_name' => $name,
            ]);
            return response()->json([
                'status' => 200,
                'message' => 'Patent added successfully'
            ]);
        } else {
            Patent::create($request->all());
            return response()->json([
                'status' => 200,
                'message' => 'Patent added successfully'
            ]);
        }
    }
    // delete Patent
    public function deletePatent($id)
    {
        $user = Patent::findorFail(id: $id);
        $user->delete();
        return response()->json(data: [
            'status' => 200,
            'message' => 'Patent deleted sucessfully'
        ]);
    }
    
}
