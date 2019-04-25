@extends('layouts.app')



@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">





			<a href="{{ url('category/create') }}"><button class="btn btn-success">Add New</button>
			<div class="card">
				<div class="card-header">Category</div>

					<div class="card-body">

				

					<table class="table">
						<thead>
							
							<tr>
								<th scope="col">ID</th>
								<th scope="col">Name</th>
								<th scope="col">Process</th>
								
							</tr>
							
						</thead>
						<tbody>
							@foreach($categories as $category)
							<tr>
								<th scope="row">{{$category->id}}</th>
								<td>{{$category->name}}</td>
								<td>
									<form action="{{url('category/'.$category->id)}}" method="POST">
									<a href="{{url('category/'.$category->id.'/edit')}}"><button type="button" class="btn btn-warning">Edit</button></a>
							
								@csrf
								<button type="submit" value="delete" name="_method" class="btn btn-danger">
									Delete
								</button>
							</form>
								</td>

								
							</tr>

							@endforeach
							{{$categories->links()}}
						</tbody>
					</table>  
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
