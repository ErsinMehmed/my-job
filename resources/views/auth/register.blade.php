@extends('main') @section('content')
<div class="w-full bg-white rounded-lg shadow md:mt-0 sm:max-w-md mx-auto md:mb-6">
    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
        <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">
            Създайте профил
        </h1>
        <form class="space-y-4 md:space-y-6" action="{{ route('user.registration') }}" method="POST">
            @csrf
            <div>
                <x-label for="name" text="Вашите имена" />
                <x-input type="text" name="name" id="name" placeholder="Име и фамилия" />
                @if($errors->has('name'))
                <span class="text-red-500">
                    {{ $errors->first('name') }}
                </span>
                @endif
            </div>
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
            <div>
                <x-label for="confirm-password" text="Потвърди парола" />
                <x-input type="password" name="confirm-password" id="confirm-password" placeholder="••••••••" />
                @if($errors->has('confirm-password'))
                <span class="text-red-500">
                    {{ $errors->first('confirm-password') }}
                </span>
                @endif
            </div>
            <div>
                <x-label for="role" text="Изберете профил" />
                <select id="role" name="role" class="bg-gray-50 border py-2.5 border-gray-300 text-slate-800 text-sm rounded-lg w-full focus:border-gray-400 focus:ring-0 focus:outline-none cursor-pointer">
                    @foreach ($roles as $role)
                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex items-start">
                <div class="flex items-center h-5">
                    <input id="terms" aria-describedby="terms" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300">
                </div>
                <div class="ml-3 text-sm">
                    <label for="terms" class="font-light text-gray-500">Съгласен съм <a class="font-medium text-blue-600 hover:underline" href="#">правилата и условията</a></label>
                </div>
            </div>

            <x-primaryButton text="Регистрация" />
            <p class="text-sm font-light text-gray-500">
                Вече имате акуант? <a href="{{ route('login') }}" class="font-medium text-blue-600 hover:underline">Вход</a>
            </p>
        </form>
    </div>
</div>
@endsection('content')