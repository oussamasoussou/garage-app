@extends('admin.layouts.app')

@section('content')
<div class="grid grid-cols-12 gap-6">
                    <!-- BEGIN: Profile Menu -->
                    <div class="col-span-12 lg:col-span-4 xxl:col-span-3 flex lg:block flex-col-reverse">
                        <div class="intro-y box mt-5">
                          
                            <div class="p-5 border-t border-gray-200 dark:border-dark-5">
                                <a class="flex items-center" href="{{ url('categories') }}"> <i data-feather="list" class="w-4 h-4 mr-2"></i> Liste des catégories </a>
                                <a class="flex items-center mt-5" href="{{ url('create-categorie') }}"> <i data-feather="plus-square" class="w-4 h-4 mr-2"></i> Ajouter une catégorie </a>
                            </div>
                            <div class="p-5 border-t border-gray-200 dark:border-dark-5">
                                <a class="flex items-center" href="{{ url('sousCategories') }}"> <i data-feather="list" class="w-4 h-4 mr-2"></i> Liste des sous-catégories </a>
                                <a class="flex items-center text-theme-1 dark:text-theme-10 font-medium mt-5" href="{{ url('create-sousCategorie') }}"> <i data-feather="plus-square" class="w-4 h-4 mr-2"></i> Ajouter une sous-catégorie </a>
                            </div>
                            <div class="p-5 border-t border-gray-200 dark:border-dark-5">
                                <a class="flex items-center" href="{{ url('sousCategories') }}"> <i data-feather="list" class="w-4 h-4 mr-2"></i> Liste des produits </a>
                                <a class="flex items-center mt-5" href="{{ url('create-sousCategorie') }}"> <i data-feather="plus-square" class="w-4 h-4 mr-2"></i> Ajouter un produit </a>
                            </div>
                        </div>
                    </div>
                    <!-- END: Profile Menu -->
                    <div class="col-span-12 lg:col-span-8 xxl:col-span-9">
                        <!-- BEGIN: Display Information -->
                        <div class="intro-y box lg:mt-5">
                            <div class="flex items-center p-5 border-b border-gray-200 dark:border-dark-5">
                                <h2 class="font-medium text-base mr-auto">
                                    Ajouter une sous-catégorie
                                </h2>
                            </div>
                            <form action="{{ route('sousCategorie.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                                <div class="p-5">
                                    <div class="grid grid-cols-12 gap-5">
                                        <div class="col-span-12 xl:col-span-8">
                                            <div>
                                                <label>Nom</label>
                                                <input name="libelle" type="text" class="input w-full border mt-2" placeholder="Veuillez entrer le nom du sous-catégorie ...">
                                            </div>
                                            <div class="mt-3">
                                                <label>catégorie</label>
                                                <div class="mt-2">
                                                    <select name="categorieId" data-search="true" class="tail-select w-full">
                                                        @foreach ($categories as $categorie)
                                                            <option value="{{ $categorie->id }}">{{ $categorie->libelle }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="flex justify-end mt-4">
                                                <button type="submit" class="button bg-theme-1 text-white ml-auto">Enregistrer</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
@endsection