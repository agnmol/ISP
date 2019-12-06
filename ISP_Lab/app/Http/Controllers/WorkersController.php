<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class WorkersController extends Controller
{
    public function index()
    {
      //  $workers = \App\Workers::all();
        $workers = \App\Workers::with('person','duty')
                                ->where('atleistas', 0)
                                ->get();
        return view('workers', compact('workers'));
    }

    public function addWorker()
    {
        $people = \App\People::whereDoesntHave('worker')->get();
        $duties = \App\Duties::all();
        return view('addWorker', compact('people','duties'));
    }
    public function insertWorker(Request $request, $id = null)
    {

        $validator = Validator::make(
            [   'idarbinimo_data'=>$request->input('date'),
                'adresas' =>$request->input('address'),
                'tab_nr' =>$request->input('tab'),
                'asmuo' =>$request->input('person'),
                'pareigos' => $request->input('duty')
            ],
            [   'idarbinimo_data' => "required|date_format:Y-m-d",
                'adresas' => 'required|max:50',
                'tab_nr' =>'required|alpha_num|min:11|max:11',
                'pareigos' =>'required|integer',
                'asmuo' =>  'required|integer'
            ]
        );

        if ($validator->fails())
        {
            return Redirect::back()->withErrors($validator);
        }
        else
        {
            if(!isset($id)){
                $worker = new \App\Workers();
            }else{
                $worker = \App\Workers::find($id);
            }

                $worker->idarbinimo_data  = $request->input('date');
                $worker->adresas = $request->input('address');
                $worker->tab_nr = $request->input('tab');
                $worker->asmuo = $request->input('person');
                $worker->pareigos= $request->input('duty');

            $worker->save();
        }
        return redirect()->back()->with('success', 'Darbuotojas pridėtas');
    }

    public function fireWorker($id){
        $workers = \App\Workers::where('id',$id)->update(array('atleistas' => 1));
        return redirect()->back()->with('success', 'Darbuotojas pašalintas');
    }

    public function editWorker($id){
        $duties = \App\Duties::all();
        $worker = \App\Workers::with('person','duty')->where('id', $id)->first();
        return view('editWorker', compact('worker', 'duties'));
    }
}
