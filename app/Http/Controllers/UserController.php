<?php

namespace App\Http\Controllers;

use App\Models\ContactInfos;
use App\Models\Events;
use App\Models\Courses;
use App\Models\About;
use App\Models\Messages;
use App\Models\Projects;
use Illuminate\Support\Carbon;


use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Foreach_;

class UserController extends Controller
{
   public function showIndex()
   {
      return view('fronts.index');
   }

   public function showAbout()
   {

      $aboutInfos = About::all();
      foreach ($aboutInfos as $aboutInfo) {
         $history = $aboutInfo->history;
         $mission = $aboutInfo->mission;
         $vision = $aboutInfo->vision;
      }
      $aboutInfos = [
         'history' => $history,
         'mission' => $mission,
         'vision' => $vision
      ];

      return view('fronts.about')->with('aboutInfos', $aboutInfos);
   }





   public function showMissionVision()
   {
      return view('fronts.mission_vision');
   }

   public function showCourses()
   {
      $courses = Courses::paginate(6);

      return view('fronts.courses')->with('courses',$courses);
   }


   public function showCourse($id)
   {
      $datas = Courses::where('id', $id)->first();

      return view('fronts.course')->with('courseInfo', $datas);
   }


   public function showProjects()
   {
      $projects = Projects::paginate(3);
      //dd($projects);
      return view('fronts.projects')->with('projects',$projects);
   }


   public function showEvents()
   {
      $datas = Events::orderBy('date', 'DESC')->paginate(6); // EN YAKIN ETKİNLİKTEN EN GEÇE DOĞRU 

      return view('fronts.events')->with('eventInfos', $datas);
   }


   public function showEvent($id)
   {
      $datas = Events::where('id', $id)->first();

      return view('fronts.event')->with('eventInfo', $datas);
   }


   public function showContact()
   {
      /* İLETİŞİM BİLGİLERİNİN HEPSİNİ DATABASEDEN ALIYORUM */


      return view('fronts.contact');
   }

   public function sendMessage(Request $request)
   {
      $validated = $request->validate([
         'name' => 'required|min:2|max:100',
         'email' => 'required|min:2|max:255|email',
         'phone' => 'required|min:6|max:50', 
         'subject' => 'required|min:2|max:155',
         'message' => 'required|min:10|max:500',
         
      ]);

      
      Messages::insert(
         array(
                'phone' => $request->phone,
                'name'     =>   $request->name,
                'email'   =>   $request->email,
                'subject'   =>   $request->subject,
                'message'   =>   $request->message,
                'created_at' => Carbon::now()
         )
    );

      return redirect()->back()->with('success', 'Mesajınız Başarıyla Gönderildi');
      
   }
 
 function indexSendMessage(Request $request)
 {
    
   $validated = $request->validate([
      'name' => 'required|min:2|max:100',
      'email' => 'required|min:2|max:255|email',
      'phone' => 'required|min:6|max:50', 
      'subject' => 'required|min:2|max:155',
      'message' => 'required|min:10|max:500',
   ]);

   
   Messages::insert(
      array(
             'phone' => $request->phone,
             'name'     =>   $request->name,
             'email'   =>   $request->email,
             'subject'   =>   $request->subject,
             'message'   =>   $request->message,
             'created_at' => Carbon::now()
      )
 );

   return redirect()->back()->with('success', 'Mesajınız Başarıyla Gönderildi');

 }



}