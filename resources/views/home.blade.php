@extends('layouts.app')
   
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8"> 
            <div class="card">
                <div class="card-header">
                        Equipment
                </div>
                <ul class="list-group list-group-flush">
                    @foreach ($equipment as $equipments)
                        <li class="list-group-item ">
                        <img width="200" height="200" src="http://localhost:8000/storage/{{ $equipments->qr_code }}" alt="equipment" />
                            <!-- {!! QrCode::size(250)->generate('http://localhost:8000/fill-data/'. $equipments -> id); !!} -->
                             {{$equipments -> name}} 
                        </li>
                          
                    @endforeach
                </ul>
                </div>
            </div>
    </div>
</div>
@endsection

