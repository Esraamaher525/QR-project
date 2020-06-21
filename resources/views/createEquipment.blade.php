@extends('layouts.app')
   
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">       
                    <form method="POST" action="/equipment">
                        @csrf
                        <div class="form-group">
                             <label for="name">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror"  id="name" name="name" placeholder="enter name of machine" class="form-control" class="@error('title') is-invalid @enderror">
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <label for="type" class="mt-2">Type</label>
                            <input type="text" class="form-control @error('type') is-invalid @enderror"  id="type" name="type" placeholder="enter type of machine" class="form-control" >
                            @error('type')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <input type="submit" value="Submit" class="btn btn-success">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
