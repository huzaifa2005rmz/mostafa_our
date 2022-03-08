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
                <li><a href="/control" class="active">عرض الكل </a></li>
                <li><a href="/control/servisecs">الخدمات </a></li>
                <li><a href="control/preveuas">معرض الاعمال</a></li>
                <li><a href="/control/add"> اضافة </a></li>
            </ul>
        </div>
        <div class="boxes-control ">
            <div class="box-add products">

                @if ($count > 0)
                @foreach ($posts as $post)
           
                <div class="product">
                    <div class="box">
                        <div class="max-img">
                           <a href="show/{{$post->id}}"> <img src="{{asset('imges/' . $post->img)}}" alt=""></a>
                        </div>
                        <h3>{{$post->title}}</h3>
                        <p>
                            {{$post->descrption}}
                        </p>
                        <div class="price">
                            @if ($post->price)
                            <span>{{$post->price}}$</span>
                            @else
                            <span> السعر غير محدد</span>
                            @endif
                        </div>
                        <form action="/delete/{{$post->id}}" method="POST">
                            @csrf
                        <div class="buy-now">                   
                                <button type="submit" class="remove">حذف </button>
                                <a href="/{{$post->id}}/edit" class="btn-a-btnform">تعديل </a>
                        </div>
                    </form>
                    </div>
                </div>
    
                <!-- end Product  -->
            
               @endforeach
               @else
               <p class="msg-null-data">لا توجد اعمال او خدمات !</p>
                @endif
        
        </div>
        </div>
    </div>
</section>

</div>

@endsection