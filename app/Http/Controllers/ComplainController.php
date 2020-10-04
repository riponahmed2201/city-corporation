<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Complain;

use Yajra\DataTables\Facades\DataTables;

class ComplainController extends Controller
{
    public function create_complain()
    {
        return view('complain.create_complain');
    }

    public function show_complain()
    {
        $complains = Complain::all();
        return view('complain.all_complain', compact('complains'));
    }

    public function show_Data(){
        $complains = Complain::all();
        $data_table_render= DataTables::of($complains)
            ->addColumn('DT_RowIndex',function ($row){
                return '<input type="checkbox" id="qst_id_'.$row["id"].'">';
            })
            //add edit and delte option
                ->addColumn('action',function ($row){
                    $edit_url=url('complain/edit-complain/'.$row['id']);
                return '<a href="'.$edit_url.'" class="btn btn-info btn-xs"><i class="far fa-edit"></i></a>'."&nbsp&nbsp;".
                     '<button onClick="deleteComplain('.$row['id'].')" class="btn btn-danger btn-xs"><i class="far fa-trash-alt"></i></button>';
            })
            ->rawColumns(['DT_RowIndex','action'])
            ->addIndexColumn()
            ->make(true);
        return $data_table_render;
    }

    public function store_complain(Request $request)
    {
        $this->validate($request,[
            'complain_category' => 'required',
            'name' => 'required',
            'nid' => 'required',
            'phone' => 'required',
            'picture1' => 'required',
            'picture2' => 'required',
            'picture3' => 'required',
            'picture4' => 'required',
            'status' => 'required',
            'resulation' => 'required',
            'complain_details' => 'required',
            'resulation' => 'required'
        ]);
        
        $complains = new Complain;
        $complains->complain_category = $request->complain_category;
        $complains->name = $request->name;
        $complains->nid = $request->nid;
        $complains->phone = $request->phone;
        $complains->picture1 = $request->picture1;
        $complains->picture2 = $request->picture2;
        $complains->picture3 = $request->picture3;
        $complains->picture4 = $request->picture4;
        $complains->status = $request->status;
        $complains->resulation = $request->resulation;
        $complains->complain_details = $request->complain_details;
        $complains->resulation = $request->resulation;
        $complains->save(); 

        return redirect()->back()->with('success','Complain Added Successfully!');
    }

    public function edit_complain($id)
    {
        $complain = Complain::find($id);
         return view('complain.edit_complain', compact('complain'));
    }

    public function update_complain(Request $request, $id)
    {
        $this->validate($request,[
            'resulation' => 'required'
        ]);

        $complains = Complain::find($id);
        // $complains->update($request->all());


        // $complains->complain_category = $request->complain_category;
        // $complains->name = $request->name;
        // $complains->nid = $request->nid;
        // $complains->phone = $request->phone;
        // $complains->picture1 = $request->picture1;
        // $complains->picture2 = $request->picture2;
        // $complains->picture3 = $request->picture3;
        // $complains->picture4 = $request->picture4;
        // $complains->status = $request->status;
        // $complains->resulation = $request->resulation;
        // $complains->complain_details = $request->complain_details;
        $complains->resulation = $request->resulation;
        $complains->save(); 

        return redirect()->route('show_complain')->with('success','Complain Updated Successfully!');
    }
    public function delete_complain($id)
    {
        $complain = Complain::find($id);
        $complain->delete();
        return redirect()->back()->with('danger','Complain Deleted Successfully!');
        // if($complain){
        //     $complain->delete();
        //     return response()->json('success',201);
        // }else{
        //     return response()->json('error',422);
        // }
    }

}
