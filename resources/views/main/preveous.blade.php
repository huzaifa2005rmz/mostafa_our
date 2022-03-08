@extends("layouts.app")



@section("contact")

<div class="services">
    
<section class="servisce-page">
    <div class="container">
        <header class="title-servisce">
            <a href="/services">
                <h3>خدمات</h3>
            </a>
            <a href="" class="active">
                <h3>اعمال سابقة </h3>
            </a>
        </header>
    
        <div class="products">
            <!-- Start Product  -->
            @foreach ( $pervuas as $per)
            <div class="product">
                <div class="box">
                    <div class="max-img">
                        <img src="{{asset("imges/" . $per->img)}}" alt="">
                    </div>
                    <h3>{{$per->title}}</h3>
                    <p>
                      {{$per->descrption}}
                    </p>
                    <div class="price">
                        <span>{{$per->price}}$</span>
                    </div>
                    <form action="/checkoutpage" method="POST">
                        @csrf
                        <input type="text" name="price_ch" value="{{$per->price}}" hidden>
                        <input type="text" name="dsa" value="{{$per->descrption}}" hidden>
                        <input type="text" name="title" value="{{$per->title}}" hidden>
                        <input type="text" name="price" value="{{$per->price}}" hidden>
                        <input type="text" name="img" value="{{$per->img}}" hidden>
                        <div class="buy-now">
                        
                            <button type="submit">طلب الان</button>
                            <a href="show/{{$per->id}}" class="btn-a-btnform">عرض تفاصيل</a>
                        </div>
                    </form>
                   
                </div>
            </div>
            @endforeach
            <!-- end Product  -->
           
           
        </div>
    </div>
</section>


</div>

@endsection