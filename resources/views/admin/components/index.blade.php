@extends('admin.layouts.app')

@section('content')

<div class="intro-y box px-5 pt-5 mt-5"> <div
    class="flex flex-col lg:flex-row border-b border-gray-200 dark:border-dark-5 pb-5 -mx-5">
    <div class="flex flex-1 px-5 items-center justify-center lg:justify-start">
        <div class="w-20 h-20 sm:w-24 sm:h-24 flex-none lg:w-32 lg:h-32 image-fit relative">
            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="admin/dist/images/profile-10.jpg">
        </div>
        <div class="ml-5">
            <div class="w-24 sm:w-40 truncate sm:whitespace-normal font-medium text-lg">Denzel Washington</div>
            <div class="text-gray-600">DevOps Engineer</div>
        </div>
    </div>
    <div
        class="flex mt-6 lg:mt-0 items-center lg:items-start flex-1 flex-col justify-center text-gray-600 dark:text-gray-300 px-5 border-l border-r border-gray-200 dark:border-dark-5 border-t lg:border-t-0 pt-5 lg:pt-0">
        <div class="truncate sm:whitespace-normal flex items-center"> <i data-feather="mail" class="w-4 h-4 mr-2"></i>
            denzelwashington@left4code.com </div>
        <div class="truncate sm:whitespace-normal flex items-center mt-3"> <i data-feather="instagram"
                class="w-4 h-4 mr-2"></i> Instagram Denzel Washington </div>
        <div class="truncate sm:whitespace-normal flex items-center mt-3"> <i data-feather="twitter"
                class="w-4 h-4 mr-2"></i> Twitter Denzel Washington </div>
    </div>
    <div
        class="mt-6 lg:mt-0 flex-1 flex items-center justify-center px-5 border-t lg:border-0 border-gray-200 dark:border-dark-5 pt-5 lg:pt-0">
        <div class="text-center rounded-md w-20 py-3">
            <div class="font-semibold text-theme-1 dark:text-theme-10 text-lg">201</div>
            <div class="text-gray-600">Orders</div>
        </div>
        <div class="text-center rounded-md w-20 py-3">
            <div class="font-semibold text-theme-1 dark:text-theme-10 text-lg">1k</div>
            <div class="text-gray-600">Purchases</div>
        </div>
        <div class="text-center rounded-md w-20 py-3">
            <div class="font-semibold text-theme-1 dark:text-theme-10 text-lg">492</div>
            <div class="text-gray-600">Reviews</div>
        </div>
    </div>
</div>
<div class="nav-tabs flex flex-col sm:flex-row justify-center lg:justify-start">
    <a data-toggle="tab" data-target="#profile" href="javascript:;" class="py-4 sm:mr-8 flex items-center active"> <i
            class="w-4 h-4 mr-2" data-feather="user"></i> Profile </a>
    <a data-toggle="tab" data-target="#account" href="javascript:;" class="py-4 sm:mr-8 flex items-center"> <i
            class="w-4 h-4 mr-2" data-feather="shield"></i> Account </a>
    <a data-toggle="tab" data-target="#change-password" href="javascript:;" class="py-4 sm:mr-8 flex items-center"> <i
            class="w-4 h-4 mr-2" data-feather="lock"></i> Change Password </a>
    <a data-toggle="tab" data-target="#settings" href="javascript:;" class="py-4 sm:mr-8 flex items-center"> <i
            class="w-4 h-4 mr-2" data-feather="settings"></i> Settings </a>
</div>
</div>

<div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        FAQ Layout
    </h2>
</div>
<div class="grid grid-cols-12 gap-6 mt-5">
    <!-- BEGIN: FAQ Menu -->
    <a href="" class="intro-y col-span-12 lg:col-span-4 box py-10 border-2 border-theme-1 dark:border-theme-1">
        <i data-feather="shield" class="w-12 h-12 text-theme-1 dark:text-theme-10 mx-auto"></i>
        <div class="font-medium text-center text-base mt-3">Single Application</div>
        <div class="text-gray-600 mt-2 w-3/4 text-center mx-auto">Lorem Ipsum is simply dummy text of the printing</div>
    </a>
    <a href="" class="intro-y col-span-12 lg:col-span-4 box py-10">
        <i data-feather="send" class="w-12 h-12 text-theme-1 dark:text-theme-10 mx-auto"></i>
        <div class="font-medium text-center text-base mt-3">Multi Application</div>
        <div class="text-gray-600 mt-2 w-3/4 text-center mx-auto">Lorem Ipsum is simply dummy text of the printing</div>
    </a>
    <a href="" class="intro-y col-span-12 lg:col-span-4 box py-10">
        <i data-feather="trending-up" class="w-12 h-12 text-theme-1 dark:text-theme-10 mx-auto"></i>
        <div class="font-medium text-center text-base mt-3">Custom License</div>
        <div class="text-gray-600 mt-2 w-3/4 text-center mx-auto">Lorem Ipsum is simply dummy text of the printing</div>
    </a>
    <a href="" class="intro-y col-span-12 lg:col-span-4 box py-10">
        <i data-feather="send" class="w-12 h-12 text-theme-1 dark:text-theme-10 mx-auto"></i>
        <div class="font-medium text-center text-base mt-3">Multi Application</div>
        <div class="text-gray-600 mt-2 w-3/4 text-center mx-auto">Lorem Ipsum is simply dummy text of the printing</div>
    </a>
    <a href="" class="intro-y col-span-12 lg:col-span-4 box py-10">
        <i data-feather="trending-up" class="w-12 h-12 text-theme-1 dark:text-theme-10 mx-auto"></i>
        <div class="font-medium text-center text-base mt-3">Custom License</div>
        <div class="text-gray-600 mt-2 w-3/4 text-center mx-auto">Lorem Ipsum is simply dummy text of the printing</div>
    </a>
    <!-- END: FAQ Menu -->

</div>

@endsection