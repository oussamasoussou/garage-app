@extends('admin.layouts.app')

@section('content')
<div class="col-span-12 lg:col-span-8 xxl:col-span-9">
                        <!-- BEGIN: Display Information -->
                        <div class="intro-y box lg:mt-5">
                            <div class="flex items-center p-5 border-b border-gray-200 dark:border-dark-5">
                                <h2 class="font-medium text-base mr-auto">
                                Ajouter un nouveau mécanicien.
                                </h2>
                            </div>
                            <div class="p-5">
                                <form class="validate-form" action="{{ route('mecanicien.store') }}" method="POST">
                                @csrf
                                    <div class="grid grid-cols-12 gap-5">
                                        <div class="col-span-12 xl:col-span-4">
                                            <div class="border border-gray-200 dark:border-dark-5 rounded-md p-5">
                                            <div id="previewContainer" class="w-40 h-40 relative image-fit cursor-pointer zoom-in mx-auto">
                                                <img id="previewImage" class="rounded-md" alt="Preview Image" src="{{ isset($mecaniciens->image) ? asset($mecaniciens->image) : '' }}">
                                              
                                            </div>
                                            </div>
                                            <div class="w-40 mx-auto cursor-pointer relative mt-5">
                                                <button type="button" class="button w-full bg-theme-1 text-white" onclick="document.getElementById('inputImage').click();">Change Photo</button>
                                                <input type="file" name="image" id="inputImage" class="w-full h-full top-0 left-0 absolute opacity-0" style="z-index: -1; position: absolute;">
                                            </div>
                                        </div>
                                        <div class="col-span-12 xl:col-span-8">
                                            <div class="input-form">
                                                <label class="flex flex-col sm:flex-row"> Nom
                                                    <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">Requis, au moins 3
                                                        caractères</span>
                                                </label>
                                                <input type="text" name="nom" class="input w-full border mt-2"
                                                    placeholder="Veuillez entrer le nom du mecanicien." minlength="2" required>
                                            </div>
                                            <div class="input-form mt-3">
                                                <label class="flex flex-col sm:flex-row"> Prénom
                                                    <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">Requis, au moins 3
                                                        caractères</span>
                                                </label>
                                                <input type="text" name="prenom" class="input w-full border mt-2"
                                                    placeholder="Veuillez entrer le prénom du mecanicien." minlength="2" required>
                                            </div>
                                            <div class="input-form mt-3">
                                                <label class="flex flex-col sm:flex-row"> Téléphone
                                                    <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">Requis, uniquement des
                                                        chiffres</span>
                                                </label>
                                                <input type="number" name="telephone" class="input w-full border mt-2"
                                                    placeholder="Veuillez entrer le numéro de téléphone du mecanicien." required>
                                            </div>
                                            <div class="input-form mt-3">
                                                <label class="flex flex-col sm:flex-row"> Identité
                                                    <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">Requis, uniquement des
                                                        chiffres</span>
                                                </label>
                                                <input type="number" name="identite" class="input w-full border mt-2"
                                                    placeholder="Veuillez entrer le numéro de identité du mecanicien." required>
                                            </div>
                                            <button type="submit" class="button  bg-theme-1 text-white mt-3">Enregistrer</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- END: Display Information -->
                    </div>
@endsection