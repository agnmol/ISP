<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\jobReminderMail;
use Illuminate\Support\Facades\Mail;

class JobsController extends Controller
{
    public function index()
    {
        if (session('darbuotojas.pareigos') == 1) {
          $jobs = \App\Jobs::with('worker')->where('vykdomas', 1)->get();
          $workers = \App\Workers::where('atleistas', 0)->get();
          return view('allJobs', compact('jobs', 'workers'));
        } else {
          $jobs = \App\Jobs::with('worker')->where('vykdomas', 1)->where('atlieka', session('darbuotojas.id'))->get();
          return view('allJobs', compact('jobs'));
        }
    }

    public function add()
    {
        return view('addJob');
    }
    public function addJob(Request $request)
    {
      $job = new \App\Jobs();
      $job->pavadinimas = $request->input('name');
      $job->aprasymas = $request->input('about');
      $job->data = $request->input('date');
      $job->priskyre = session('darbuotojas.id');
      $job->vykdomas = 1;
      $job->save();
      return redirect()->back()->with('success', 'Darbas pridėtas');
    }
    public function editJob(Request $request, $id=null)
    {
      if ($id != null) {
        $job = \App\Jobs::find($id);
        $job->pavadinimas = $request->input('name');
        $job->aprasymas = $request->input('about');
        $job->data = $request->input('date');
        $job->atlieka = $request->input('assignee');
        $job->save();
        return redirect()->back()->with('success', 'Darbas redaguotas');
      }
      return redirect()->back();
    }
    public function delete($id = null)
    {
      if ($id != null){
        $job = \App\Jobs::find($id);
        $job->vykdomas = 0;
        $job->save();
        return redirect()->back()->with('success', 'Darbas įvykdytas');
      }
      return redirect()->back();
    }
    public function edit($id = null)
    {
      if ($id != null)
      {
        $job = \App\Jobs::find($id);
        $workers = \App\Workers::where('atleistas', 0)->get();
        return view('editJob', compact('job','workers'));
      }
      return redirect()->back();
    }
    public function sendReminder($id = null)
    {
      if ($id != null)
      {
        $job = \App\Jobs::with('worker')->find($id);
        $person = \App\Workers::with('person')->find($job->worker->id);
        Mail::to($person->person->el_pastas)->send(new jobReminderMail($job));
        return redirect()->back()->with('success', 'Priminimas nusiųstas');
      }
      return redirect()->back();
    }
}
