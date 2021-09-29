
  <ul class="list-group ">
    <a href="{{route('admin_index')}}">
        <li class="list-group-item">Anasayfa</li>
    </a>
    <a href="{{route('admin_edit_contact')}}">
        <li class="list-group-item">İletişim Bilgileri</li>
    </a>
    <a href="{{route('admin_events')}}">
        <li class="list-group-item">Etkinlikler</li>
    </a>
    <a href="{{route('admin_edit_about')}}">
        <li class="list-group-item">Hakkımızda & Misyon & Vizyon</li>
    </a>
    <a href="{{route('admin_messages')}}">
        <li class="list-group-item ">Mesajlar
            <div class="text-center" style="display:inline-block;font-weight: bold; border-radius:100px;background-color:rgb(38, 145, 38); width:20px">{{getUnreadedMessageCount();}}</div></li>
        
    </a>

    <a href="{{route('admin_projects')}}">
        <li class="list-group-item">Projeler</li>
    </a>

    <a href="{{route('admin_courses')}}">
        <li class="list-group-item">Eğitimler</li>
    </a>
    
@if (auth()->user()->role == "admin")

    <a href="{{route('admin_adminprofile')}}">
        <li class="list-group-item">Yeni Profil Ekle</li>
    </a>
    <a href="{{route('admin.newpassword')}}">
        <li class="list-group-item">Profil Şifre Yönetimi</li>
    </a>
@endif
    <a href="{{ route('logout') }}"
        class="btn btn-danger">Çıkış Yap</a>

</ul>

