<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yvent</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.7/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="min-h-screen bg-gray-100">
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <div class="flex justify-between items-center">
                <h1 class="text-2xl font-semibold text-gray-900">Yvent</h1>
                
                <nav class="space-x-4">
                    @if (Auth::check())
                        <a href="#" class="text-black"></a>
                        <a href="{{route('logout')}}" class="text-black">Logout</a>
                    @else
                        <a href="{{ route('login') }}" class="text-black">Login</a>
                        <a href="{{ route('register') }}" class="text-black">Register</a>
                    @endif
                </nav>
            </div>
        </div>
    </header>

    <!-- Content Section Goes Here -->

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    <script>
        if (window.innerWidth <= 768) {
            const flowBiteScript = document.createElement('script');
            flowBiteScript.src = 'https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js';
            document.body.appendChild(flowBiteScript);
        }
    </script>
</body>

</html>