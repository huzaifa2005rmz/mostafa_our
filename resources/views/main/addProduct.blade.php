@extends("layouts.app")


@section("contact")

<div class="services">
    <section class="control-page">
        <div class="container">
            <div class="form-get-data" id="form-get-data">
                <form action="/create/srv" method="POST" class="form-data"  enctype="multipart/form-data">
                    @csrf
                    <i class="fa-solid fa-xmark remove_formdata"></i>
                    <div class="find">
                        <label for="image_file" class="image_file"><i class="fa-solid fa-image"></i></label>
                        <input type="file" id="image_file" name="img" hidden>
                    </div>
                    <div class="find">
                        <input type="text"  name="class" value="srv" hidden>
                    </div>
                    <div class="find">
                        <label for="">اسم الخدمة</label>
                        <input type="text" name="title">
                    </div>
                    <div class="find">
                        <label for="">سعر الخدمة $</label>
                        <input type="number" name="price" value="0">
                    </div>
                    <div class="find">
                        <label for="">وصف عن الخدمة</label>
                        <textarea name="descrption"></textarea>
                    </div>
                    <div class="submit">
                        <button type="submit">اضافة</button>
                    </div>
                </form>
            </div>
    
    
    
            <div class="nar-control">
                <header class="header-control">
                    <h3>لوحة التحكم </h3>
                </header>
                <ul>
                    <li><a href="/control">عرض الكل </a></li>
                    <li><a href="/control/servisecs">الخدمات </a></li>
                    <li><a href="/control/preveuas">معرض الاعمال</a></li>
                    <li><a href="/control/add" class="active"> اضافة </a></li>
                </ul>
            </div>
            <div class="boxes-control ">
                <div class="box-add products">
                    <div class="product">
                        <div class="box box-add">
                            <h2 class="title">
                                اضافة خدمة
                            </h2>
                            <button type="submit" class="add-product">
                                <i class="fa-solid fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="box box-add-pr">
                            <h2 class="title">
                                اضافة عمل سابق
                            </h2>
                            <a href="/add/servisce"><button type="submit" class="add-product form_previous" id="">
                                    <i class="fa-solid fa-plus"></i>
                                </button></a>
                        </div>
                    </div>
                    <!-- end Product  -->
                </div>
            </div>
        </div>
    </section>
</div>
@endsection