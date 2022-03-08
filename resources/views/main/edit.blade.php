@extends("layouts.app")



@section("contact")

<div class="form_previsous">
    <div class="form-get-data" id="form-get-data">
        <form action="/updata/{{$editdata->id}}" method="POST" class="form-data" enctype="multipart/form-data">
            @csrf
            <div class="find">
                <input type="text"  name="class"  value="{{$editdata->class}}" hidden>
            </div>
            <div class="find">
                <label for="image_file" class="image_file"><i class="fa-solid fa-image"></i></label>
                <input type="file" id="image_file" name="img" value="" hidden>
            </div>
            <div class="find">
                <label for="">اسم الخدمة</label>
                <input type="text" name="title" value="{{$editdata->title}}">
            </div>
            <div class="find">
                <label for="">سعر الخدمة $</label>
                <input type="number" name="price"value="{{$editdata->price}}">
            </div>
            <div class="find">
                <label for="">كم ساعة تستغرق هاذا الخدمة ؟</label>
                <input type="number" name="tiam" value="{{$editdata->tiam}}">
            </div>
            <div class="find">
                <label for="">وصف عن الخدمة</label>
                <textarea  name="descrption" >{{$editdata->descrption}}</textarea>
            </div>
            <div class="submit">
                <button type="submit">تحديث</button>
            </div>
        </form>
    </div>

</div>

@endsection