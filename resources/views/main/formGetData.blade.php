@extends("layouts.app")


@section("contact")
<div class="form-pri">
    
<div class="form-get-data" id="form-get-data">
    <form action="" class="form-data">
        <div class="find">
            <label for="image_file" class="image_file"><i class="fa-solid fa-image"></i></label>
            <input type="file" id="image_file" hidden>
        </div>
        <div class="find">
            <label for="">اسم الخدمة</label>
            <input type="text" name="name_product">
        </div>
        <div class="find">
            <label for="">سعر الخدمة $</label>
            <input type="number" name="price" value="0">
        </div>
        <div class="find">
            <label for="">وصف عن الخدمة</label>
            <textarea name="dexcription"></textarea>
        </div>
        <div class="submit">
            <button type="submit">اضافة</button>
        </div>
    </form>
</div>

</div>
@endsection