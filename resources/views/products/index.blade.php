@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Products</div>
                <div class="card-body">
					@include('partials._messages')
                    @if ($products->count()>0)                                                                          
                        <table id="example" class="table table-striped">
							<thead>
							  <tr>
								<th scope="col"> # </th>
								<th scope="col"> Name </th>	
								<th scope="col">  </th>														
								<th scope="col">  </th>														
								
							  </tr>
							</thead>
							<tbody>
								@foreach ($products as $product)
									<tr>
										<td> {{$product->id}}</td>
										<td> {{$product->name}}</td>
											
											<td>
													<a class="btn btn-primary" href="{{route('products.edit',[$product->id ])}}">EDIT</a> 													
											</td>
								
											<td> 
													<form action="{{route('products.destroy' , [$product->id ])}}" method="POST"  >
													{{ csrf_field()}}
													{{ method_field('DELETE') }}
													<button type="submit" class="btn btn-danger">DELETE</button>
													</form>
												
										   </td>
									</tr>
								@endforeach								
							</tbody>
						</table>
					@endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
