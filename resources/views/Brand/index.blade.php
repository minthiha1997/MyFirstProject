@extends('layouts.app')



@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">





			<a href="{{ url('brand/create') }}"><button class="btn btn-success">Add New</button>
			<div class="card">
					<div class="card-header">Brand</div>

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
							@foreach($brands as $brand)
							<tr>
								<th scope="row">{{$brand->id}}</th>
								<td>{{$brand->name}}</td>
								<td>
									<form action="{{url('brand/'.$brand->id)}}" method="POST">
									<a href="{{url('brand/'.$brand->id.'/edit')}}"><button type="button" class="btn btn-warning">Edit</button></a>
							
								@csrf
								<button type="submit" value="delete" name="_method" class="btn btn-danger" onclick='return (confirm("Are you sure you want to delete this comment?"));'>
									Delete
								</button>
							</form>
								</td>

								
							</tr>

							@endforeach
							{{$brands->links()}}
						</tbody>
					</table>  
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
