@extends('master')

@section('content')

    <h1>Articles</h1>

    @foreach($articles as $article)
        <article>

        	<h2>
        		<a href="{{ url('/articles', $article->id) }}">{{ $article ->title }}</a>
        	</h2>
        	<div class="body">
        		{{ $article->body }}
        	</div>

        	

        </article>
    @endforeach
    <h2>
        		<a href="{{ url('/articles/create')}}"> {!! Form::submit('Write Article',['class' => 'btn btn-primary form-control']) !!}</a>
        	</h2>

@stop