@extends("layouts.app")


@section("contact")
<div class="form-pri">
    
<div class="form-get-data" id="form-get-data">
    <form action="{{route("admen")}}" method="POST" class="form-data">
       @csrf
        <div class="find">
            <label for=""> ID</label>
            <input type="number" name="id">
        </div>
        <div class="find">
            <label for=""> PASSORD</label>
            <input type="text" name="password">
        </div>
        
        <div class="submit">
            <button type="submit">دخول</button>
        </div>
    </form>
</div>

</div>
@endsection