@extends('layout.master')

@section('title', 'Login')

<!--Barra de Navegacion-->

@section('navbar')
<div class="container">
	<div class="row align-center">
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
			<img src="{{url('')}}/img/justadmin.png"/>
			<hr>
		</div>
		<div class="col-sm-4"></div>
	</div>
</div>
@stop

<!--Contenido-->

@section('content')
<div class="container">
	<div class="col-sm-4"></div>
		<div class="col-sm-4">
			{{ Form::open(['url' => 'login', 'class' => 'form-horizontal', 'method' => 'post', 'id' => 'formalogin']) }}
                <div class="form-group">
	                <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                </div>
                <p class="align-right"><input type='submit' name='login' value='Login' id="login"></p>
            {{ Form::close() }}
		</div>
		<div class="col-sm-4"></div>
</div>
@if(session('status'))
        <script type="text/javascript">alert("{{session('status')}}")</script>
@endif
@stop