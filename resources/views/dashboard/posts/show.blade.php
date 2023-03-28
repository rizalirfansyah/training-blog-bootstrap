@extends('dashboard.layouts.main')

@section('container')
    
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h1 class="mb-3">{{ $post->title }}</h1>

            <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left" ></span> Back to my posts</a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit" ></span> Edit</a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn bg-danger text-white" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span>Delete</button>
              </form>
            <img src="https://loremflickr.com/1200/400?{{ $post->category->name }}" class="card-img-top img-fluid mt-3" alt="{{ $post->category->name }}">

            <article class="my-3 fs-5">
            {{-- untuk menjalankan yg ada specialchars, bukan pakai "{{ $parameter }}" --}}
            {!! $post->body !!}
            </article>
            
        </div>
    </div>
</div>

@endsection