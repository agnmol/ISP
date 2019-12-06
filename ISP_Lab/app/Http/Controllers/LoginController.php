<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function index()
    {
        return view('mainLayouts.login');
    }
    public function login(Request $request)
    {
      $user = \App\People::where('prisijungimo_vardas', $request->input('uname'))->where('slaptazodis', $request->input('psw'))->first();
      if (isset($user)) {
        $usr = \App\Workers::with('person')->where('asmuo',$user->id)->first();
        if (isset($usr)){
          session(['asmuo' => $usr]);
          return view('mainLayouts.home');
        }
        $usr = \App\Customers::with('person')->where('asmuo',$user->id)->first();
        if (isset($usr)){
          session(['asmuo' => $usr]);
          return view('mainLayouts.home');
        }
      }
      return view('mainLayouts.login');
    }
    public function register(Request $request)
    {
      $validator = Validator::make(
        [   'prisijungimo_vardas'=>$request->input('uname'),
            'slaptazodis' =>$request->input('psw'),
            'vardas' =>$request->input('name'),
            'pavarde' =>$request->input('sname'),
            'telefono_numeris' => $request->input('phone'),
            'el_pastas' => $request->input('email'),
            'asmens_kodas' => $request->input('code'),
            'gimimo_data' => $request->input('date')
        ],
        [   'prisijungimo_vardas'=> "required",
            'slaptazodis' => "required",
            'vardas' =>"required",
            'pavarde' =>"required",
            'telefono_numeris' => "required",
            'el_pastas' => "required",
            'asmens_kodas' => "required",
            'gimimo_data' => "required"
        ]
      );
      if ($validator->fails())
      {
          return Redirect::back()->withErrors($validator);
      }
      $asmuo = new \App\People();
      $asmuo->prisijungimo_vardas = $request->input('uname');
      $asmuo->slaptazodis = $request->input('psw');
      $asmuo->vardas =$request->input('name');
      $asmuo->pavarde = $request->input('sname');
      $asmuo->telefono_numeris = $request->input('phone');
      $asmuo->el_pastas = $request->input('email');
      $asmuo->asmens_kodas = $request->input('code');
      $asmuo->gimimo_data = $request->input('date');
      $asmuo->save();
      $asmuo = \App\People::where('prisijungimo_vardas', $request->input('uname'))->first();
      $klientas = new \App\Customers();
      $klientas->nepageidaujamas = 0;
      $klientas->neigalusis = 0;
      $klientas->asmuo = $asmuo->id;
      $klientas->save();
      $klientas = \App\Customers::with('person')->where('asmuo', $asmuo-id)->first();
      session(['asmuo' => $klientas]);
      return view('mainLayouts.home');
    }
}
