@extends('layouts/master')
@section('content')
    <div class="well">
        <h1>Recherche sur critères :</h1>
        {!! Form::open(['url'=>'postRecherche']) !!}
        <select class="form-control" name="mois" id="mois" required>
            <option value="00" selected>Aucun</option>
            <option value="1">Janvier</option>
            <option value="2">Février</option>
            <option value="3">Mars</option>
            <option value="4">Avril</option>
            <option value="5">Mai</option>
            <option value="6">Juin</option>
            <option value="7">Juillet</option>
            <option value="8">Aout</option>
            <option value="9">Septembre</option>
            <option value="10">Octobre</option>
            <option value="11">Novembre</option>
            <option value="12">Décembre</option>
        </select>
        <label for="Annee">Année :</label>
        <input type="number" name="Annee" id="Annee" step="1" min="2000" max="2030">
        <div class="form-group">
            <button type="submit" class="btn btn-default btn-primary"><span class="glyphicon glyphicon-ok"></span>
                Valider
            </button>

            <button type="button" class="btn btn-default btn-primary"
                    onclick="{window.location = '../public/home';}"
            <span class="glyphicon glyphicon-remove"></span> Annuler

            </button>
        </div>
    </div>
@stop
