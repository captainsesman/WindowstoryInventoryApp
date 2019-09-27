@extends('layouts.headerless')

@section('content')
@include('session.success')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-primary loginfrm">

                <div class="logo">
                    <img src="{{ asset('images/winlogo.png') }}" class="img-fluid" alt="Windowstory Limited">
                     <h3 class="card-title frm-title">{{ __('Update Material Category') }}</h3>
                </div>             

                <div class="card-body">
                    <form method="POST" action="{{ route('material_category.update', $materialCategory->id) }}">
                    <input type="hidden" name="_method" value="PUT">
                
                        @csrf

                        
                        <div class="form-group row">
                            <label for="material_category_name" class="col-md-4 col-form-label text-md-right">{{ __('Material Category Name') }}</label>

                            <div class="col-md-6">
                                <input id="material_category_name" type="text" class="form-control @error('material_category_name') is-invalid @enderror" name="material_category_name" value="{{$materialCategory->material_category_name}}" required autocomplete="material_category_name" autofocus>

                                @error('material_category_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Update') }}
                                </button>
                            </div>
                                
                            </div>
                            
                        </div>
                    </form>
                </div>
            </div>
        <div class="col-sm-6">
            @if($errors->any())
            @foreach($errors->all() as $errors)
            <li class="text-danger">{{$errors}} </li>
            @endforeach
            @endif
        </div>
        </div>
    </div>
</div>
@endsection