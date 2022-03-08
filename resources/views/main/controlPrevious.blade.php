@extends("layouts.app")


@section("contact")

<div class="services">

<section class="control-page">
    <div class="container">
        <div class="nar-control">
            <header class="header-control">
                <h3>لوحة التحكم </h3>
            </header>
            <ul>
                <li><a href="/control" >عرض الكل </a></li>
                <li><a href="/control/servisecs">الخدمات </a></li>
                <li><a href="/control/preveuas" class="active">معرض الاعمال</a></li>
                <li><a href="/control/add"> اضافة </a></li>
            </ul>
        </div>
        <div class="boxes-control ">
            <div class="box-add products">
               {{-- start product  --}}
             
               @if ($count > 0)
               @foreach ($preuas as $per)
               <div class="product">
                <div class="box">
                    <div class="max-img">
                        <img src="{{asset("imges/" .$per->img)}}" alt="">
                    </div>
                    <h3>{{$per->title}}</h3>
                    <p>
                     {{$per->descrption}}
                    </p>
                    <div class="price">
                        <span>{{$per->price}}$</span>
                    </div>
                    <form action="/delete/{{$per->id}}" method="POST">
                        @csrf
                    <div class="buy-now">                   
                            <button type="submit" class="remove">حذف </button>
                            <a href="/{{$per->id}}/edit" class="btn-a-btnform">تعديل </a>
                    </div>
                </form>
                </div>
            </div>

               @endforeach
               @else
               <p  class="msg-null-data"> لا توجد اعمال سابقة </p>  
               @endif
               
                <!-- end Product  -->
            </div>
        </div>
    </div>
</section>
</div>
@endsection