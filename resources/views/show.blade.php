@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-md-8 mx-auto my-4">
            <div class="card">
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <span class="text-primary font-weight-bold">Titre : {{$event->title}}</span>
                        </li>
                        <li class="list-group-item">
                            <span class="text-success font-weight-bold">Date début : {{$event->start_date}}</span>
                        </li>
                        <li class="list-group-item">
                            <span class="text-danger font-weight-bold">Date fin : {{$event->end_date}}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection