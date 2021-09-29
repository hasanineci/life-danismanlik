@extends('layouts.projectlayout')

@section('css')
    <style>
        /*  .bg-img {
                
                    background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
                        url("{{ URL::asset('/images/index4.jpg') }}");
                    background-repeat: no-repeat;
                    height: auto;
                    background-size: 100% 100%;*/

        .text-on-pic {
            position: absolute;
            left: 5%;
            top: 40%;
        }

        .service-header {
            font-size: 20px;
        }

        input[type=text],
        input[type=email],
        input[type=phone],
        select,
        textarea {
            height: 40px;
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            margin-top: 6px;
            margin-bottom: 16px;
            font-size: 13px;
        }

        input[type=submit] {
            background-color: #04AA6D;
            color: white;
            padding: 12px 20px;
            border: none;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        /*************************************/
        .item {
            height: 120px;
            width: 150px;
        }

    </style>
@endsection

@section('content')
    <!-- İNDEX IMG ROW START !-->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ URL::asset('/images/terapi3.jpg') }}" alt="Bireysel Eğitimler">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class=""style=" font-size:70px; color:#FFFFFF;">BİREYSEL EĞİTİMLER</h5>
                    <p class="fst-italic" style="color:#FFFFFF; font-size:20px;">Lifeline Eğitim Proje Ve
                        Danışmanlık Merkezi'ne Hoş Geldiniz</p>
                    <a href="{{ route('contact') }}"> <button type="button" style="background-color:#65759A;"
                            class="btn mb-4" style="width: 150px; height:40px;">Bize Ulaşın</button></a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ URL::asset('/images/terapi5.jpg') }}" alt="Kurumsal Eğitim">
                <div class="carousel-caption d-none d-md-block">
                    <h5 style="font-size:70px">KURUMSAL EĞİTİMLER</h5>
                    <p>Lifeline Eğitim Proje Ve Danışmanlık Merkezi'ne Hoş Geldiniz</p>
                    <a href="{{ route('contact') }}"> <button type="button" style="background-color:#65759A;"
                            class="btn mb-4" style="width: 150px; height:40px;">Bize Ulaşın</button></a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ URL::asset('/images/terapi6.jpg') }}" alt="Online Eğitimler">
                <div class="carousel-caption d-none d-md-block">
                    <h5 style="font-size:70px">ONLİNE EĞİTİMLER</h5>
                    <p>Lifeline Eğitim Proje Ve Danışmanlık Merkezi'ne Hoş Geldiniz</p>
                    <a href="{{ route('contact') }}"> <button type="button" style="background-color:#65759A;"
                            class="btn mb-4" style="width: 150px; height:40px;">Bize Ulaşın</button></a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-sm-9 col-12">
                <p class="text-center" style="font-size:30px; color:#65759A;"> Lifeline Eğitim Proje Ve Danışmanlık
                    Merkezi'ne Hoş Geldiniz</p>
                <p class="text-center">

                    Hayallerimiz hedeflerimizden de büyüktü; Danışmanlık ve eğitim kavramını bir adım öteye taşımalı, hizmet
                    anlayışımızla fark yaratmalıydık.

                    Bu hayali gerçeğe dönüştürmek için hiç durmadan çalışıyoruz. Çözüm ortaklarımız, paydaşlarımız ve en
                    önemlisi müşterilerimiz ile birlikte sürdürülebilir bir gelişme ve kalkınma için uğraşıyoruz. Bugün
                    danışmanlık sektörünün lideri değiliz ama amacımız bu sektörde sadece lider olmak değil en önemlisi fark
                    yaratmaktır. Yenilikçi hizmet anlayışımız ile danışmanlık sektöründe takip eden değil, takip edilen bir
                    firma olmayı hedefliyoruz.Elde edeceğimiz gelir modelleri ve edinimlerle sadece firmamızı değil,
                    danışmanlık pazarını da büyütmek istiyoruz. Böylelikle Dünya’da bir çok ülkede saygın bir yeri olan,
                    insanlara ve işletmelere çok büyük artı değer katan danışmanlık kavramını Türkiye’de doğru
                    konumlandırmak istiyoruz.

                    Hedeflerimize ulaşmak için birlikte yol almak dileğiyle,
                <p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mt-sm-5 mt-3">
            <div class="col-12">
                <div class="row our-services-header p-0 d-flex align-items-center text-center">                    
                    <p style="font-size:30px; color:#65759A">Hizmetlerimiz</p>
                </div>
            </div>
        </div>
    </div>
   

    <div class="pt-4 pb-4" style="background-color: #F5F7FA;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4 service-box  d-flex flex-column align-items-center" style="position:relative">
                    <div class="service-icon mt-3 px">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="96" height="96" viewBox="0 0 172 172"
                            style=" fill:#000000;">
                            <g transform="">
                                <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                                    stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                                    font-family="none" font-weight="none" font-size="none" text-anchor="none"
                                    style="mix-blend-mode: normal">
                                    <path d="M0,172v-172h172v172z" fill="none"></path>
                                    <path d="" fill="none"></path>
                                    <path d="" fill="none"></path>
                                    <path d="" fill="none"></path>
                                    <path d="" fill="none"></path>
                                    <path d="" fill="none"></path>
                                    <g>
                                        <path
                                            d="M81.51187,96.29312c-2.07747,-4.006 -5.72902,-6.96619 -10.07812,-8.17l-3.27875,-0.88688l-14.405,-3.92375h-16.125l-17.68375,4.81063c-7.00827,1.92546 -11.8689,8.29267 -11.87875,15.56062v30.69125h75.25v-30.69125c0.00028,-2.57219 -0.61725,-5.10682 -1.80063,-7.39062z"
                                            fill="#00ccb3"></path>
                                        <path
                                            d="M50.82063,116.07312l-2.44562,-22.01062h-5.375l-2.6875,24.1875l5.375,5.375l0.80625,-0.80625l4.56875,-4.56875z"
                                            fill="#ff6243"></path>
                                        <path d="M53.75,83.3125l-5.375,10.75h-5.375l-5.375,-10.75z" fill="#ff5023"></path>
                                        <path
                                            d="M152.05875,88.12313l-17.68375,-4.81063h-16.125l-14.405,3.92375l-3.27875,0.88688c-4.34911,1.20381 -8.00066,4.164 -10.07812,8.17c-1.18338,2.28381 -1.8009,4.81844 -1.80063,7.39063v30.69125h75.25v-30.69125c-0.00985,-7.26795 -4.87048,-13.63516 -11.87875,-15.56062z"
                                            fill="#e6e7e8"></path>
                                        <path d="M134.375,83.3125l-5.375,10.75h-5.375l-5.375,-10.75z" fill="#ff5023"></path>
                                        <path
                                            d="M129,94.0625h-5.375l-2.44562,22.01062l-0.24188,2.17688l4.56875,4.56875l0.80625,0.80625l5.375,-5.375z"
                                            fill="#ff6243"></path>
                                        <path
                                            d="M125.50625,122.81875c-1.70087,-5.13425 -5.85637,-9.07794 -11.0725,-10.50812l-20.37125,-7.49813h-16.125l-20.37125,7.49813c-5.21613,1.43019 -9.37163,5.37388 -11.0725,10.50813c-0.52869,1.63227 -0.80069,3.33675 -0.80625,5.0525v28.00375h80.625v-28.00375c-0.00556,-1.71575 -0.27756,-3.42023 -0.80625,-5.0525z"
                                            fill="#3d9ae2"></path>
                                        <path
                                            d="M135.28875,39.4525l-0.91375,-1.8275l-4.46125,4.46125c-4.02639,4.02817 -9.48894,6.29054 -15.18438,6.28875h-9.91687v5.375c-0.00224,5.2359 1.90936,10.29208 5.375,14.21688c0.29563,0.34937 0.59125,0.67188 0.91375,0.99438c6.11336,6.09015 15.26811,7.9507 23.27375,4.73c8.12119,-3.29155 13.43576,-11.17838 13.4375,-19.94125v-5.375l0.02687,-0.1075c-5.40509,-0.62672 -10.12707,-3.94323 -12.55062,-8.815z"
                                            fill="#ffc477"></path>
                                        <path
                                            d="M134.375,73.69125v9.62125h-16.125v-9.62125c5.17411,2.07823 10.95089,2.07823 16.125,0z"
                                            fill="#ffb655"></path>
                                        <path
                                            d="M126.3125,16.125c-13.35839,0 -24.1875,10.82911 -24.1875,24.1875v8.0625h12.60437c5.69544,0.00179 11.15798,-2.26058 15.18438,-6.28875l4.46125,-4.46125l0.91375,1.8275c2.42356,4.87177 7.14553,8.18828 12.55062,8.815c0.62407,0.07675 1.2525,0.11266 1.88125,0.1075h0.77937v-8.0625c0,-13.35839 -10.82911,-24.1875 -24.1875,-24.1875z"
                                            fill="#787680"></path>
                                        <path
                                            d="M66.08562,48.07938c-4.94926,-0.92586 -9.17767,-4.11956 -11.42187,-8.62687l-0.91375,-1.8275l-4.46125,4.46125c-4.02639,4.02817 -9.48894,6.29054 -15.18438,6.28875h-9.91687v5.375c-0.00036,5.70305 2.26125,11.17343 6.28875,15.21125c6.11336,6.09015 15.26811,7.9507 23.27375,4.73c8.11634,-3.29752 13.4284,-11.18063 13.4375,-19.94125v-5.375l0.02688,-0.1075c-0.37625,-0.05375 -0.7525,-0.1075 -1.12875,-0.18813z"
                                            fill="#ffc477"></path>
                                        <path
                                            d="M45.6875,16.125c-13.35839,0 -24.1875,10.82911 -24.1875,24.1875v8.0625h12.60438c5.69544,0.00179 11.15798,-2.26058 15.18438,-6.28875l4.46125,-4.46125l0.91375,1.8275c2.2442,4.50732 6.47262,7.70102 11.42187,8.62687c0.37625,0.08063 0.7525,0.13438 1.12875,0.18813c0.62407,0.07675 1.2525,0.11266 1.88125,0.1075h0.77938v-8.0625c0,-13.35839 -10.82911,-24.1875 -24.1875,-24.1875z"
                                            fill="#787680"></path>
                                        <path
                                            d="M53.75,73.69125v9.62125h-16.125v-9.62125c5.17411,2.07823 10.95089,2.07823 16.125,0z"
                                            fill="#ffb655"></path>
                                        <path
                                            d="M90.78375,134.375l-2.09625,-18.8125h-5.375l-2.09625,18.8125l-0.59125,5.375l5.375,5.375l5.375,-5.375z"
                                            fill="#ff6243"></path>
                                        <path d="M88.6875,104.8125h-5.375h-5.375l5.375,10.75h5.375l5.375,-10.75z"
                                            fill="#ff5023"></path>
                                        <path
                                            d="M94.0625,95.19125v9.62125h-16.125v-9.62125c1.1595,0.46393 2.35492,0.83244 3.57437,1.10187c2.96108,0.60914 6.01517,0.60914 8.97625,0c1.21945,-0.26943 2.41488,-0.63795 3.57437,-1.10187z"
                                            fill="#ffb655"></path>
                                        <path
                                            d="M94.97625,60.9525l-0.91375,-1.8275l-4.46125,4.46125c-4.02639,4.02817 -9.48894,6.29054 -15.18438,6.28875h-9.91688v5.375c-0.00937,4.27127 1.26393,8.44696 3.655,11.98625c0.78026,1.15119 1.66167,2.23047 2.63375,3.225c2.04696,2.03355 4.4767,3.64119 7.14875,4.73c1.1595,0.46393 2.35492,0.83244 3.57437,1.10187c2.96108,0.60914 6.01517,0.60914 8.97625,0c1.21945,-0.26943 2.41488,-0.63795 3.57437,-1.10187c8.11731,-3.29633 13.42987,-11.18018 13.4375,-19.94125v-5.375l0.02687,-0.1075c-5.40509,-0.62672 -10.12707,-3.94323 -12.55062,-8.815z"
                                            fill="#ffc477"></path>
                                        <path
                                            d="M106.1025,48.375c-5.92176,-8.85019 -16.93491,-12.78646 -27.12485,-9.69485c-10.18995,3.09161 -17.15928,12.48373 -17.16515,23.13235v8.0625h12.60438c5.69544,0.00179 11.15798,-2.26058 15.18438,-6.28875l4.46125,-4.46125l0.91375,1.8275c2.42356,4.87177 7.14553,8.18828 12.55063,8.815c0.62407,0.07675 1.2525,0.11266 1.88125,0.1075h0.77937v-8.0625c0.00711,-4.78606 -1.41534,-9.46518 -4.085,-13.4375z"
                                            fill="#787680"></path>
                                        <path
                                            d="M53.75,73.69125v2.6875c-5.17411,2.07823 -10.95089,2.07823 -16.125,0v-2.6875c5.17411,2.07823 10.95089,2.07823 16.125,0z"
                                            fill="#ffa733"></path>
                                        <path
                                            d="M94.0625,95.19125v2.6875c-1.1595,0.46393 -2.35492,0.83244 -3.57437,1.10187c-2.96108,0.60914 -6.01517,0.60914 -8.97625,0c-1.21945,-0.26943 -2.41488,-0.63795 -3.57438,-1.10187v-2.6875c1.1595,0.46393 2.35492,0.83244 3.57437,1.10187c2.96108,0.60914 6.01517,0.60914 8.97625,0c1.21945,-0.26943 2.41488,-0.63795 3.57437,-1.10187z"
                                            fill="#ffa733"></path>
                                        <path
                                            d="M134.375,73.69125v2.6875c-5.17411,2.07823 -10.95089,2.07823 -16.125,0v-2.6875c5.17411,2.07823 10.95089,2.07823 16.125,0z"
                                            fill="#ffa733"></path>
                                        <path
                                            d="M86,83.3125c-2.96853,0 -5.375,-2.40647 -5.375,-5.375h-5.375c0,5.93706 4.81294,10.75 10.75,10.75c5.93706,0 10.75,-4.81294 10.75,-10.75h-5.375c0,2.96853 -2.40647,5.375 -5.375,5.375z"
                                            fill="#000000"></path>
                                        <path
                                            d="M56.4375,56.4375h-5.375c0,2.96853 -2.40647,5.375 -5.375,5.375c-2.96853,0 -5.375,-2.40647 -5.375,-5.375h-5.375c0,5.93706 4.81294,10.75 10.75,10.75c5.93706,0 10.75,-4.81294 10.75,-10.75z"
                                            fill="#000000"></path>
                                        <path
                                            d="M126.3125,61.8125c-2.96853,0 -5.375,-2.40647 -5.375,-5.375h-5.375c0,5.93706 4.81294,10.75 10.75,10.75c5.93706,0 10.75,-4.81294 10.75,-10.75h-5.375c0,2.96853 -2.40647,5.375 -5.375,5.375z"
                                            fill="#000000"></path>
                                        <path
                                            d="M152.76556,85.52969l-15.70306,-4.27044v-5.87488c8.2205,-4.0785 13.425,-12.45774 13.4375,-21.63438v-2.6875c1.48427,0 2.6875,-1.20323 2.6875,-2.6875v-8.0625c-0.00571,-14.50093 -11.52081,-26.37919 -26.01457,-26.83502c-14.49376,-0.45583 -26.73251,10.67536 -27.64943,25.14727c-8.34547,-4.91621 -18.70153,-4.91621 -27.047,0c-0.91692,-14.47191 -13.15567,-25.6031 -27.64943,-25.14727c-14.49376,0.45583 -26.00886,12.33409 -26.01457,26.83502v8.0625c0,1.48427 1.20323,2.6875 2.6875,2.6875v2.6875c-0.0092,6.42097 2.53905,12.58125 7.08156,17.11938c1.8618,1.84234 4.00787,3.37317 6.35594,4.53381v5.85606l-15.71112,4.27312c-8.16394,2.26148 -13.82507,9.68004 -13.85137,18.15138v30.69125c0,1.48427 1.20323,2.6875 2.6875,2.6875h34.9375v18.8125c0,1.48427 1.20323,2.6875 2.6875,2.6875h80.625c1.48427,0 2.6875,-1.20323 2.6875,-2.6875v-18.8125h34.9375c1.48427,0 2.6875,-1.20323 2.6875,-2.6875v-30.69125c-0.02703,-8.4743 -5.69188,-15.89452 -13.85944,-18.15406zM128.87369,117.26369l-1.99144,1.99144c-0.78123,-1.48666 -1.75635,-2.86304 -2.89981,-4.09306l2.06131,-18.41206h0.56437zM88.56119,138.76369l-2.56119,2.56119l-2.56119,-2.56119l2.29244,-20.51369h0.56437zM61.03044,72.40394c0.2511,0.09235 0.51482,0.14582 0.78206,0.15856v2.6875c0.00448,2.66696 0.45316,5.31454 1.32762,7.83406l-6.70262,-1.82481v-5.87488c1.63945,-0.81538 3.18042,-1.81534 4.59294,-2.98044zM127.33913,91.375h-2.05325l-2.6875,-5.375h7.42825zM110.1875,75.25v-2.6875c0.25048,-0.01308 0.49768,-0.06288 0.73369,-0.14781c1.42876,1.16896 2.98588,2.17158 4.64131,2.9885v5.85606l-6.70262,1.82481c0.87446,-2.51952 1.32315,-5.16711 1.32762,-7.83406zM104.8125,75.25c0,10.38986 -8.42264,18.8125 -18.8125,18.8125c-10.38986,0 -18.8125,-8.42264 -18.8125,-18.8125v-2.6875h7.22131c6.41761,0.01749 12.57543,-2.53351 17.10056,-7.08425l1.88125,-1.88125c2.55513,4.19112 6.65883,7.20662 11.42187,8.39306zM46.71413,91.375h-2.05325l-2.6875,-5.375h7.42825zM45.41875,96.75h0.56438l2.05056,18.44163c-1.14067,1.2228 -2.11481,2.59092 -2.89713,4.06888l-1.99681,-1.99681zM53.01094,111.32163l-1.86512,-16.76463l4.03125,-8.0625l11.39769,3.10406c2.27757,3.07796 5.25004,5.57435 8.67525,7.28581v6.04688l-18.39863,6.78056c-1.34054,0.39148 -2.63318,0.93143 -3.85388,1.60981zM87.02663,112.875h-2.05325l-2.6875,-5.375h7.42825zM91.375,102.125h-10.75v-3.311c3.53512,0.8313 7.21488,0.8313 10.75,0zM96.75,96.88438c3.42929,-1.71347 6.40472,-4.2137 8.68331,-7.29656l11.39769,-3.10406l4.03125,8.0625l-1.85975,16.73506c-1.15624,-0.63433 -2.37939,-1.13819 -3.64694,-1.50231l-18.60556,-6.84775zM131.6875,80.625h-10.75v-3.30831c3.53532,0.82955 7.21468,0.82955 10.75,0zM126.3125,72.5625c-4.98992,0.00772 -9.77802,-1.9696 -13.3085,-5.49594c-0.04569,-0.04569 -0.08331,-0.09675 -0.129,-0.14244v-5.11162c0.00031,-3.70131 -0.76939,-7.3622 -2.26019,-10.75h4.11456c6.41139,0.01801 12.56344,-2.5301 17.08444,-7.07619l1.88125,-1.88125c2.55911,4.18875 6.66572,7.20039 11.42994,8.38231v3.26263c-0.01185,10.38495 -8.42755,18.80065 -18.8125,18.8125zM104.8125,40.3125c0,-11.87412 9.62588,-21.5 21.5,-21.5c11.87412,0 21.5,9.62588 21.5,21.5v5.24063c-4.37313,-0.61175 -8.16149,-3.34487 -10.12113,-7.30194l-0.91106,-1.8275c-0.38662,-0.77118 -1.11993,-1.3099 -1.97143,-1.44826c-0.8515,-0.13837 -1.71766,0.14043 -2.32857,0.74951l-4.46125,4.46125c-3.51741,3.53504 -8.30286,5.516 -13.28969,5.50131h-7.28044c-0.80221,-1.07549 -1.68347,-2.08969 -2.63644,-3.03419zM107.5,61.8125v5.24331c-4.37057,-0.61095 -8.15691,-3.34206 -10.11575,-7.29656l-0.91644,-1.83556c-0.38662,-0.77118 -1.11993,-1.3099 -1.97143,-1.44826c-0.8515,-0.13837 -1.71766,0.14043 -2.32857,0.74951l-4.45856,4.45319c-3.51989,3.53888 -8.30913,5.5227 -13.30044,5.50937h-9.90881v-5.375c0,-11.87412 9.62588,-21.5 21.5,-21.5c11.87412,0 21.5,9.62588 21.5,21.5zM24.1875,40.3125c0,-11.87412 9.62588,-21.5 21.5,-21.5c11.87412,0 21.5,9.62588 21.5,21.5v2.34081c-0.76394,0.75539 -1.48189,1.55591 -2.15,2.39725c-3.47184,-1.08212 -6.34873,-3.53943 -7.96037,-6.79937l-0.91106,-1.8275c-0.38662,-0.77118 -1.11993,-1.3099 -1.97143,-1.44826c-0.8515,-0.13837 -1.71766,0.14043 -2.32857,0.74951l-4.46125,4.46125c-3.52003,3.5377 -8.30988,5.51887 -13.30044,5.50131h-9.91687zM26.875,53.75v-2.6875h7.22937c6.41139,0.01801 12.56344,-2.5301 17.08444,-7.07619l1.88125,-1.88125c2.11566,3.41226 5.26223,6.0628 8.98431,7.568c-1.92347,3.7576 -2.92746,7.91814 -2.92937,12.13944v5.06325c-5.33343,5.48566 -13.4612,7.18807 -20.54776,4.30385c-7.08655,-2.88423 -11.71544,-9.77859 -11.70224,-17.4296zM45.6875,77.9375c1.80921,-0.00335 3.61226,-0.21071 5.375,-0.61813v3.30563h-10.75v-3.30831c1.76301,0.40614 3.56582,0.61436 5.375,0.62081zM24.1875,131.6875v-24.1875h-5.375v24.1875h-8.0625v-28.00375c0.02016,-6.05228 4.06532,-11.35174 9.89806,-12.96719l15.55794,-4.23281l4.03125,8.0625l-2.6015,23.39737c-0.08955,0.81104 0.19422,1.61883 0.77131,2.19569l4.8375,4.8375c-0.15627,0.95703 -0.23804,1.92475 -0.24456,2.89444v3.81625zM123.625,153.1875h-8.0625v-24.1875h-5.375v24.1875h-48.375v-24.1875h-5.375v24.1875h-8.0625v-25.31625c0.04632,-6.13045 4.19123,-11.47094 10.11844,-13.03706l18.11644,-6.67037l3.94525,7.89319l-2.6015,23.39738c-0.08955,0.81104 0.19422,1.61883 0.77131,2.19569l5.375,5.375c1.04947,1.04915 2.75066,1.04915 3.80013,0l5.375,-5.375c0.57709,-0.57685 0.86086,-1.38465 0.77131,-2.19569l-2.6015,-23.39738l3.94794,-7.89319l18.32606,6.73756c5.83582,1.6143 9.88434,6.91494 9.90613,12.96988zM161.25,131.6875h-8.0625v-24.1875h-5.375v24.1875h-18.8125v-3.81625c-0.00577,-0.96872 -0.08664,-1.93553 -0.24188,-2.89175l4.8375,-4.8375c0.57709,-0.57685 0.86086,-1.38465 0.77131,-2.19569l-2.6015,-23.39738l4.03125,-8.0625l15.54988,4.23012c5.83379,1.61503 9.88078,6.91401 9.90344,12.96719z"
                                            fill="#000000"></path>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <div class="service-header mt-4">
                        <span style="color:#65759A"> UZMAN </span> KADROMUZ
                    </div>
                    <div class="service-content mt-4 px-2 text-center" style="width:250px; font-size:13px;">
                        Psikolojik danışmanlık hizmetlerimiz, lisans eğitimlerini tamamlamış psikolojik yardım personelleri
                        tarafından gerçekleştirilmektedir.
                    </div>
                </div>

                <div class="col-md-4 service-box d-flex flex-column align-items-center" style="position:relative">
                    <div class="service-icon mt-3" >
                        <img
                            src="https://img.icons8.com/external-flatart-icons-lineal-color-flatarticons/96/000000/external-education-education-flatart-icons-lineal-color-flatarticons-3.png" />
                    </div>
                    <div class="service-header mt-4">
                        <span style="color:#65759A"> BİREYSEL </span> DANIŞMANLIK
                    </div>
                    <div class="service-content mt-4 px-2 text-center" style="width:250px; font-size:13px;">
                        Bireysel danışmanlık süreci kişiye özel olarak, konusunda uzman ve tecrübeli eğitimcilerimiz
                        eşliğinde gerçekleştirilmektedir.
                    </div>
                </div>

                <div class="col-md-4 service-box  d-flex flex-column  align-items-center" style="position:relative">
                    <div class="service-icon mt-3" style="height: ">
                        <img
                            src="https://img.icons8.com/external-justicon-flat-justicon/96/000000/external-graduation-elearning-and-education-justicon-flat-justicon.png" />
                    </div>
                    <div class="service-header mt-4">
                        <span style="color:#65759A"> KURUMSAL </span> DANIŞMANLIK
                    </div>
                    <div class="service-content mt-4 px-2 text-center" style="width:250px; font-size:13px;">
                        Kurumsal danışmanlık şirket veya şirket çalışanlarının olmayı hedefledikleri konum ile bulundukları
                        konum arasındaki mesafeyi kapatmak üzere çalışan bir sistemdir.
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="container">
        <div class="row mt-5">
            <div class="col-md-6">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ URL::asset('/images/gelen1.jpg') }}" alt="First slide" class="d-block "style="max-height: 400px;">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ URL::asset('/images/gelen2.jpg') }}" alt="Second slide" class="d-block " style="max-height: 400px;">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ URL::asset('/images/rehber-lise.png') }}" alt="Third slide" class="d-block" style="max-height: 400px;">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-md-6">
                <div class="display-table">
                    <div class="display-table-cell">
                        <h3 class="" style="color: #65759A">NEDEN BİZ ?</h3>
                        <p class="p-0 m-0" style="font-size:14px; letter-spacing:0.5px; line-height:25px;">
                            Sektör'ün farklı iş kollarında farklı endüstrilerde eğitim hizmeti, danışmanlık ve proje geliştirmiş
                            tecrübeli danışman kadromuz ile sizlerin yeni iş kurma yada işinizi geliştirme sürecinde Kosgeb
                            danışmanlık,
                            Kobigel destekleri, proje yazma gibi konularda hizmetinizdeyiz.Kısacası iş hayatında ihtiyaç duyduğunuz
                            tüm eğitimler Lifeline Eğitim Proje Ve Danışmanlık Merkezinde
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <img src="{{ asset('/images/sponsorlar/sponsor1.png') }}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{ asset('/images/sponsorlar/sponsor2.png') }}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{ asset('/images/sponsorlar/sponsor3.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-5">
            <div class="col-12">
                <div class="p-3" style="box-shadow: 0px 0px 10px 0px #ccc;">

                    <div class="row">
                        <div class="col-md-6  d-flex justify-content-center align-items-center">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1589.7850720260374!2d38.80385317076377!3d37.162919408203756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x153471cb83d6394b%3A0xf056757292022f58!2sOrtado%C4%9Fu%20Ziraat!5e0!3m2!1str!2str!4v1631132218876!5m2!1str!2str"
                                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                        </div>
                        <div class="col-md-6 mt-4">
                            <div class="row">
                                <div class="col-md-12">


                                    <h2 class="text-center" style="color:#65759A">İLETİŞİME GEÇ</h2>
                                    <form action="{{ route('send_message_index') }}" method="post" class="needs-validation" novalidate>
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group mb-2">
                                                    <label class="label" for="name">Adınız Soyadınız</label>
                                                    <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" minlength="2" maxlength="50" required>
                                                    <div class="invalid-feedback">
                                                        Bu alan gereklidir ve en az 2 karakterden oluşmalıdır.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group mb-2">
                                                    <label class="label" for="email">E posta adresiniz</label>
                                                    <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}" minlength="2" maxlength="50" required>
                                                    <div class="invalid-feedback">
                                                        Bu alan gereklidir ve en az 2 karakterden oluşmalıdır.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group mb-2">
                                                    <label class="label" for="subject">Telefon Numaranız</label>
                                                    <input type="text" class="form-control" name="phone" id="phone" value="{{ old('phone') }}" minlength="10" maxlength="30" required>
                                                    <div class="invalid-feedback">
                                                        Bu alan gereklidir ve en az 2 karakterden oluşmalıdır.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group mb-2">
                                                    <label class="label" for="subject">Konu</label>
                                                    <input type="text" class="form-control" name="subject" id="subject" value="{{ old('subject') }}" minlength="2" maxlength="50" required>
                                                    <div class="invalid-feedback">
                                                        Bu alan gereklidir ve en az 2 karakterden oluşmalıdır.
                                                    </div>
                                                </div>  
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group mb-2">
                                                    <label class="label" for="#">Mesajınız</label>
                                                    <textarea class="form-control" name="message" id="message" cols="30"
                                                        rows="4" placeholder="Hangi Konuda Danışmanlık Hizmeti İstersiniz ?"
                                                        style="height:200px; resize:none;" minlength="10"  maxlength="500" required>{{ old('message') }}</textarea>
                                                    <div class="invalid-feedback">
                                                        Mesaj alanı en az 10 karakter olmalıdır.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group pt-4">
                                                    <input type="submit" value="Mesaj Gönder" class="btn text-white"
                                                        style="background-color:#65759A; float:right">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


@endsection
@section('js')
    <script>
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            items: 4,
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 1000,
            autoplayHoverPause: true
        });
    </script>
@endsection
