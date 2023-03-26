@extends('main') @section('content')
<div class="w-full bg-white rounded-lg shadow md:mt-0 sm:max-w-md mx-auto">
    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
        <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">
            Вашият профил
        </h1>
        @if($message = Session::get('danger'))
        <div class="p-4 text-sm text-red-700 font-semibold rounded-lg bg-red-50">
            {{ $message }}
        </div>
        @endif
        @if($message = Session::get('success'))
        <div class="p-4 text-sm text-green-700 font-semibold rounded-lg bg-green-50">
            {{ $message }}
        </div>
        @endif
        <form class="space-y-4 md:space-y-6" action="{{ route('user.login') }}" method="POST">
            @csrf
            <div>
                <x-label for="email" text="Вашият имейл" />
                <x-input type="text" name="email" id="email" placeholder="example@gmail.com" />
                @if($errors->has('email'))
                <span class="text-red-500">
                    {{ $errors->first('email') }}
                </span>
                @endif
            </div>
            <div>
                <x-label for="password" text="Парола" />
                <x-input type="password" name="password" id="password" placeholder="••••••••" />
                @if($errors->has('password'))
                <span class="text-red-500">
                    {{ $errors->first('password') }}
                </span>
                @endif
            </div>
            <div class="flex items-center justify-between">
                <div class="flex items-start">
                    <div class="flex items-center h-5">
                        <input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300">
                    </div>
                    <div class="ml-3 text-sm">
                        <label for="remember" class="text-gray-500">Запомни ме</label>
                    </div>
                </div>
                <a href="{{ route('forgotPassword') }}" class="text-sm font-medium text-blue-600 hover:underline">Забравена парола?</a>
            </div>
            <x-primaryButton text="Вход" />
            <p class="text-sm font-light text-gray-500">
                Нямате все още акаунт? <a href="{{ route('register') }}" class="font-medium text-blue-600 hover:underline">Регистрация</a>
            </p>
        </form>
    </div>
</div>
@endsection('content')