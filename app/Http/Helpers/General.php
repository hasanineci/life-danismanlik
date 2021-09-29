<?php

use App\Models\ContactInfos;
use App\Models\Courses;
use App\Models\Messages;
use Illuminate\Support\Facades\Cache;

function showContact()
{
   /* İLETİŞİM BİLGİLERİNİN HEPSİNİ DATABASEDEN ALIYORUM */
   $datas = ContactInfos::all();

   foreach ($datas as $data) {
      $email  = $data->email;
      $second_Mail  = $data->second_email;
      $phoneNumber  = $data->phone_number;
      $secondPhoneNumber  = $data->second_phone_number;
      $watsapNumber = $data->watsapp;
      $address = $data->address;
   }

   $contactInfos = [

      'email'  => $email,
      'second_email'  =>  $second_Mail,
      'phone_number'  =>  $phoneNumber,
      'second_phone_number'  =>  $secondPhoneNumber,
      'watsapp'  =>  $watsapNumber,
      'address'  =>  $address
   ];


   return $contactInfos;
}

function getCoursesInfos()
{
   $courseInfos = Courses::all();
 
   
   return $courseInfos;
}

function getContactInfos()
{
   if (!Cache::has('contact')) {
      $contact = Cache::remember('contact', 43200, function () {
         $contact = ContactInfos::latest()->first();
         return $contact;
      });
   } else {
      $contact = Cache::get('contact');
   }

   return $contact;
}



function get_event_image($event)
{
   $base_image = "images/image-not-found.png";
   if ( $event->image != null ) {
      return asset('uploads/events/'.$event->id.'/'.$event->image);
   }
   
   return asset($base_image);
}

function get_course_image($course)
{
  
   $base_image = "images/image-not-found.png";
   if ( $course->image != null ) {
      return asset('uploads/courses/'.$course->id.'/'.$course->image);
   }
   
   return asset($base_image);
}


function get_project_image($project)
{
   $base_image = "images/image-not-found.png";
   if ( $project->image != null ) {
      return asset('uploads/projects/'.$project->id.'/'.$project->image);
   }
   
   return asset($base_image);

}
function getUnreadedMessageCount(){
   $data = Messages::where('readed',0)->count();

   return $data;
}