@extends ('layouts.main')

@section('content')
<h1>Categories</h1>
<div class="container">
@foreach ($categories as $category)
<article class="mb-5">
<h3><a href="categories/{{ $category->slug }}">{{ $category->name }}</a></h3>
</article>
@endforeach
</div>
@endsection

