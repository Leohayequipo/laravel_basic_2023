@extends('template')

@section('content')
<h1>Listado</h1>
    @foreach($posts as $post)
    <p>
        <strong>
            {{ $post['id'] }}
            <a href="{{  route('post',$post['slug'])}}">
                {{$post['title']}}
            </a>
        </strong>
    </p>
    @endforeach
@endsection
