<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="flex items-center justify-center h-screen">
        <div class="w-1/3 p-4 shadow-lg border rounded-lg">
            <h1 class="text-2xl text-center mb-4">Login</h1>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <input type="email" name="email" id="email" placeholder="Enter Email" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm">
                    @error('email')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <input type="password" name="password" id="password" placeholder="Enter Password" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm">
                    @error('password')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600">Login</button>
            </form>
        </div>
    </div>
</body>
</html>
