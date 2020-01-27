@extends('layouts.app')

@section('template_title')
	{{ $user->name }}'s Profile
@endsection

@section('template_fastload_css')

	#map-canvas{
		min-height: 300px;
		height: 100%;
		width: 100%;
	}

@endsection

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2">
				<div class="card">
					<div class="card-header">

					</div>
                    <div class="card-body">


				</div>
			</div>
		</div>
	</div>
@endsection

@section('footer_scripts')


@endsection
