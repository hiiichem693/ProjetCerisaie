@extends('layouts/master')
@section('content')
    <div class="well">
        <h1>Recherche sur critères :</h1>
        {!! Form::open(['url'=>'postRecherche']) !!}
        <select class="form-control" name="mois" id="mois" required>
            <option value="00">Aucun</option>
            <option value="1" @if(isset($mois) && $mois == "1")selected@endif>Janvier</option>
            <option value="2" @if(isset($mois) && $mois == "2")selected@endif>Février</option>
            <option value="3" @if(isset($mois) && $mois == "3")selected@endif>Mars</option>
            <option value="4" @if(isset($mois) && $mois == "4")selected@endif>Avril</option>
            <option value="5" @if(isset($mois) && $mois == "5")selected@endif>Mai</option>
            <option value="6" @if(isset($mois) && $mois == "6")selected@endif>Juin</option>
            <option value="7" @if(isset($mois) && $mois == "7")selected@endif>Juillet</option>
            <option value="8" @if(isset($mois) && $mois == "8")selected@endif>Aout</option>
            <option value="9" @if(isset($mois) && $mois == "9")selected@endif>Septembre</option>
            <option value="10" @if(isset($mois) && $mois == "10")selected@endif>Octobre</option>
            <option value="11" @if(isset($mois) && $mois == "11")selected@endif>Novembre</option>
            <option value="12" @if(isset($mois) && $mois == "12")selected@endif>Décembre</option>
        </select>
        <label for="Annee">Année :</label>
        <input type="number" name="Annee" id="Annee" @if(isset($annee)) value="{{$annee}}" @endif step="1" min="2000" max="2030">
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
