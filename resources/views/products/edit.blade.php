@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Product</div>
                <div class="card-body">
					@include('partials._messages')
					<?php if(isset($product->id) && !empty($product->id)){  ?>
							<form action="{{route('products.update' , [$product->id])}}" method="POST"  >
								{{ csrf_field()}}
								{{ method_field('PUT') }}
								<div class="form-group">
									<label for="name">Product name</label>
									<input type="text" class="form-control" name="name" value="@if ($errors->any()) {{old('name')}} @else {{$product->name}}  @endif"  placeholder="Enter Name">
								</div>
								<button type="submit" class="btn btn-primary">Save</button>
							</form>   
					<?php  }  ?>		
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
