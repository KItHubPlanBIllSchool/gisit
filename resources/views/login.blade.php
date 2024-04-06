<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @livewireStyles
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.7/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="min-h-screen flex">
    <div class="w-1/2 bg-gray-200 px-8 py-6 flex flex-col items-start justify-between">
        <div>
            <h1 class="text-2xl font-semibold mt-0">Добро пожаловать!</h1>
        </div>
        <img src="img/logo.svg" class="mx-auto w-4/12">
        <div>
            <p class="text-xl mb-0">Не зарегистрированы? <a href="{{route('register')}}"><span class="font-semibold">Зарегистрируйтесь!</span></p></a>
        </div>
    </div>

    <div class="w-1/2 px-8 py-6 flex items-center justify-center">
        <div class="w-4/5 bg-white p-6 rounded-lg">
            <form action="{{route('login.post')}}" method="POST" class="w-full">
            @csrf
                <p class="text-2xl font-bold mb-6">Войдите</p>

                <div class="mb-6">
                    <label for="email" class="block text-base font-semibold leading-7">Введите свой ник</label>
                    <input type="" id="name" name="name" class="w-full border border-gray-400 rounded-lg px-3 py-2 my-2">
                </div>

                <div class="mb-6">
                    <label for="password" class="block text-base font-semibold leading-7">Введите ваш пароль</label>
                    <input type="password" id="password" name="password" class="w-full border border-gray-400 rounded-lg px-3 py-2 my-2">
                </div>

                <div class="flex items-center mb-6">
                    <input type="checkbox" id="remember" name="remember" class="mr-2 border-1 border-gray-600 rounded-md w-5 h-5">
                    <label for="remember" class="text-sm font-medium leading-7 text-gray-600">Оставаться в системе</label>
                </div>

                <div class="flex items-center justify-between mt-6">
                    <button type="submit" class="bg-green-500 text-white font-semibold py-2 px-6 rounded-lg w-full">Войти</button>
                    
                </div>
                <p class="text-right">Забыли пароль?</p>

                <p class="text-base font-medium mt-6 text-gray-600">Или войдите с помощью:</p>
               
            </form>
            <div class="mt-5">
                <a href="{{ route('google-auth') }}" class="block">
                    <button class="px-4 py-2 border flex gap-2 border-slate-200 dark:border-slate-700 rounded-lg text-slate-700 dark:text-slate-200 hover:border-slate-400 dark:hover:border-slate-500 hover:text-slate-900 dark:hover:text-slate-300 hover:shadow transition duration-150">
                        <img class="w-6 h-6" src="https://www.svgrepo.com/show/475656/google-color.svg" loading="lazy" alt="google logo">
                        <span>Google</span>
                    </button>
                </a>
            </div>
        </div>
    </div>
    
    @livewireScripts
</body>
</html>
