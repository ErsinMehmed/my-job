@extends('main') @section('content')
<div class="w-full p-6 bg-white rounded-lg shadow md:mt-0 sm:max-w-md sm:p-8 mx-auto">
    <h2 class="mb-1 text-xl font-bold leading-tight tracking-tight text-slate-800 md:text-2xl ">
        Change Password
    </h2>
    <form class="mt-4 space-y-4 lg:mt-5 md:space-y-5" action="#">
        <div>
            <x-label for="email" text="Your email" />
            <x-input type="text" name="email" id="email" placeholder="example@gmail.com" />
        </div>
        <div>
            <x-label for="password" text="New Password" />
            <x-input type="password" name="password" id="password" placeholder="••••••••" />
        </div>
        <div>
            <x-label for="confirm-password" text="Confirm password" />
            <x-input type="password" name="confirm-password" id="confirm-password" placeholder="••••••••" />
        </div>
        <div class="flex items-start">
            <div class="flex items-center h-5">
                <input id="newsletter" aria-describedby="newsletter" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300">
            </div>
            <div class="ml-3 text-sm">
                <label for="newsletter" class="font-light text-gray-500">I accept the <a class="font-medium text-blue-600 hover:underline" href="#">Terms and Conditions</a></label>
            </div>
        </div>
        <x-primaryButton text="Reset password" />
    </form>
</div>
@endsection('content')