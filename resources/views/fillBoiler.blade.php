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
                    <form method="POST" action="/fill-boiler">
                        @csrf
                        <input type="hidden" name="id" value={{$id}}>
                        <input type="hidden" name="user_name" value= {{ Auth::user()->name }}>
                        <label for="boiler"  class="col-md-2 col-sm-3 px-0">{{$name_machine}}</label>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input @error('boiler') is-invalid @enderror" id="on" name="boiler" value="on" >
                            <label class="form-check-label" for="on">On</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input @error('boiler') is-invalid @enderror" id="off" name="boiler" value="off">
                            <label class="form-check-label" for="off">Off</label>
                        </div>
                        @error('boiler')
                                <div class="text-danger">{{ $message }}</div>
                        @enderror
                         <div class="form-group row">
                         <label for="pressure" class="col-md-2 col-sm-3">Pressure</label>
                         <div class="col-md-4 col-sm-3">
                            <span class="col-md-12 px-0">Setting</span>
                            <span class="form-control col-md-12">70</span>
                        </div>
                         <div class="col-md-5 col-sm-6">
                            <span class="px-0">Actual</span>
                            <input type="number" class="form-control col-md-12  @error('pressure') is-invalid @enderror" id="pressure" name="pressure" placeholder="Enter Actual Pressure">
                            @error('pressure')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-6 mb-2">
                                <label for="coils_tempreture1">coils temperature 1</label>
                                <input type="number" class="form-control @error('coils_tempreture1') is-invalid @enderror" id="coils_tempreture1" name="coils_tempreture1" placeholder="Enter Coils temperature 1">
                                @error('coils_tempreture1')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-4 col-sm-6 mb-2">
                                <label for="coils_tempreture2">coils temperature 2</label>
                                <input type="number" class="form-control @error('coils_tempreture2') is-invalid @enderror" id="coils_tempreture2" name="coils_tempreture2" placeholder="Enter Coils temperature 2">
                                @error('coils_tempreture2')
                                <div class="text-danger">{{ $message }}</div>
                                 @enderror
                            </div>
                            <div class="col-md-4 col-sm-6 mb-2">
                                <label for="coils_tempreture3">coils temperature 3</label>
                                <input type="number" class="form-control @error('coils_tempreture3') is-invalid @enderror" id="coils_tempreture3" name="coils_tempreture3" placeholder="Enter Coils temperature 3">
                                @error('coils_tempreture3')
                                <div class="text-danger">{{ $message }}</div>
                                 @enderror
                            </div>
                            <div class="col-md-4 col-sm-6 mb-2">
                                <label for="coils_tempreture4">coils temperature 4</label>
                                <input type="number" class="form-control @error('coils_tempreture4') is-invalid @enderror" id="coils_tempreture4" name="coils_tempreture4" placeholder="Enter Coils temperature 4">
                                @error('coils_tempreture4')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-4 col-sm-6 mb-2">
                                <label for="coils_tempreture5">coils temperature 5</label>
                                <input type="number" class="form-control @error('coils_tempreture5') is-invalid @enderror" id="coils_tempreture5" name="coils_tempreture5" placeholder="Enter Coils temperature 5">
                                @error('coils_tempreture5')
                                <div class="text-danger">{{ $message }}</div>
                                 @enderror
                            </div>
                            <div class="col-md-4 mb-3 col-sm-6 mb-2">
                                <label for="coils_tempreture6 ">coils temperature 6</label>
                                <input type="number" class="form-control @error('coils_tempreture6') is-invalid @enderror" id="coils_tempreture6" name="coils_tempreture6" placeholder="Enter Coils temperature 6">
                                @error('coils_tempreture6')
                                <div class="text-danger">{{ $message }}</div>
                                 @enderror
                            </div>
                        </div>
                        <div class="row">
                                <label for="stack_temperature" class="col-md-3 col-sm-5">Stack temperature</label>
                                <input type="number" class="form-control col-md-6 col-sm-6 @error('stack_temperature') is-invalid @enderror" id="stack_temperature" name="stack_temperature" placeholder="Enter stack temperature">
                                @error('stack_temperature')
                                <div class="text-danger">{{ $message }}</div>
                                 @enderror
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-6">
                                <label for="pump_no1" class="col-md-4 px-0">Pump no:1</label>  
                                <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input @error('pump_no1') is-invalid @enderror" id="on" name="pump_no1" value="on" >
                                    <label class="form-check-label" for="on">On</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input @error('pump_no1') is-invalid @enderror" id="off" name="pump_no1" value="off">
                                    <label class="form-check-label" for="off">Off</label>
                                </div>
                                @error('pump_no1')
                                <div class="text-danger">{{ $message }}</div>
                                 @enderror
                            </div>
                            <div class="col-sm-6">
                                <label for="leakage" class="col-md-4 px-0">Leakage</label>  
                                <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input @error('leakage1') is-invalid @enderror" id="yes" name="leakage1" value="yes" >
                                    <label class="form-check-label" for="yes">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input @error('leakage1') is-invalid @enderror" id="no" name="leakage1" value="no">
                                    <label class="form-check-label" for="no">No</label>
                                </div>
                                @error('leakage1')
                                <div class="text-danger">{{ $message }}</div>
                                 @enderror
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-6">
                                <label for="pump_no2" class="col-md-4 px-0">Pump no:2</label>  
                                <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input @error('pump_no2') is-invalid @enderror" id="on" name="pump_no2" value="on" >
                                    <label class="form-check-label" for="on">On</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input @error('pump_no2') is-invalid @enderror" id="off" name="pump_no2" value="off">
                                    <label class="form-check-label" for="off">Off</label>
                                </div>
                                @error('pump_no2')
                                <div class="text-danger">{{ $message }}</div>
                                 @enderror
                            </div>
                            <div class="col-sm-6">
                                <label for="leakage" class="col-md-4 px-0">Leakage</label>  
                                <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input @error('leakage2') is-invalid @enderror" id="yes" name="leakage2" value="yes" >
                                    <label class="form-check-label" for="yes">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input @error('leakage2') is-invalid @enderror" id="no" name="leakage2" value="no">
                                    <label class="form-check-label" for="no">No</label>
                                </div>
                                @error('leakage2')
                                <div class="text-danger">{{ $message }}</div>
                                 @enderror
                            </div>
                        </div>
                        <label for="blowdown_working" class=" col-md-3 col-sm-5 px-0 mt-2">Blowdown Working</label>
                        <div class="form-check form-check-inline ">
                            <input type="radio" class="form-check-input @error('blowdown_working') is-invalid @enderror" id="yes" name="blowdown_working" value="yes" >
                            <label class="form-check-label" for="yes">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input @error('blowdown_working') is-invalid @enderror" id="no" name="blowdown_working" value="no">
                            <label class="form-check-label" for="no">No</label>
                        </div>
                        @error('blowdown_working')
                                <div class="text-danger">{{ $message }}</div>
                        @enderror
    
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
