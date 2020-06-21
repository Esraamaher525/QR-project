
@extends('layouts.app')
   
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Add Machine</div>
                <div class="card-body">
                @if(count($details) > 0)
                <div class="table-responsive">     
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                            <th scope="col">Employee Name</th>
                            <th scope="col">Machine Name</th>
                            <th scope="col">H1</th>
                            <th scope="col">H2</th>
                            <th scope="col">H3</th>
                            <th scope="col">V1</th>
                            <th scope="col">V2</th>
                            <th scope="col">V3</th>
                            <th scope="col">Notes</th>
                            <th scope="col">Created at</th>
                            </tr>
                        </thead>
                        <tbody>
                                @foreach ($details as $details)
                                        <tr>
                                            <td>{{$details -> user_name}} </td>
                                            <td>{{$details -> name}} </td>
                                            <td>{{$details -> H1}} </td>
                                            <td>{{$details -> H2}} </td>
                                            <td>{{$details -> H3}} </td>
                                            <td>{{$details -> V1}} </td>
                                            <td>{{$details -> V2}} </td>
                                            <td>{{$details -> V3}} </td>
                                            <td>{{$details -> notes}} </td>
                                            <td>{{$details -> time_create}} </td>
                                        </tr>   
                                @endforeach
                        </tbody>
                        </table>
                     
                    </div>
                    @else
                         <div class="mb-3">
                             <span class="my-3 text-danger">Not data found for pumps</span>
                        </div>
                    @endif
                    @if(count($detailsBoilers) > 0)
                    <div class="table-responsive mb-3"> 
                        <table class="table table-bordered">
                        <thead>
                            <tr>
                            <th scope="col">Employee Name</th>
                            <th scope="col">Machine Name</th>
                            <th scope="col">Boiler</th>
                            <th scope="col">Pressure</th>
                            <th scope="col">Coils Tempreture 1</th>
                            <th scope="col">Coils Tempreture 2</th>
                            <th scope="col">Coils Tempreture 3</th>
                            <th scope="col">Coils Tempreture 4</th>
                            <th scope="col">Coils Tempreture 5</th>
                            <th scope="col">Coils Tempreture 6</th>
                            <th scope="col">Blowdown Working</th>
                            <th scope="col">Pump no:1</th>
                            <th scope="col">Leakage no:1</th>
                            <th scope="col">Pump no:2</th>
                            <th scope="col">Leakage no:2</th>
                            <th scope="col">Notes</th>
                            <th scope="col">Created at</th>
                            </tr>
                        </thead>
                        <tbody>
                                @foreach ($detailsBoilers as $detailsBoiler)
                                        <tr>
                                            <td>{{$detailsBoiler -> user_name}} </td>
                                            <td>{{$detailsBoiler -> name}} </td>
                                            <td>{{$detailsBoiler -> boiler}} </td>
                                            <td>{{$detailsBoiler -> pressure}} </td>
                                            <td>{{$detailsBoiler -> coils_tempreture1}} </td>
                                            <td>{{$detailsBoiler -> coils_tempreture2}} </td>
                                            <td>{{$detailsBoiler -> coils_tempreture3}} </td>
                                            <td>{{$detailsBoiler -> coils_tempreture4}} </td>
                                            <td>{{$detailsBoiler -> coils_tempreture5}} </td>
                                            <td>{{$detailsBoiler -> coils_tempreture6}} </td>
                                            <td>{{$detailsBoiler -> blowdown_working}} </td>
                                            <td>{{$detailsBoiler -> pump_no1}} </td>
                                            <td>{{$detailsBoiler -> leakage1}} </td>
                                            <td>{{$detailsBoiler -> pump_no2}} </td>
                                            <td>{{$detailsBoiler -> leakage2}} </td>
                                            <td>{{$detailsBoiler -> notes}} </td>

                                            <td>{{$detailsBoiler -> time_create_boiler}} </td>
                                        </tr>   
                                @endforeach
                        </tbody>
                        </table>
                    </div>
                    @else
                        <div class="mb-3">
                                <span class="my-3 text-danger">Not data found for boilers</span>
                        </div>
                    @endif
                   <button type="button" class="btn btn-success" onclick="location.href='{{ route('createEquipment') }}'">Add Machine</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection