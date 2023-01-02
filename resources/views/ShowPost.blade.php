@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-header">
                    <h3>{{ $post->title }}</h3>
                </div>
                
                <div class="card-body">
                    <p>{{ $post->description }}</p>
                    <img src="{{ asset('images/'). "/".$post->image }}" alt="" width="20%">
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-header">
                    <h3>كل التعليقات</h3>
                </div>
                
                <div class="card-body">
                    @foreach($post->comments as $comment)
                        <div class="card">
                            <div class="card-header">
                                {{ $comment->user->name }}
                            </div>
                            <div class="card-body">
                                <p>{{ $comment->comment }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-header">
                    <h3>إضافة تعليق</h3>
                </div>
                
                <div class="card-body">
                    <form action="{{ route('save-comment', $post->id) }}" method="post">
                        @csrf
                        <label for="comment">التعليق</label>
                        <textarea class="form-control" name="comment" id="comment" cols="30" rows="10"></textarea>
                        <button class="form-control" type="submit">إضافة التعليق</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection