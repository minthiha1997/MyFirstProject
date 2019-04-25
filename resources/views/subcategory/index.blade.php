@extends('layouts.app')



@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">





			<a href="{{ url('subcategory/create') }}"><button class="btn btn-success">Add New</button>
			<div class="card">
				<div class="card-header">Sub-Category</div>

					<div class="card-body">

				

					<table class="table">
						<thead>
							
							<tr>
								<th scope="col">ID</th>
								<th scope="col">Category Name</th>
								<th scope="col">Sub-Category Name</th>
								<th scope="col">Process</th>
								
							</tr>
							
						</thead>
						<tbody>
							@foreach($subcategories as $subcategory)
							<tr>
								<th scope="row">{{$subcategory->id}}</th>
								 <td>{{$subcategory->category->name}}</td> 
								<td>{{$subcategory->name}}</td>
								<td>
									<form action="{{url('subcategory/'.$subcategory->id)}}" method="POST">
									<a href="{{url('subcategory/'.$subcategory->id.'/edit')}}"><button type="button" class="btn btn-warning">Edit</button></a>
							
								@csrf
								<button type="submit" value="delete" name="_method" class="btn btn-danger">
									Delete
								</button>
							</form>
								</td>

								
							</tr>

							@endforeach
							{{$subcategories->links()}}
						</tbody>
					</table>  
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
