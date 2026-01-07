<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Premium PG in Gurgaon')</title>
    
    <!-- Scripts & Styles -->
   @vite(['resources/css/app.css', 'resources/js/app.js']) 
    

    <!-- Alpine.js for Interactivity -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="font-sans text-gray-800 bg-gray-50" x-data="{ bookingModalOpen: false }">

    <!-- Navigation -->
    @include('layouts.navigation')

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    @include('layouts.footer')

    <!-- Booking Modal (Global) -->
    @include('components.booking-modal')

</body>
</html>