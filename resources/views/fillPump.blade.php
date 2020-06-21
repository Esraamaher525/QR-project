@extends('layouts.app')
   
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @guest 
                    <span class="help-block m-3">
                        <h4 class="text-danger">You must login first</h4>
                    </span>
                  @endguest  
                  @auth
                <div class="card-header">Data Of {{$name_machine}}</div>
                <div class="card-body"> 
                    <form method="POST" action="/fill-pump">
                        <img  src="{{ asset('assets/images/pump.PNG') }}" width="100%">
                        @csrf
                        <input type="hidden" name="id" value={{$id}}>
                       
                        <input type="hidden" name="user_name" value= {{ Auth::user()->name }}>
                      
                        <div class="row">
                            <div class="col-md-4">
                                <label for="h1" class="col-form-label">H1</label>
                                <input type="number" id="h1" name="h1" placeholder="enter H1 with (MM/SEC)" class="form-control @error('h1') is-invalid @enderror">
                                @error('h1')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label for="h2" class="col-form-label">H2</label>
                                <input type="number" id="h2" name="h2" placeholder="enter H2 with (MM/SEC)" class="form-control @error('h2') is-invalid @enderror" >
                                @error('h2')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-4">    
                                <label for="h3" class="col-form-label">H3</label>
                                <input type="number" id="h3" name="h3" placeholder="enter H3 with (MM/SEC)" class="form-control @error('h3') is-invalid @enderror">
                                @error('h3')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                           
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="v1" class="col-form-label">V1</label>
                                <input type="number" id="v1" name="v1" placeholder="Enter V1 with (MM/SEC)" class="form-control @error('v1') is-invalid @enderror" >  
                                @error('v1')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror     
                            </div>
                            <div class="col-md-4">
                                 <label for="V2"  class="col-form-label">V2</label>
                                 <input type="number" id="v2" name="v2" placeholder="Enter V2 with (MM/SEC)" class="form-control @error('v2') is-invalid @enderror" >   
                                 @error('v2')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label for="v3"  class="col-form-label">V3</label>
                                <input type="number" id="v3" name="v3" placeholder="Enter V3 with (MM/SEC)" class="form-control @error('v3') is-invalid @enderror">
                                @error('v3')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>                   
                        </div>
                        <div class="row px-3">
                                <label for="notes"  class="col-form-label">Notes</label>
                                <textarea class="form-control" id="notes" name="notes" rows="3" placeholder="Enter your notes"></textarea>
                        </div>
                        <input type="submit" value="Submit" class="btn btn-primary mt-2">
                      
                    </form>
                  
                </div>
            </div>
            @endauth
        </div>
    </div>
</div>
@endsection
