@extends('layouts.main')

@section('content')

	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 bottom-border">
		<a href="/products">
        	<button type="button" class="btn btn-sm btn-outline-secondary">
	          <span data-feather="arrow-left"></span>
	          Back
	        </button>
        </a>
        <div class="btn-toolbar mb-2 mb-md-0">	      
	        <a href="/products/{{ $product->id }}/edit">
	        	<button type="button" class="btn btn-sm btn-outline-secondary">
		          <span data-feather="edit"></span>
		          Edit
		        </button>
	        </a>
	    </div>
	</div>
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">{{ $product->name }}</h1>
	</div>
	<div class="form-row">
	  	<div class="form-group col-md-6">
	      <label for="code">Product Code</label>
	      		<input type="text" class="form-control" name="id" value="{{ $product->id }}" readonly>
	    	</div>
	    	<div class="form-group col-md-3">
	      		<label for="quantity">Quantity in Stock</label>
	      		<input type="text" class="form-control" name="quantity" value="{{ $product->quantity }}" readonly>
	    	</div>
	    	<div class="form-group col-md-3">
	    		<label for="price">Price</label>
	    		<div class="input-group mb-2">
			        <div class="input-group-prepend">
			          <div class="input-group-text"><span data-feather="dollar-sign"></span></div>
			        </div>
			        <input type="text" class="form-control" name="price" value="{{ $product->price }}" readonly>
			     </div>
	      		
	      		
	    	</div>
	  	</div>
	  	<div class="form-group">
	      <label for="name">Product Name</label>
	      <input type="text" class="form-control" name="name" value="{{ $product->name }}" readonly>
	    </div>
	    <div class="form-group">
	    	<label for="name">Product Description</label>
	      	<textarea name="description" class="form-control" readonly>{{ $product->description }}</textarea>
	    </div>
	</form>
@endsection