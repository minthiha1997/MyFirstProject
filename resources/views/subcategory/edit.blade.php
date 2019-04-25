@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Sub-Category</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('subcategory/'.$subcategory->id) }}">
                        @csrf 
                        <input type="hidden" name="_method" value="put">
                         <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Category Name</label>
                            
                            <div class="col-md-6">
                                <select name="category_id" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}">
                                 <option>Please Choose</option>
                                @foreach($categories as $category)
                                <option value="{{$category->id}}"
                                    @if($subcategory->category_id==$category->id)
                                    selected
                                    @endif

                                >{{$category->name}}</option>
                                @endforeach
                            </select>
                                
                                
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{$subcategory->name}}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        
                       
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                   Save
                                </button>

                               
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
