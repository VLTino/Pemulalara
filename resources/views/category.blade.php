@extends ('layouts.main')

@section('content')
<h1>Categories : {{ $category }}</h1>
<div class="container">
@foreach ($posts as $post)
<article class="mb-5">
<h3><a href="/post/{{ $post->slug }}">{{ $post->title }}</a></h3>
<h6>By: Tino in {{ $post->category->name }}</h6>
<p>{{ $post->excerpt }}</p>
</article>
@endforeach
</div>
@endsection

