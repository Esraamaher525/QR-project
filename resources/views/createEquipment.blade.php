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
                            <input type="text" class="form-control"  id="name" name="name" placeholder="enter name of machine" class="form-control" class="@error('title') is-invalid @enderror">
                            @error('title')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <label for="type">Type</label>
                            <input type="text" class="form-control"  id="type" name="type" placeholder="enter type of machine" class="form-control" >
                        </div>
                        <input type="submit" value="Submit" class="btn btn-success">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
