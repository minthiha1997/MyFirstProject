@extends('layouts.app')



@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">





			<a href="{{ url('product/create') }}"><button class="btn btn-success">Add New</button>
			<div class="card">
				<div class="card-header">Product</div>

					<div class="card-body">

				

					<table class="table">
						<thead>
							
							<tr>
								<th scope="col">ID</th>
								<th scope="col">Category</th>
								<th scope="col">Sub-Category</th>
								<th scope="col">Brand</th>
								<th scope="col">Product</th>
								<th scope="col">Price</th>
								<th scope="col">Quantity</th>
								<th scope="col">Description</th>
								<th scope="col">Process</th>
							</tr>
							
						</thead>
						<tbody>
							@foreach($products as $product)
							<tr>
								<th scope="row">{{$product->id}}</th>
								<td>{{$product->category->name}}</td>
								<td>{{$product->subcategory->name}}</td>
								<td>{{$product->brand->name}}</td>
								<td>{{$product->name}}</td>
								<td>{{$product->price}}</td>
								<td>{{$product->quantity}}</td>
								<td>{{$product->description}}</td>
								
								<td>
									<form action="{{url('product/'.$product->id)}}" method="POST">
									<a href="{{url('product/'.$product->id.'/edit')}}"><button type="button" class="btn btn-warning">Edit</button></a>
							
								@csrf
								<button type="submit" value="delete" name="_method" class="btn btn-danger">
									Delete
								</button>
							</form>
								</td>

								
							</tr>

							@endforeach
							{{$products->links()}}
						</tbody>
					</table>  
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
