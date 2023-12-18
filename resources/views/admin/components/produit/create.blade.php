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
                        </div>
                    </div>
                    <!-- END: Profile Menu -->
                    <div class="col-span-12 lg:col-span-8 xxl:col-span-9">
                        <!-- BEGIN: Display Information -->
                        <div class="intro-y box lg:mt-5">
                            <div class="flex items-center p-5 border-b border-gray-200 dark:border-dark-5">
                                <h2 class="font-medium text-base mr-auto">
                                    Display Information
                                </h2>
                            </div>
                            <div class="p-5">
                                <div class="grid grid-cols-12 gap-5">
                                    <div class="col-span-12 xl:col-span-4">
                                        <div class="border border-gray-200 dark:border-dark-5 rounded-md p-5">
                                            <div class="w-40 h-40 relative image-fit cursor-pointer zoom-in mx-auto">
                                                <img class="rounded-md" alt="Midone Tailwind HTML Admin Template" src="dist/images/profile-6.jpg">
                                                <div title="Remove this profile photo?" class="tooltip w-5 h-5 flex items-center justify-center absolute rounded-full text-white bg-theme-6 right-0 top-0 -mr-2 -mt-2"> <i data-feather="x" class="w-4 h-4"></i> </div>
                                            </div>
                                            <div class="w-40 mx-auto cursor-pointer relative mt-5">
                                                <button type="button" class="button w-full bg-theme-1 text-white">Change Photo</button>
                                                <input type="file" class="w-full h-full top-0 left-0 absolute opacity-0">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-12 xl:col-span-8">
                                        <div>
                                            <label>Display Name</label>
                                            <input type="text" class="input w-full border bg-gray-100 cursor-not-allowed mt-2" placeholder="Input text" value="Leonardo DiCaprio" disabled>
                                        </div>
                                        <div class="mt-3">
                                            <label>Nearest MRT Station</label>
                                            <div class="mt-2">
                                                <select data-search="true" class="tail-select w-full">
                                                    <option value="1">Admiralty</option>
                                                    <option value="2">Aljunied</option>
                                                    <option value="3">Ang Mo Kio</option>
                                                    <option value="4">Bartley</option>
                                                    <option value="5">Beauty World</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <label>Postal Code</label>
                                            <div class="mt-2">
                                                <select data-search="true" class="tail-select w-full">
                                                    <option value="1">018906 - 1 STRAITS BOULEVARD SINGA...</option>
                                                    <option value="2">018910 - 5A MARINA GARDENS DRIVE...</option>
                                                    <option value="3">018915 - 100A CENTRAL BOULEVARD...</option>
                                                    <option value="4">018925 - 21 PARK STREET MARINA...</option>
                                                    <option value="5">018926 - 23 PARK STREET MARINA...</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <label>Address</label>
                                            <textarea class="input w-full border mt-2" placeholder="Adress">10 Anson Road, International Plaza, #10-11, 079903 Singapore, Singapore</textarea>
                                        </div>
                                        <button type="button" class="button w-20 bg-theme-1 text-white mt-3">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Display Information -->
                        <!-- BEGIN: Personal Information -->
                        <div class="intro-y box lg:mt-5">
                            <div class="flex items-center p-5 border-b border-gray-200 dark:border-dark-5">
                                <h2 class="font-medium text-base mr-auto">
                                    Personal Information
                                </h2>
                            </div>
                            <div class="p-5">
                                <div class="grid grid-cols-12 gap-5">
                                    <div class="col-span-12 xl:col-span-6">
                                        <div>
                                            <label>Email</label>
                                            <input type="text" class="input w-full border bg-gray-100 cursor-not-allowed mt-2" placeholder="Input text" value="leonardodicaprio@left4code.com" disabled>
                                        </div>
                                        <div class="mt-3">
                                            <label>Name</label>
                                            <input type="text" class="input w-full border mt-2" placeholder="Input text" value="Leonardo DiCaprio" disabled>
                                        </div>
                                        <div class="mt-3">
                                            <label>ID Type</label>
                                            <select class="input w-full border mt-2">
                                                <option>IC</option>
                                                <option>FIN</option>
                                                <option>Passport</option>
                                            </select>
                                        </div>
                                        <div class="mt-3">
                                            <label>ID Number</label>
                                            <input type="text" class="input w-full border mt-2" placeholder="Input text" value="357821204950001">
                                        </div>
                                    </div>
                                    <div class="col-span-12 xl:col-span-6">
                                        <div>
                                            <label>Phone Number</label>
                                            <input type="text" class="input w-full border mt-2" placeholder="Input text" value="65570828">
                                        </div>
                                        <div class="mt-3">
                                            <label>Address</label>
                                            <input type="text" class="input w-full border mt-2" placeholder="Input text" value="10 Anson Road, International Plaza, #10-11, 079903 Singapore, Singapore">
                                        </div>
                                        <div class="mt-3">
                                            <label>Bank Name</label>
                                            <div class="mt-2">
                                                <select data-search="true" class="tail-select w-full">
                                                    <option value="1">SBI - STATE BANK OF INDIA</option>
                                                    <option value="1">CITI BANK - CITI BANK</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <label>Bank Account</label>
                                            <input type="text" class="input w-full border mt-2" placeholder="Input text" value="DBS Current 011-903573-0">
                                        </div>
                                    </div>
                                </div>
                                <div class="flex justify-end mt-4">
                                    <a href="" class="text-theme-6 flex items-center"> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete Account </a>
                                    <button type="button" class="button w-20 bg-theme-1 text-white ml-auto">Save</button>
                                </div>
                            </div>
                        </div>
                        <!-- END: Personal Information -->
                    </div>
                </div>
@endsection