@extends('layouts.main')

@section('title', 'Collections')

@section('content')
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Collections</h1>
	</div>

	<div class="table-responsive">
        <table class="table table-hover table-sm">
	
			<tr>
				<th>Collection ID</th>
				<th>Collection Name</th>
			</tr>
			@foreach ($collections as $collection)
				<tr>
					<td>{{ $collection->id }}</td>
					<td>{{ $collection->name }}</td>
				</tr>
			@endforeach
		</table>
	</div>
@endsection