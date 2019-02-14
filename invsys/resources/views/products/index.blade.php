@extends('layouts.main')

@section('title', 'Products')

@section('content')
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Products</h1>
	</div>

	<form action="/products/search" method="POST" role="search">
    	@csrf
    	<div class="input-group mb-3">
		  <input type="text" class="form-control" name="search_content" placeholder="Search" aria-label="Search">
		  <div class="input-group-append">
		    <button class="btn btn-outline-secondary" type="submit"><i class="fas fa-search"></i></button>
		  </div>
		</div>
	</form>
	

	<div class="table-responsive">
        <table class="table table-hover table-sm">
	
			<tr>
				<th>@sortablelink('collection_id', 'Collection')</th>
				<th>@sortablelink('id', 'Product Code')</th>
				<th>@sortablelink('name', 'Product')</th>
				<th>@sortablelink('quantity', 'Quantity')</th>
				<th>@sortablelink('price', 'Price')</th>
			</tr>
			@foreach ($products as $product)
				<tr>
					<td>{{ $product->collection->id }}</td>
					<td><a href="/products/{{ $product->id }}">{{ $product->id }}</a></td>
					<td>{{ $product->name }}</td>
					<td>{{ $product->quantity }}</td>
					<td style="text-align: right">$ {{ number_format($product->price,2,'.','') }}</td>
				</tr>
			@endforeach
		</table>
		
		{{ $products->appends(request()->except('page'))->render() }}
		
	</div>
@endsection