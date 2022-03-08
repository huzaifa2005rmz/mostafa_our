@extends("layouts.app")


@section("contact")

<div class="services">
    
<section class="servisce-page">
    <div class="container">
        <header class="title-servisce">
            <a href="" class="active">
                <h3>خدمات</h3>
            </a>
            <a href="/previous">
                <h3>اعمل سابقة </h3>
            </a>
        </header>
    
        <div class="products">
            @foreach ($posts as $post)
                  <!-- Start Product  -->
            <div class="product">
                <div class="box">
                    <div class="max-img">
                        <img src="{{asset('imges/' . $post->img)}}" alt="">
                    </div>
                    <h3>{{$post->title}}</h3>
                    <p>
                     {{$post->descrption}}
                    </p>
                    <div class="price">
                        <span>{{$post->price}}$</span>
                    </div>
                    <div class="buy-now">
                        
                        <button type="submit">Buy Now</button>
                        <a href="show/{{$post->id}}" class="btn-a-btnform">عرض تفاصيل</a>
                    </div>
                </div>
            </div>
            <!-- end Product  -->
            @endforeach
          
        </div>
    </div>
</section>


</div>
    
@endsection