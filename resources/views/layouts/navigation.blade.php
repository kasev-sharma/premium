<header 
    x-data="{ mobileMenuOpen: false, scrolled: false }" 
    @scroll.window="scrolled = (window.pageYOffset > 20)"
    :class="{ 'shadow-md bg-white/95 backdrop-blur-sm py-2': scrolled, 'bg-white py-4': !scrolled }"
    class="fixed top-0 w-full z-50 transition-all duration-300 border-b border-gray-100">
    
    <div class="container mx-auto px-4 md:px-6">
        <div class="flex items-center justify-between">
            
            <!-- 1. Logo -->
            <a href="{{ route('home') }}" class="flex items-center gap-2 group">
                <!-- Icon -->
                <div class="w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-white transition-colors duration-300">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                </div>
                <!-- Text -->
                <div class="flex flex-col">
                    <span class="text-xl font-bold text-gray-800 leading-none tracking-tight">Premium<span class="text-primary">PG</span></span>
                    <span class="text-[10px] text-gray-500 uppercase tracking-widest font-medium">Gurgaon Sector 22</span>
                </div>
            </a>

            <!-- 2. Desktop Menu -->
            <nav class="hidden md:flex items-center gap-8">
                <a href="{{ route('home') }}" class="text-sm font-semibold text-gray-600 hover:text-primary transition-colors {{ request()->routeIs('home') ? 'text-primary' : '' }}">Home</a>
                <a href="{{ route('rooms') }}" class="text-sm font-semibold text-gray-600 hover:text-primary transition-colors {{ request()->routeIs('rooms') ? 'text-primary' : '' }}">Rooms</a>
                <a href="{{ route('amenities') }}" class="text-sm font-semibold text-gray-600 hover:text-primary transition-colors {{ request()->routeIs('amenities') ? 'text-primary' : '' }}">Amenities</a>
                <a href="{{ route('gallery') }}" class="text-sm font-semibold text-gray-600 hover:text-primary transition-colors {{ request()->routeIs('gallery') ? 'text-primary' : '' }}">Gallery</a>
                <a href="{{ route('contact') }}" class="text-sm font-semibold text-gray-600 hover:text-primary transition-colors {{ request()->routeIs('contact') ? 'text-primary' : '' }}">Contact</a>
            </nav>

            <!-- 3. CTA Button (Desktop) -->
            <div class="hidden md:block">
                <button @click="bookingModalOpen = true" 
                        class="bg-accent hover:bg-yellow-600 text-white text-sm font-bold py-2.5 px-6 rounded-full shadow-lg shadow-accent/20 transition-all transform hover:-translate-y-0.5">
                    Book a Visit
                </button>
            </div>

            <!-- 4. Mobile Menu Button -->
            <button @click="mobileMenuOpen = !mobileMenuOpen" class="md:hidden text-gray-700 focus:outline-none">
                <svg x-show="!mobileMenuOpen" class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                <svg x-show="mobileMenuOpen" x-cloak class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
        </div>
    </div>

    <!-- 5. Mobile Menu Dropdown -->
    <div x-show="mobileMenuOpen" 
         x-transition.origin.top
         x-cloak
         class="md:hidden absolute top-full left-0 w-full bg-white border-t border-gray-100 shadow-xl">
        <div class="flex flex-col p-4 space-y-4">
            <a href="{{ route('home') }}" class="block text-base font-semibold text-gray-700 hover:text-primary">Home</a>
            <a href="{{ route('rooms') }}" class="block text-base font-semibold text-gray-700 hover:text-primary">Rooms</a>
            <a href="{{ route('amenities') }}" class="block text-base font-semibold text-gray-700 hover:text-primary">Amenities</a>
            <a href="{{ route('gallery') }}" class="block text-base font-semibold text-gray-700 hover:text-primary">Gallery</a>
            <a href="{{ route('contact') }}" class="block text-base font-semibold text-gray-700 hover:text-primary">Contact</a>
            
            <button @click="bookingModalOpen = true; mobileMenuOpen = false" class="w-full bg-accent text-white py-3 rounded-lg font-bold shadow-md">
                Book a Visit
            </button>
        </div>
    </div>
</header>

<!-- Spacer to prevent content from hiding behind fixed header -->
<div class="h-20"></div>