@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Product</div>

                <div class="card-body">
                <form method="POST" action="{{ url('product/'.$product->id) }}">
                        @csrf 
                        <input type="hidden" name="_method" value="put">

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Product Name</label>

                          <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{$product->category->name}}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Category Name</label>
                            
                            <div class="col-md-6">
                                <select name="category_id" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}">
                                 <option>Please Choose</option>
                                @foreach($categories as $category)
                                <option value="{{$category->id}}" 
                                    @if($product->category_id==$category->id)
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
                            <label for="name" class="col-md-4 col-form-label text-md-right">SubCategory Name</label>
                            
                            <div class="col-md-6">
                                <select name="subcategory_id" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}">
                                 <option>Please Choose</option>
                                @foreach($subcategories as $subcategory)
                                <option value="{{$subcategory->id}}"
                                    @if($product->subcategory_id==$subcategory->id)
                                        selected
                                    @endif
                                    >{{$subcategory->name}}</option>
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
                            <label for="name" class="col-md-4 col-form-label text-md-right">Brand Name</label>
                            
                            <div class="col-md-6">
                                <select name="brand_id" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" selected>
                                 <option>Please Choose</option>
                                @foreach($brands as $brand)
                                <option value="{{$brand->id}}"
                                    @if($product->brand_id==$brand->id)
                                    selected
                                    @endif
                                    >{{$brand->name}}</option>
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
                            <label for="name" class="col-md-4 col-form-label text-md-right">Price</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="price" value="{{$product->price}}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Quantity</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="quantity" value="{{$product->quantity}}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Description</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="description" value="{{$product->description}}" required autofocus>

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
                                   Update
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
