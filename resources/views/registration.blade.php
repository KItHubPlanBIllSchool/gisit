<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form with Picture</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.7/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="min-h-screen flex">
    <!--лево-->
    <div class="w-1/2 bg-gray-200 px-8 py-6 flex flex-col items-start justify-between">
        <div>
            <h1 class="text-2xl font-semibold mt-0">Добро пожаловать!</h1>
        </div>
        <img src="img/logo.svg" class="mx-auto w-4/12">
        <div>
            <p class="text-xl mb-0">Уже есть аккаунт?<a href="login"><span class="font-semibold"> Войдите!</span></p></a>
        </div>
    </div>

    <!--право -->
    <div class="w-1/2 px-8 py-6 flex items-center justify-center">
        <div class="w-4/5 bg-white p-8 rounded-lg">
            <h2 class="text-xl font-bold mb-4">Регистрация</h2>
            <form action="{{ route('registration.post') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Никнейм</label>
                    <input type="text" id="name" name="name" class="w-full border border-gray-400 rounded-lg px-3 py-2 my-2">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Почта</label>
                    <input type="email" id="email" name="email" class="w-full border border-gray-400 rounded-lg px-3 py-2 my-2">
                </div>
                <div class="mb-6">
                    <label for="password" class="block text-sm font-medium text-gray-700">Пароль</label>
                    <input type="password" id="password" name="password" class="w-full border border-gray-400 rounded-lg px-3 py-2 my-2">
                </div>
                <button type="submit" class="bg-green-500 text-white font-semibold py-2 px-6 rounded-lg w-full">Зарегистрироваться</button>
            </form>
            <p class="text-base font-medium mt-6 text-gray-600">Или войдите с помощью:</p>
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
</body>

</html>
