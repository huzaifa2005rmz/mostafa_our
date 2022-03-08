@extends("layouts.app")



@section("contact")




        <!-- Start Show box Page  -->
        <div class="show-page">
            <div class="container">
                <div class="max-img-show">
                    <img src="{{asset("imges/" . $product->img)}}" alt="">
                </div>
                <div class="contact">
                    <h3>{{$product->title}}</h3>
                    <p>
                     {{$product->descrption}}
                    </p>
                    <div class="taim">
                        <h4>هاذا الخدمة تستغرق    <span>
                            @if ($product->tiam)
                                {{$product->tiam}} ساعة
                                @else
                                الموقت غير محدد
                            @endif
                            </span> </h4>
                    </div>
                    <div class="price">
                        <span>{{$product->price}}$</span>
                    </div>
                    <div class="buttons">
                        <form action="/checkoutpage" method="POST">
                            @csrf
                            <input type="text" name="price_ch" value="{{$product->price}}" hidden>
                            <input type="text" name="dsa" value="{{$product->descrption}}" hidden>
                            <input type="text" name="title" value="{{$product->title}}" hidden>
                            <input type="text" name="price" value="{{$product->price}}" hidden>
                            <input type="text" name="img" value="{{$product->img}}" hidden>
                            <button type="submit">طلب الخدمة</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Show Box page  -->
        <!-- Start sevisece  -->

<div class="services">
    
            <!-- === Start Home Page === -->

            <section class="servisce-page">
                <div class="container">
                    <header class="title-servisce">
                        <a href="" class="active">
                            <h3>خدمات اخرى</h3>
                        </a>

                    </header>
                    <div class="products">
                      
                        @foreach ($posts as $post)
                              <!-- Start Product  -->
                        <div class="product">
                            <div class="box">
                                <div class="max-img">
                                  <a href="/show/{{$post->id}}"><img src="{{asset("imges/" . $post->img)}}" alt=""></a>
                                </div>
                                <h3>{{$post->title}}</h3>
                                <p>
                                 {{$post->descrption}}
                                </p>
                                <div class="price">
                                    <span>{{$post->price}}$</span>
                                </div>
                                <div class="buy-now">
                                    <button type="submit">طلب الان</button>
                                    <button type="submit"><a href="/show/{{$post->id}}">عرض</a></button>
                                </div>
                            </div>
                        </div>
                        <!-- end Product  -->
                        @endforeach
                   
                    </div>
                </div>
            </section>


       

    <!-- End seviscec -->


</div>
@endsection