@extends('admin.layouts.app')

@section('content')
<h2 class="intro-y text-lg font-medium mt-10"> Liste des garages </h2> <div class="grid grid-cols-12 gap-6 mt-5"> <div
    class="intro-y col-span-12 flex flex-wrap sm:flex-no-wrap items-center mt-2">
    <a href="{{ url('create-garage') }}"><button class="button text-white bg-theme-1 shadow-md mr-2">Ajouter garage</button></a>
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
                    <!-- <th class="whitespace-no-wrap">Id</th>
                    <th class="whitespace-no-wrap">Nom</th>
                    <th class="whitespace-no-wrap">Téléphone</th>
                    <th class="whitespace-no-wrap">Adresse</th>
                    <th class="text-center whitespace-no-wrap">Actions</th> -->
                     <th class="whitespace-no-wrap">ID</th>
                    <th class="whitespace-no-wrap">NOM</th>
                    <th class="whitespace-no-wrap">TÉLÉPHONE</th>
                    <th class="whitespace-no-wrap">ADRESSE</th>
                    <th class="text-center whitespace-no-wrap">ACTIONS</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($garages as $garage )
                <tr class="intro-x">
                    <td>{{ $garage->id }}</td>
                    <td>{{ $garage->nom }}</td>
                    <td>{{ $garage->telephone }}</td>
                    <td>{{ $garage->adresse }}</td>
                    <td class="table-report__action w-56">
                        <div class="flex justify-center items-center">
                            <a class="flex items-center mr-3" style="color: #03660c;" href="{{ url('edit-garage/'.$garage->id) }}"> <i data-feather="check-square"
                                    class="w-4 h-4 mr-1"></i> <span style="color: #03660c;">Modifier</span>  </a>
                            <a class="flex items-center text-theme-6" href="{{ url('delete-garage/'.$garage->id) }}" data-toggle="modal"
                                data-target="#delete-confirmation-modal"> <i data-feather="trash-2"
                                    class="w-4 h-4 mr-1"></i> Supprimer </a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- END: Data List -->
    <!-- BEGIN: Pagination -->
    <!-- <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-no-wrap items-center">
        <ul class="pagination">
            <li>
                <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevrons-left"></i> </a>
            </li>
            <li>
                <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevron-left"></i> </a>
            </li>
            <li> <a class="pagination__link" href="">...</a> </li>
            <li> <a class="pagination__link" href="">1</a> </li>
            <li> <a class="pagination__link pagination__link--active" href="">2</a> </li>
            <li> <a class="pagination__link" href="">3</a> </li>
            <li> <a class="pagination__link" href="">...</a> </li>
            <li>
                <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevron-right"></i> </a>
            </li>
            <li>
                <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevrons-right"></i> </a>
            </li>
        </ul>
        <select class="w-20 input box mt-3 sm:mt-0">
            <option>10</option>
            <option>25</option>
            <option>35</option>
            <option>50</option>
        </select>
    </div> -->
    <!-- END: Pagination -->
    </div>

    @endsection