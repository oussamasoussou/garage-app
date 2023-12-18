@extends('admin.layouts.app')

@section('content')
<div class="grid grid-cols-12 gap-6">
                    <!-- BEGIN: Profile Menu -->
                    <div class="col-span-12 lg:col-span-4 xxl:col-span-3 flex lg:block flex-col-reverse">
                        <div class="intro-y box mt-5">
                          
                            <div class="p-5 border-t border-gray-200 dark:border-dark-5">
                                <a class="flex items-center text-theme-1 dark:text-theme-10 font-medium" href="{{ url('categories') }}"> <i data-feather="list" class="w-4 h-4 mr-2"></i> Liste des catégories </a>
                                <a class="flex items-center mt-5" href="{{ url('create-categorie') }}"> <i data-feather="plus-square" class="w-4 h-4 mr-2"></i> Ajouter une catégorie </a>
                            </div>
                            <div class="p-5 border-t border-gray-200 dark:border-dark-5">
                                <a class="flex items-center" href="{{ url('sousCategories') }}"> <i data-feather="list" class="w-4 h-4 mr-2"></i> Liste des sous-catégories </a>
                                <a class="flex items-center mt-5" href="{{ url('create-sousCategorie') }}"> <i data-feather="plus-square" class="w-4 h-4 mr-2"></i> Ajouter une sous-catégorie </a>
                            </div>
                            <div class="p-5 border-t border-gray-200 dark:border-dark-5">
                                <a class="flex items-center" href="{{ url('sousCategories') }}"> <i data-feather="list" class="w-4 h-4 mr-2"></i> Liste des produits </a>
                                <a class="flex items-center mt-5" href="{{ url('create-sousCategorie') }}"> <i data-feather="plus-square" class="w-4 h-4 mr-2"></i> Ajouter un produit </a>
                            </div>
                        </div>
                    </div>
                    <!-- END: Profile Menu -->
                    <div class="col-span-12 lg:col-span-8 xxl:col-span-9">
                    <div class="intro-y box mt-5">
                            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                                <h2 class="font-medium text-base mr-auto">
                                    Liste des catégories
                                </h2>
                            </div>
                            <div class="p-5" id="striped-rows-table">
                                <div class="preview">
                                    <div class="overflow-x-auto">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">#</th>
                                                    <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Nom</th>
                                                    <th class=" text-center border-b-2 dark:border-dark-5 whitespace-no-wrap">ACTIONS</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="bg-gray-200 dark:bg-dark-1">
                                                    <td class="border-b dark:border-dark-5">1</td>
                                                    <td class="border-b dark:border-dark-5">Angelina</td>
                                                    <td class="table-report__action w-56">
                                                        <div class="flex justify-center items-center">
                                                            <a class="flex items-center mr-3" style="color: #03660c;" href="#"> <i data-feather="check-square"
                                                                    class="w-4 h-4 mr-1"></i> <span style="color: #03660c;">Modifier</span>  </a>
                                                            <a class="flex items-center text-theme-6" href="#" data-toggle="modal"
                                                                data-target="#delete-confirmation-modal"> <i data-feather="trash-2"
                                                                    class="w-4 h-4 mr-1"></i> Supprimer </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="source-code hidden">
                                    <button data-target="#copy-striped-rows-table" class="copy-code button button--sm border flex items-center text-gray-700 dark:border-dark-5 dark:text-gray-300"> <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code </button>
                                    <div class="overflow-y-auto h-64 mt-3">
                                        <pre class="source-preview" id="copy-striped-rows-table"> <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10"> HTMLOpenTagdiv class=&quot;overflow-x-auto&quot;HTMLCloseTag HTMLOpenTagtable class=&quot;table&quot;HTMLCloseTag HTMLOpenTagtheadHTMLCloseTag HTMLOpenTagtrHTMLCloseTag HTMLOpenTagth class=&quot;border-b-2 dark:border-dark-5 whitespace-no-wrap&quot;HTMLCloseTag#HTMLOpenTag/thHTMLCloseTag HTMLOpenTagth class=&quot;border-b-2 dark:border-dark-5 whitespace-no-wrap&quot;HTMLCloseTagFirst NameHTMLOpenTag/thHTMLCloseTag HTMLOpenTagth class=&quot;border-b-2 dark:border-dark-5 whitespace-no-wrap&quot;HTMLCloseTagLast NameHTMLOpenTag/thHTMLCloseTag HTMLOpenTagth class=&quot;border-b-2 dark:border-dark-5 whitespace-no-wrap&quot;HTMLCloseTagUsernameHTMLOpenTag/thHTMLCloseTag HTMLOpenTag/trHTMLCloseTag HTMLOpenTag/theadHTMLCloseTag HTMLOpenTagtbodyHTMLCloseTag HTMLOpenTagtr class=&quot;bg-gray-200 dark:bg-dark-1&quot;HTMLCloseTag HTMLOpenTagtd class=&quot;border-b dark:border-dark-5&quot;HTMLCloseTag1HTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtd class=&quot;border-b dark:border-dark-5&quot;HTMLCloseTagAngelinaHTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtd class=&quot;border-b dark:border-dark-5&quot;HTMLCloseTagJolieHTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtd class=&quot;border-b dark:border-dark-5&quot;HTMLCloseTag@angelinajolieHTMLOpenTag/tdHTMLCloseTag HTMLOpenTag/trHTMLCloseTag HTMLOpenTagtrHTMLCloseTag HTMLOpenTagtd class=&quot;border-b dark:border-dark-5&quot;HTMLCloseTag2HTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtd class=&quot;border-b dark:border-dark-5&quot;HTMLCloseTagBradHTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtd class=&quot;border-b dark:border-dark-5&quot;HTMLCloseTagPittHTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtd class=&quot;border-b dark:border-dark-5&quot;HTMLCloseTag@bradpittHTMLOpenTag/tdHTMLCloseTag HTMLOpenTag/trHTMLCloseTag HTMLOpenTagtr class=&quot;bg-gray-200 dark:bg-dark-1&quot;HTMLCloseTag HTMLOpenTagtd class=&quot;border-b dark:border-dark-5&quot;HTMLCloseTag3HTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtd class=&quot;border-b dark:border-dark-5&quot;HTMLCloseTagCharlieHTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtd class=&quot;border-b dark:border-dark-5&quot;HTMLCloseTagHunnamHTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtd class=&quot;border-b dark:border-dark-5&quot;HTMLCloseTag@charliehunnamHTMLOpenTag/tdHTMLCloseTag HTMLOpenTag/trHTMLCloseTag HTMLOpenTag/tbodyHTMLCloseTag HTMLOpenTag/tableHTMLCloseTag HTMLOpenTag/divHTMLCloseTag </code> </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection