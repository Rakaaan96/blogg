@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{route('allposts')}}"> كل الملفات</a>
    
    <div class="row">
        <div class="col-12">
            <form action="{{route('save-post')}}" method="post" enctype="multipart/form-data">
                @csrf
                <label for="title">عنوان المقالة</label>
                <input class="form-control" type="text" name="title" >

                <label for="description">المقالة</label>
                <textarea class="form-control" name="description"  cols="30" rows="10"></textarea>

                <label for="image">صورة المقالة</label>
                <input class="form-control" type="file" name="image" >

                <button class="form-control" type="submit">حفظ المقالة </button>



            </form>





        </div>



    </div>
</div>
@endsection
