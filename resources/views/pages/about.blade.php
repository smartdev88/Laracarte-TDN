@extends('layouts.default')


@section('content')
    

    <div class="container"> 
		<h2>What is Laracarte?</h2>
		<p>Laracarte is a clone app of <a href="https://laramap.com" target="_blank">Laramap.com</a>
			<div class="row">
				<div class="col-md-6">
					<p class="alert alert-warning">
						<strong><i class="fa fa-exclamation-triangle"></i> This app has been built by @etsmo for learning purposes</strong>
					</p>
				</div>
			</div>

			<p>Feel free to help to improve the <a href="#">source code</a>.</p>

			<hr>
			<h2>What is Laramap?</h2>
			<p>Laramap is the website by which Laracarte was inspired</p>
			<hr>
			<h2>Which tools and services are used in Laracarte?</h2>
			<p>Basically it's built on Laravel, Bootstrap. But there's a bunch os services used for email and other sections</p>
			<ul>
				<li>Laravel</li>
				<li>Bootstrap</li>
				<li>Amazon s3</li>
				<li>Mandrill</li>
				<li>Google Maps</li>
				<li>Gravatar</li>
			</ul>

    </div>


@stop
