@extends('template')

@section('content')
<h1>Listado</h1>
    @foreach($posts as $post)
    <p>
        <strong>
            <!-- cambie de array $post['id']   a objeto propiedad $post->id}-->
            {{ $post->id }}
            <a href="{{  route('post',$post->slug)}}">
                {{$post->title}}
            </a>
        </strong>
    </p>
    @endforeach
    {{ $posts->links() }}
@endsection
