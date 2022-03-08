@extends("layouts.app")



@section("contact")

<div class="form_previsous">
    <div class="form-get-data" id="form-get-data">
        <form action="/control/add/servisce/create" method="POST" class="form-data" enctype="multipart/form-data">
            @csrf
            <div class="find">
                <input type="text"  name="class"  value="per" hidden>
            </div>
            <div class="find">
                <label for="image_file" class="image_file"><i class="fa-solid fa-image"></i></label>
                <input type="file" id="image_file" name="img" hidden>
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
                <label for="">كم ساعة تستغرق هاذا الخدمة ؟</label>
                <input type="number" name="tiam">
            </div>
            <div class="find">
                <label for="">وصف عن الخدمة</label>
                <textarea  name="descrption" ></textarea>
            </div>
            <div class="submit">
                <button type="submit">اضافة</button>
            </div>
        </form>
    </div>

</div>

@endsection