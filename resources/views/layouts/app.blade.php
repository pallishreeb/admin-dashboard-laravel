<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Kroztek</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Include Tailwind CSS stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">


</head>
<body class="flex h-screen bg-gray-100">
    <!-- Sidebar -->
    @if (!request()->is('login', 'register'))
    <nav class="w-1/6 bg-gray-800 text-white p-4 fixed h-screen">
        <ul class="space-y-2 mt-2">  
            <li><a href="{{ url('/') }}" class="hover:bg-gray-700 block p-2 rounded"><i class="fa-solid fa-gauge mr-2"></i>Dashboard</a></li>
            <li><a href="{{ url('/products') }}" class="hover:bg-gray-700 block p-2 rounded"><i class="fa-solid fa-box mr-2"></i>Products</a></li>
            <li><a href="{{ url('/categories') }}" class="hover:bg-gray-700 block p-2 rounded"><i class="fa-solid fa-sitemap mr-2"></i>Categories</a></li>
            <li><a href="{{ url('/subcategories') }}" class="hover:bg-gray-700 block p-2 rounded"><i class="fas fa-list-alt mr-2"></i>Subcategories</a></li>
            <li><a href="{{ url('/users/list') }}" class="hover:bg-gray-700 block p-2 rounded"><i class="fa-solid fa-users mr-2"></i>Users</a></li>
        </ul>
        <ul class="space-y-2 mt-8">

        @auth
            <li><span href="{{ url('/profile') }}" class="hover:bg-gray-700 block p-2 rounded">Hi {{auth()->user()->name}}</span></li>
            <li>
        <form class="inline" method="POST" action="/logout">
          @csrf
          <button type="submit" class="block p-2 mt-2 w-full bg-red-500 hover:bg-red-700 rounded">
            <i class="fas fa-sign-out mr-2"></i> Logout
            </button>

        </form>
      </li>
            @else
            <a href="{{ url('/login') }}" class="block p-2 mt-2 bg-red-500 hover:bg-red-700 rounded"><i class="fas fa-sign-in mr-2"></i>Login</a>
            @endauth   
       </ul>
    </nav>
    @endif
    <!-- Main Content -->
    <div class="{{ request()->is('login', 'register') ? 'w-full' : 'w-5/6' }} p-4 ml-auto">
    <!-- <div class="w-5/6 p-4 ml-auto"> -->
        @yield('content')
    </div>
       <!-- Scripts for all page -->
       
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.14.0/Sortable.min.js"></script>
</body>
</html>
