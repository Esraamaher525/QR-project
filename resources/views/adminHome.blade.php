
@extends('layouts.app')
   
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Add Machine</div>
                <div class="card-body">
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
                                @foreach ($details as $detailsMachine)
                                        <tr>
                                            <td>{{$detailsMachine -> user_name}} </td>
                                            <td>{{$detailsMachine -> name}} </td>
                                            <td>{{$detailsMachine -> H1}} </td>
                                            <td>{{$detailsMachine -> H2}} </td>
                                            <td>{{$detailsMachine -> H3}} </td>
                                            <td>{{$detailsMachine -> V1}} </td>
                                            <td>{{$detailsMachine -> V2}} </td>
                                            <td>{{$detailsMachine -> V3}} </td>
                                            <td>{{$detailsMachine -> notes}} </td>
                                            <td>{{$detailsMachine -> time_create}} </td>
                                        </tr>   
                                @endforeach
                        </tbody>
                        </table>
                    </div>
                    <div class="table-responsive">
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
                                            <td>{{$detailsBoiler -> notes}} </td>
                                            <td>{{$detailsMachine -> time_create}} </td>
                                        </tr>   
                                @endforeach
                        </tbody>
                        </table>
                    </div>
                   <button type="button" class="btn btn-success" onclick="location.href='{{ route('createEquipment') }}'">Add Machine</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection