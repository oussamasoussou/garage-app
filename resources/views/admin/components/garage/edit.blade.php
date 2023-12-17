@extends('admin.layouts.app')

@section('content')
<div class="intro-y flex items-center mt-8"> <h2 class="text-lg font-medium mr-auto"> Modifier les données du garage.</h2> </div>
    <div class="grid grid-cols-12 gap-6 mt-5"> <div class="intro-y col-span-12 lg:col-span-12"> <!-- DÉBUT : Validation
        de formulaire -->
        <div class="intro-y box">
            <div class="p-5" id="form-validation">
                <div class="preview">
                    <form class="validate-form" action="{{ url('update-garage/'.$garage->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf 
                        @method('PUT')
                        <div class="input-form">
                            <label class="flex flex-col sm:flex-row"> Nom
                                <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"> Au moins 3
                                    caractères</span>
                            </label>
                            <input type="text" name="nom" id="nom" class="input w-full border mt-2"
                                placeholder="Veuillez entrer le nom du garage." minlength="2" value="{{ $garage->nom }}">
                        </div>
                        <div class="input-form mt-3">
                            <label class="flex flex-col sm:flex-row"> Téléphone
                                <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"> Uniquement des
                                    chiffres</span>
                            </label>
                            <input type="number" name="telephone" id="telephone" class="input w-full border mt-2"
                                placeholder="Veuillez entrer le numéro de téléphone du garage." value="{{ $garage->telephone }}">
                        </div>
                        <div class="input-form mt-3">
                            <label class="flex flex-col sm:flex-row"> Adresse
                                <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"> Au moins 3
                                    caractères</span>
                            </label>
                            <input type="text" name="adresse" id="adresse" class="input w-full border mt-2"
                                placeholder="Veuillez entrer l'adresse du garage." minlength="2" value="{{ $garage->adresse }}">
                        </div>
                        <button type="submit" class="button bg-theme-1 text-white mt-5">Modifier</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- FIN : Validation de formulaire -->
    </div>
</div>
@endsection