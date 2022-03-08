@extends("layouts.app")


@section("contact")

    <!-- === Start Home Page === -->

     

        <!-- Start main Home  -->
        <main class="main-home">
            <div class="container">
                <div class="contact">
                    <h3> مرحبا بكم </h3>
                    <p>
                        اهلا بكم في موقعي الشخصي
                        ابيع خدماتي واعرض اعمالي على هاذا الموقع
                        ابيع اكثر من خدمة يمكنكم الاطلاع عليها
                        وايضا يمكنكم الاطلاع على اعمالي السابقة
                        يمنكم التواصل عبر اي موقع تواصل او ارسال رساله من صفحة تواصل معي
                    </p>
                    <button>Start</button>
                </div>
                <div class="max-img">
                    <img src="{{asset("images/image-main.jpg")}}" alt="">
                </div>
            </div>
        </main>
        <!-- End Main Home  -->

        <!-- Start Services  -->
        <section class="services">
            <h2 class="title-div">خدمات</h2>
            <div class="container">

                @if ($countSrv > 0)
                @foreach ($services as $service)
                <div class="box">
                    <div class="max-img">
                        <img src="{{asset("imges/" . $service->img)}}" alt="لا يمكن عرض الصورة ">
                    </div>
                   <h3 style="color: #fff; padding: 20px 10px; text-align: center;">{{$service->title}} </h3>
                    <p>
                     {{$service->descrption}}
                    </p>
                    <a href="show/{{$service->id}}" class="btn-a">عرض </a>
                </div>
                @endforeach
                @else
                <p class="msg-null-data">لم يتم اضافة خدمات </p>
                @endif
                
               
            
            </div>
        </section>
        <!-- End Services -->

        <!-- Satrt previous  -->
        <section class="previous">
            <h2 class="title-div">اعمال سابقة</h2>
            <div class="container">
                @if ($countPer > 0)
                @foreach ($boxex as $box)
                <div class="box">
                 <div class="max-img">
                     <img src="{{asset("imges/". $box->img)}}" alt="لا يمكن عرض الصورة ">
                 </div>
                 <div class="contact">
                     <h3>
                       {{$box->title}}
                     </h3>
                     <p>
                     {{    
                         $box->descrption
 }}
                     </p>
                     <a href="show/{{$box->id}}">عرض </a>
                 </div>
             </div>
                @endforeach
                
                @else
                <p class="msg-null-data">لم يتم اضافة اعما ل سابقة </p>
                @endif
             
               
        </section>
        <!-- End previous  -->

        <!-- Start about me  -->
        <div class="about" id="about">
            <div class="container">
                <div class="image">
                    <img src="{{asset("images/image-main.jpg")}}" alt="لا يمكن عرض الصورة ">
                </div>
                <div class="contact">
                    <h2 class="title-div">
                        عني
                    </h2>
                    <p>
                        الاسم مصطفى مطرود / مؤسس شركة بوينت ميديا
                        مدير الاعلاني للشركة قرطاج للتصوير /
                        مدير الاعلاني للشركة ارض الهاني للسفر و السياحة
                        عملت على ادارة الاعلانات في المشاريع الصغيرة لاكثر من ثلاث سنوات

                        —————————
                        الخبرات و المهارات/مصمم فوتوشوب / دبلوم علم النفس الايجابي /دورة قوانين العقل / دبلوم في التخطيط
                        الشخصي وادارة الوقت / دبلوم في الوظائف الرئيسية للترويج /

                        الخدمات
                        تصميم / تسويق / ادارة صفحات السوشيال ميديا / الترويج /
                    </p>
                </div>
            </div>
        </div>
        <!-- End About me  -->

        <!-- Start contact us  -->
        <section class="cotact-page" id="contact">

            <form action="/contactus" class="form-contact" method="POST">
                @csrf
                <h3>سوف تصلني رسالتك على الفور </h3>
                <div class="finds">
                    <div class="find">
                        <label for="">الاسم</label>
                        <input type="text" name="name" placeholder=" الاسم؟  ">
                    </div>
                    <div class="find">
                        <label for="">الهاتف</label>
                        <input type="text" name="phone" placeholder=" رقم الهاتف">
                    </div>
                </div>
                <div class="finds">
                    <div class="find">
                        <label for="">البريد الالكروني</label>
                        <input type="email" name="email" placeholder=" ضع بريدك اللكتروني ">
                    </div>
                    <div class="find">
                        <label for="">العنوان</label>
                        <input type="text" name="addres" placeholder="العنوان">
                    </div>
                </div>

                <textarea name="msg">

                </textarea>
                <button type="submit">ارسال</button>
            </form>
            <div class="contact-text">
                <h3>
                    توصل معي
                </h3>
                <div class="spans"> <span>Email</span> <span>matroodm930@gmail.com</span></div>
                <div class="spans"> <span>Number</span> <span>+9647726007646</span></div>
                <div class="spans"> <span>instagram</span> <span>@msa_matrood</span></div>
            </div>
        </section>
        <!-- End cocate us  -->
    

@endsection