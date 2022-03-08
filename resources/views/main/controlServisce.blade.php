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
                <li><a href="/control/servisecs" class="active">الخدمات </a></li>
                <li><a href="/control/preveuas" >معرض الاعمال</a></li>
                <li><a href="/control/add"> اضافة </a></li>
            </ul>
        </div>
        <div class="boxes-control ">
            <div class="box-add products">


                @if ($count > 0)
                @foreach ($servs as $serv)
                
                {{-- start prodyct  --}}
        <div class="product">
            <div class="box">
                <div class="max-img">
                    <img src="{{asset("imges/" . $serv->img)}}" alt="">
                </div>
                <h3>{{$serv->title}}</h3>
                <p>
                 {{$serv->descrption}}
                </p>
                <div class="price">
                    <span>{{$serv->price}}$</span>
                </div>
                <div class="buy-now">
                    <a href="/{{$serv->id}}/edit" class="btn-a-btnform">تعديل </a>
                    <button type="submit" class="remove">حذف</button>
                </div>
            </div>
        </div>
      
        <!-- end Product  -->
        @endforeach
                    @else
                    <p class="msg-null-data">لا توجد خدمات </p>
                @endif
                  
      
                
              
            </div>
        </div>
    </div>
</section>

</div>

@endsection