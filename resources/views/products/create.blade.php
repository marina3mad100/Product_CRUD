@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Product</div>
                <div class="card-body">
					@include('partials._messages')                   
                    <form action="{{route('products.store')}}" method="POST"  >
                        {{ csrf_field()}}
                        <div class="form-group">
							<label for="name">Product Name</label>
							<input type="text" class="form-control" name="name" value="@if ($errors->any()) {{old('name')}} @elseif (Session::has('success')) {{''}}  @endif"  placeholder="Enter Name">
                        </div>                                                                         
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>      
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
