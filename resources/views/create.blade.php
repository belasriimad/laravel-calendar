@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-md-8 mx-auto my-4">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    <h5 class="card-title p-0 m-0">Ajouter un événement</h5>
                </div>
                <div class="card-body">
                    <form action="{{route('events.store')}}" method="post">
                        @csrf
                        <div class="container">
                            <form>
                                <fieldset class="form-group row">
                                    <legend class="col-form-legend col-sm-1-12">Titre</legend>
                                    <div class="col-sm-1-12">
                                        <input type="text" class="form-control" name="title" id="title" placeholder="Titre*">
                                    </div>
                                </fieldset>
                                <fieldset class="form-group row">
                                    <legend class="col-form-legend col-sm-1-12">Date Début</legend>
                                    <div class="col-sm-1-12">
                                        <input type="date" class="form-control" name="start_date" id="start_date" placeholder="Date Début*">
                                    </div>
                                </fieldset>
                                <fieldset class="form-group row">
                                    <legend class="col-form-legend col-sm-1-12">Date Fin</legend>
                                    <div class="col-sm-1-12">
                                        <input type="date" class="form-control" name="end_date" id="end_date" placeholder="Date Fin*">
                                    </div>
                                </fieldset>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary">Valider</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection