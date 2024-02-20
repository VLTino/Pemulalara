@extends ('layouts.main')

@section('content')
<h1 class="mb-3">Blog</h1>
<div class="container">
@foreach ($posts as $post)
<article class="mb-5">
<h3><a href="post/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a></h3>
<h6>By: {{ $post->user->name }} in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></h6>
<p class="mb-0">{{ $post->excerpt }}</p>
<a href="post/{{ $post->slug }}" class="text-decoration-none">Read more..</a>
</article>
@endforeach
</div>
@endsection

