@extends('master')


@section('content')



    <h1>About Me : </h1>

    <h3>People I Like</h3>
    
    @if(count($people))
       <ul>
       	    @foreach($people as $person)
       	        <li>{{$person}}</li>
       	    @endforeach
       </ul>

    @endif
        
            
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem dolorem suscipit, corrupti odio rem veritatis possimus id est odit harum blanditiis omnis! Voluptates recusandae, et nihil pariatur cupiditate tenetur voluptatem.</p>
       
    
@stop