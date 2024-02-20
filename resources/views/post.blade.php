@extends ('layouts.main')

@section('content')
<h3>{{ $post->title }}</h3>
<h6>By: {{ $post->user->name }} in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></h6>
{!! $post->body !!} <br>
<a href="/blog">Back to blog</a>
@endsection

