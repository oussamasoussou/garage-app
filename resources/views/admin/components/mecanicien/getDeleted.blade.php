@extends('admin.layouts.app')

@section('content')
<h2 class="intro-y text-lg font-medium mt-10"> Liste des mécaniciens archivée </h2> <div class="grid grid-cols-12 gap-6 mt-5"> <div
    class="intro-y col-span-12 flex flex-wrap sm:flex-no-wrap items-center mt-2">
    <a href="{{ url('create-mecanicien') }}"><button class="button text-white bg-theme-1 shadow-md mr-2">Ajouter mécanicien</button></a>
    <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
    <div class="w-56 relative text-gray-700 dark:text-gray-300">
        <input type="text" class="input w-56 box pr-10 placeholder-theme-13" placeholder="Search...">
        <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-feather="search"></i>
    </div>
    </div>
    </div>
    <!-- BEGIN: Data List -->
    <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
        <table class="table table-report -mt-2">
            <thead>
                <tr>
                     <th class="whitespace-no-wrap">ID</th>
                    <th class="whitespace-no-wrap">NOM</th>
                    <th class="whitespace-no-wrap">PRÉNOM</th>
                    <th class="whitespace-no-wrap">TÉLÉPHONE</th>
                    <th class="whitespace-no-wrap">IDENTITÉ</th>
                    <th class="text-center whitespace-no-wrap">ACTIONS</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mecaniciens as $mecanicien )
                <tr class="intro-x">
                    <td>{{ $mecanicien->id }}</td>
                    <td>{{ $mecanicien->nom }}</td>
                    <td>{{ $mecanicien->prenom }}</td>
                    <td>{{ $mecanicien->telephone }}</td>
                    <td>{{ $mecanicien->identite }}</td>
                    <td class="table-report__action w-56">
                        <div class="flex justify-center items-center">
                        <a class="flex items-center mr-3" style="color: #03660c;" href="{{ route('mecaniciens.restore', ['id' => $mecanicien->id]) }}">
                        <i data-feather="corner-up-left" class="w-4 h-4 mr-1"></i> <span style="color: #03660c;">Désarchivé</span>
                        </a>
                           
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>

    @endsection