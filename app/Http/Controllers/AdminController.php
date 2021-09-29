<?php

namespace App\Http\Controllers;

use App\Models\ContactInfos;
use App\Models\Events;
use App\Models\About;
use App\Models\Messages;
use App\Models\Projects;
use App\Models\Courses;
use App\Models\User;
use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{
    public function showAdminIndex()
    {
        $data = [];
        $data['events_count'] = Events::count();
        $data['projects_count'] = Projects::count();
        $data['courses_count'] = Courses::count();
        $data['messages_count'] = Messages::count();

        return view('fronts.admin.index', compact('data'));
    }

    public function showEditContact()
    {
        $datas = ContactInfos::all();

        foreach ($datas as $data) {
            $id = $data->id;
            $email  = $data->email;
            $second_Mail  = $data->second_email;
            $phoneNumber  = $data->phone_number;
            $secondPhoneNumber  = $data->second_phone_number;
            $watsapNumber = $data->watsapp;
            $address = $data->address;
        }

        $contactInfos = [
            'id' => $id,
            'email'  => $email,
            'second_email'  =>  $second_Mail,
            'phone_number'  =>  $phoneNumber,
            'second_phone_number'  =>  $secondPhoneNumber,
            'watsapp'  =>  $watsapNumber,
            'address'  =>  $address
        ];

        return view('fronts.admin.editcontact')->with('contactsInfos', $contactInfos);
    }

    public function updateContact(Request $request)
    {
        $userid = $request->id;
        $email = $request->first_mail;
        $second_email = $request->second_mail;
        $phone_number = $request->first_phone_number;
        $second_phone_number = $request->second_phone_number;
        $watsapp = $request->watsap_number;
        $address = $request->address;

        ContactInfos::where('id', $userid)->update([
            'email' => $email,
            'second_email' => $second_email,
            'phone_number' => $phone_number,
            'second_phone_number' => $second_phone_number,
            'watsapp' => $watsapp,
            'address' => $address

        ]);

        Cache::forget('contact');

        return redirect()->back()->with('success', 'İşlem başarılı, yeni post paylaşıldı.');
    }

    public function showEvents()
    {
        /* DATABASE'E KAYITLU BÜTÜN EVETLERİ GÖDERİYORUM */
        $datas = Events::paginate(5);
        return view('fronts.admin.events')->with('eventInfos', $datas);
    }
    public function showCreateEventForm()
    {
        return view('fronts.admin.create_event');
    }

    public function createEvent(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'date' => 'required',
            'time' => 'required',
            'content' => 'required',
        ]);

        $event = new Events();
        $event->title = $request->title;
        $event->date = $request->date;
        $event->time = $request->time;
        $event->content = $request->content;
        $event->save();


        if ($request->file('image')) {
            $image = $request->file('image');

            // Kaydedilecek dosya yolu
            $path = "uploads/events/" . $event->id;

            // Kaydedilecek dosya adı
            $name = $event->id . '-' . time() . uniqid() . "." . $image->getClientOriginalExtension();

            // kaydet
            $upload = $image->move($path, $name);

            if ($upload) {
                $update = Events::where('id', $event->id)->update([
                    "image" => $name
                ]);
            }
        }

        return redirect()->back()->with('success', 'Etkinlik Başarıyla Oluşturuldu');
    }

    public function updateEvent(Request $request)
    {
        /*GELEN ID'YE GÖRE MDOALDAKİ VERİLERİ ESKİLERİYLE DEĞİŞTİRİYORUM */
        $eventid = $request->event_id;

        Events::where('id', $eventid)->update([
            'title' => $request->event_title,
            'date' => $request->event_date,
            'time' => $request->event_time,
            'content' => $request->event_content
        ]);



        if ($request->file('image')) {
            $image = $request->file('image');

            // Kaydedilecek dosya yolu
            $path = "uploads/events/" . $eventid;

            // Kaydedilecek dosya adı
            $name = $eventid . '-' . time() . uniqid() . $image->getClientOriginalExtension();

            // kaydet
            $upload = $image->move($path, $name);

            if ($upload) {
                $update = Events::where('id', $eventid)->update([
                    "image" => $name
                ]);
            }
        }

        return response()->json(array(
            'success' => "Etkinlik Başarıyla Güncellendi"
        ));
    }

    public function showUpdateDetails(Request $request)
    {
        //dd($request);

        /* GELEN ID 'YE GÖRE KİŞİNİN BİLGİLERİNİ MODALA GÖNDERİYORUM */
        $eventId = $request->event_id;

        $eventDetails = Events::where('id', $eventId)->first();

        return response()->json($eventDetails);
    }

    public function deleteEvent(Request $request)
    {
        $eventId = $request->event_id;

        Events::where('id', $eventId)->delete();

        return response()->json(array(
            'success' => "Etkinlik Başarıyla Silindi"
        ));
    }

    function showAbout()
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

        return view('fronts.admin.about')->with('aboutInfos', $aboutInfos);
    }

    function updateAbout(Request $request)
    {
        //  dd($request);
        About::where('id', 1)->update([
            'history' => $request->history,
            'mission' => $request->mission,
            'vision' => $request->vision
        ]);

        return redirect()->back()->with('success', 'Güncelleme Başarıyla Yapıldı');
    }

    function showMessages()
    {
        $messages = Messages::orderBy('created_at', 'desc')->paginate(5);
        return view('fronts.admin.messages', compact('messages'));
    }
    function getMessage(Request $request)
    {   
        Messages::where('id', $request->id)->update([
            'readed' => 1          
        ]); // MESAJ OKUNURSA OKUNDU KISMINI 1 YAPIYORUM VE MESAJI AJAXA YOLLUYORUM //

        $messageInfo = Messages::where('id',$request->id)->orderby('readed')->first();

        return response()->json(array(
            'name' => $messageInfo->name,
            'email' => $messageInfo->email,
            'subject' => $messageInfo->subject,       
            'date' => $messageInfo->created_at,                 
            'message' => $messageInfo->message,            
        ));
    }
    function deleteMessage(Request $request)
    {

        $messageId = $request->project_id;
        Messages::where('id', $messageId)->delete();

        return redirect()->back()->with('success', 'Mesaj Başarıyla Silindi');
    }

    function showProjects()
    {
        $projects = Projects::paginate(10);

        return view('fronts.admin.projects')->with('projects', $projects);
    }

    function createProject()
    {
        return view('fronts.admin.create_project');
    }
    
    function uploadProject(Request $request) /* PROJEYİ OLUŞTUR DEDİĞİM ZAMAN ÇALIŞAN FONKSİYON */
    {
        $project = new Projects();
        $project->title = $request->title;
        $project->content = $request->content;
        $project->save();

        $this->uploadProjectImage($request, $project->id);

        return redirect()->back()->with('success', 'Proje Başarıyla Eklendi');
    }

    function showUpdateDetailsProject(Request $request) /* PROJEYİ DÜZENLE BASINCA MODALA GELEN BİLGİLERİ SAĞLIYOR */
    {
        $projectId = $request->project_id;
        $projectDetails = Projects::where('id', $projectId)->first();

        return response()->json($projectDetails);
    }


    function updateProject(Request $request) /* PROJEYİ GÜNCELLE DEDİĞİM ZAMAN ÇALIŞAN FONKSİYON */
    {/*
        $projectId = $request->project_id;

        Projects::where('id', $projectId)->update([
            'title' => $request->project_title,
            'content' => $request->project_content
        ]);

        return response()->json(array(
            'success' => "Proje Başarıyla Güncellendi"
        ));*/
    }
    function editProject(Request $request)
    {
        $data = $request->id;
        $projectInfos = Projects::where('id', $data)->first();

        return view('fronts.admin.editproject')->with('projectInfos', $projectInfos);
    }

    function deleteProject(Request $request)
    {
        $projectId = $request->id;

        Projects::where('id', $projectId)->delete();

        return redirect()->back()->with('success', 'Proje Başarıyla Silindi');
    }

    function showCourses()
    {
        $courses = Courses::paginate('5');
        return view('fronts.admin.courses')->with('courses', $courses);
    }

    function showCreateCourseForm()
    {
        return view('fronts.admin.create_course');
    }
    function createCourse(Request $request)
    {

        $course = new Courses();
        $course->name = $request->title;
        $course->content = $request->content;

        $course->save();


        if ($request->file('image')) {
            $image = $request->file('image');

            // Kaydedilecek dosya yolu
            $path = "uploads/courses/" . $course->id;

            // Kaydedilecek dosya adı
            $name = $course->id . '-' . time() . uniqid() . '.' . $image->getClientOriginalExtension();

            // kaydet
            $upload = $image->move($path, $name);

            if ($upload) {
                $update = Courses::where('id', $course->id)->update([
                    "image" => $name
                ]);
            }
        }

        return redirect()->back()->with('success', 'Yeni Eğitim Başarıyla Oluşturuldu');
    }

    function editCourse(Request $request)
    {
        $data = $request->id;
        $courseInfo = Courses::where('id', $data)->first();

        return view('fronts.admin.editcourses')->with('courseInfo', $courseInfo);
       // return view('fronts.admin.editcourses');
    }

    public function editCoursePost(Request $request)
    {
        $update = Courses::where('id', $request->id)->update([
            "name" => $request->title,
            "content" => $request->content
        ]);

        if ( isset($request->imageDelete) && $request->imageDelete == 1 ) {
            $update = Courses::where('id', $request->id)->update([
                "image" => null
            ]);
        }

        $this->uploadCourseImage($request, $request->id);
        return redirect()->back()->with('success', 'Proje güncellendi!');

    }
    public function deleteCourse(Request $request)
    {
        $courseId = $request->id;

        Courses::where('id', $courseId)->delete();

        return redirect()->back()->with('success', 'Proje Başarıyla Silindi');
    }

    public function uploadProjectImage($request, $project_id)
    {
        $upload = false;
        if ($request->file('image')) {
            $image = $request->file('image');

            // Kaydedilecek dosya yolu
            $path = "uploads/projects/" . $project_id;

            // Kaydedilecek dosya adı
            $name = $project_id . '-' . time() . uniqid() . "." . $image->getClientOriginalExtension();

            // kaydet
            $upload = $image->move($path, $name);

            if ($upload) {
                $update = Projects::where('id', $project_id)->update([
                    "image" => $name
                ]);
            }
        }

        return $upload;
    }
    public function uploadCourseImage($request, $project_id)
    {
        $upload = false;
        if ($request->file('image')) {
            $image = $request->file('image');

            // Kaydedilecek dosya yolu
            $path = "uploads/courses/" . $project_id;

            // Kaydedilecek dosya adı
            $name = $project_id . '-' . time() . uniqid() . "." . $image->getClientOriginalExtension();

            // kaydet
            $upload = $image->move($path, $name);

            if ($upload) {
                $update = Courses::where('id', $project_id)->update([
                    "image" => $name
                ]);
            }
        }

        return $upload;
    }
    public function editProjectPost(Request $request)
    {
        $update = Projects::where('id', $request->id)->update([
            "title" => $request->title,
            "content" => $request->content
        ]);

        if ( isset($request->imageDelete) && $request->imageDelete == 1 ) {
            $update = Projects::where('id', $request->id)->update([
                "image" => null
            ]);
        }

        $this->uploadProjectImage($request, $request->id);
        return redirect()->back()->with('success', 'Proje güncellendi!');
    }
    public function showAdminProfile()
    {
        $users = User::where('role','!=' ,'admin')->get();  // ADMİN DIŞINDAKİLERİ LİSTELENSİN
         
        return view('fronts.admin.adminprofile')->with('users',$users);
    }
    public function createNewAdmin(Request $request)
    {
       

       $check = User::where('email',$request->email)->first(); // EĞER BÖYLE BİR MAİL YADA KULLANICI ADI KAYITLI DEĞİL İSE //
      
       if ($check == null )
       {
            if($request->first_password == $request->second_password)
            {
                $newUser = new User();
                $newUser->email = $request->email;
                $newUser->password = Hash::make($request->first_password);
                $newUser->role = "user"; // ADMİN DIŞINDAKİ HER KULLANICI USER ROLÜNÜ ALICAK
                $newUser->save();

                return redirect()->back()->with('success', 'Yeni Kullanıcı Başarıyla Oluşturuldu');
            }
            else
            {

                return redirect()->back()->with('error', 'Girilmiş Olan Şifreler Birbirlerinden Farklı');
            }   
       }
       else
       {
        return redirect()->back()->with('error', 'Böyle Bir Kullanıcı Zaten Kayıtlı');
       }
        
    }

    public function changePassword()
    {
        $users = User::all();
        return view('fronts.admin.changepassword')->with('users',$users);
    }

    public function updatePassword(Request $request)
    {
       $userId= $request->userid;
       $userPassword = User::where('id',$userId)->select('password')->first();
  
       // dd(Hash::check($request->old_password, $userPassword));

       if(Hash::check($request->old_password, $userPassword->password))
       {
        
            if($request->first_password == $request->second_password)
            {
                User::where('id',$userId)->update([
                    'password' => Hash::make($request->first_password)
                ]);
                return redirect()->back()->with('success', 'Şifre Başarıyla Güncelleştirildi');
            }
                else
                {
                    return redirect()->back()->with('error', 'Girilmiş Olan Şifreler Birbirlerinden Farklı');
                }
                 
          } 
          else{
            return redirect()->back()->with('error', 'Girmiş Olduğunuz Eski Şifre Hatalı');
          }
        
    }
    public function deleteUser(Request $request)
    {
       $userId = $request->userid;

      if( User::where('id',$userId)->delete() )
      {
        return redirect()->back()->with('success', 'Kullanıcı Başarıyla Silindi');
      }
      return redirect()->back()->with('error', 'Kullanıcı Silinemedi');
        
    }
   

}
