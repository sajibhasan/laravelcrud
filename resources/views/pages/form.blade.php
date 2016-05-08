@extends('master')

@section('title','Forms')

@section('content')

    <div class="row">
    	<div class="col-md-6 col-md-offset-3 ">
    		<h3>User profile</h3>
    		<hr/>
    		{!!Form :: open (array('url' => '#','class'=>'form-horizontal'))!!}

    		<div class="form-group">

    		    {!!Form :: label('user_name', 'Name:')!!}
    		    {!!Form :: text ('user_name','',array('class'=>'form-control','placeholder'=>'User Name'))!!}
    		</div>
    		
    		<div class="form-group">

    		    {!!Form :: label('email', 'Email:')!!}
    		    {!!Form :: email('email', $value=null,array('class' =>'form-control', 'placeholder'=>'Email Address'))!!}
    		</div>
    		

    		<div class="form-group">

    		    {!!Form :: label('gender', 'Gender : ')!!}
    		    {!!Form :: radio('gender', 'Male', true)!!} Male
    		    {!!Form ::radio('gender', 'Female', false)!!} Female
    		    {!!Form ::radio('gender', 'Unisex', false)!!} Unisex
    	   </div>
    	

    		<div class="form-group">

    		{!!Form ::label('role', 'Role: ')!!}
    		{!!Form :: select('role', array(
    		    'admin'=>'Administrator',
    		    'author'=>'Author',
    		    'subscriber'=>'Subscriber',
    		    'registered'=>'Registered'),
    		    null,['class'=>'form-control'])!!}

    		 </div>
    		 <div class="form-group">

    		{!!Form ::label('about', 'About me')!!}<br>
    		
    		{!!Form::textarea('about','', array('class'=>'form-control','rows'=>'4'))!!}
    		</div>
    		{!!Form ::submit('Update',array('class' => 'btn btn-primary'))!!}
    		{!!Form::close()!!}




    	</div>
    </div>

@endsection