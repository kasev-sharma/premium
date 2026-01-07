@extends('layouts.app')

@section('title', 'Classic Single Room - Premium PG')

@section('content')

    <!-- Breadcrumb -->
    <div class="bg-white border-b border-gray-100 py-4">
        <div class="container mx-auto px-4 md:px-6 text-sm text-gray-500">
            <a href="{{ route('home') }}" class="hover:text-primary">Home</a> <span class="mx-2">/</span>
            <a href="{{ route('rooms') }}" class="hover:text-primary">Rooms</a> <span class="mx-2">/</span>
            <span class="text-gray-800 font-semibold">Classic Single Room</span>
        </div>
    </div>

    <!-- Main Content -->
    <section class="py-8 md:py-12" x-data="{ activeImage: 'https://images.unsplash.com/photo-1522771753033-6a586857f291?auto=format&fit=crop&q=80&w=1200' }">
        <div class="container mx-auto px-4 md:px-6">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
                
                <!-- LEFT COLUMN: Gallery & Details -->
                <div class="lg:col-span-2">
                    
                    <!-- 1. Image Gallery -->
                    <div class="mb-8">
                        <!-- Main Image -->
                        <div class="rounded-2xl overflow-hidden h-[400px] md:h-[500px] shadow-sm mb-4">
                            <img :src="activeImage" alt="Room Main" class="w-full h-full object-cover transition-opacity duration-300">
                        </div>
                        
                        <!-- Thumbnails -->
                        <div class="grid grid-cols-4 gap-4">
                            <button @click="activeImage = 'https://images.unsplash.com/photo-1522771753033-6a586857f291?auto=format&fit=crop&q=80&w=1200'" 
                                    class="h-24 rounded-lg overflow-hidden border-2 border-transparent focus:border-primary transition-all">
                                <img src="https://images.unsplash.com/photo-1522771753033-6a586857f291?auto=format&fit=crop&q=80&w=300" class="w-full h-full object-cover">
                            </button>
                            <button @click="activeImage = 'https://images.unsplash.com/photo-1595526114035-0d45ed16cfbf?auto=format&fit=crop&q=80&w=1200'" 
                                    class="h-24 rounded-lg overflow-hidden border-2 border-transparent focus:border-primary transition-all">
                                <img src="https://images.unsplash.com/photo-1595526114035-0d45ed16cfbf?auto=format&fit=crop&q=80&w=300" class="w-full h-full object-cover">
                            </button>
                            <button @click="activeImage = 'https://images.unsplash.com/photo-1505693416388-b0346ef4143d?auto=format&fit=crop&q=80&w=1200'" 
                                    class="h-24 rounded-lg overflow-hidden border-2 border-transparent focus:border-primary transition-all">
                                <img src="https://images.unsplash.com/photo-1505693416388-b0346ef4143d?auto=format&fit=crop&q=80&w=300" class="w-full h-full object-cover">
                            </button>
                            <button @click="activeImage = 'https://images.unsplash.com/photo-1560185007-cde436f6a4d0?auto=format&fit=crop&q=80&w=1200'" 
                                    class="h-24 rounded-lg overflow-hidden border-2 border-transparent focus:border-primary transition-all">
                                <img src="https://images.unsplash.com/photo-1560185007-cde436f6a4d0?auto=format&fit=crop&q=80&w=300" class="w-full h-full object-cover">
                            </button>
                        </div>
                    </div>

                    <!-- 2. Room Info -->
                    <div class="mb-8">
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wide">Available</span>
                            <span class="bg-primary/10 text-primary px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wide">For Professionals</span>
                            <span class="bg-gray-100 text-gray-600 px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wide">Single Occupancy</span>
                        </div>
                        
                        <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-2">Classic Single Room</h1>
                        <p class="text-gray-500 flex items-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            Sector 22, Gurgaon (Near Cyber City)
                        </p>
                    </div>

                    <hr class="border-gray-100 mb-8">

                    <!-- 3. Amenities -->
                    <div class="mb-10">
                        <h3 class="text-xl font-bold text-gray-800 mb-6">Amenities Included</h3>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                            <div class="flex items-center gap-3 p-3 bg-gray-50 rounded-lg border border-gray-100">
                                <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                                <span class="text-sm font-medium text-gray-700">AC</span>
                            </div>
                            <div class="flex items-center gap-3 p-3 bg-gray-50 rounded-lg border border-gray-100">
                                <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0"></path></svg>
                                <span class="text-sm font-medium text-gray-700">High-Speed Wifi</span>
                            </div>
                            <div class="flex items-center gap-3 p-3 bg-gray-50 rounded-lg border border-gray-100">
                                <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path></svg>
                                <span class="text-sm font-medium text-gray-700">4 Meals/Day</span>
                            </div>
                            <div class="flex items-center gap-3 p-3 bg-gray-50 rounded-lg border border-gray-100">
                                <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                                <span class="text-sm font-medium text-gray-700">Laundry</span>
                            </div>
                            <div class="flex items-center gap-3 p-3 bg-gray-50 rounded-lg border border-gray-100">
                                <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                                <span class="text-sm font-medium text-gray-700">Housekeeping</span>
                            </div>
                            <div class="flex items-center gap-3 p-3 bg-gray-50 rounded-lg border border-gray-100">
                                <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                                <span class="text-sm font-medium text-gray-700">Biometric Security</span>
                            </div>
                        </div>
                    </div>

                    <!-- 4. Description -->
                    <div class="mb-12">
                        <h3 class="text-xl font-bold text-gray-800 mb-4">About this Room</h3>
                        <p class="text-gray-600 leading-relaxed mb-4">
                            Designed for professionals who value privacy and comfort. This spacious single room comes fully furnished with a premium bed, study table, and ergonomic chair. The room features a large window for natural light and ventilation.
                        </p>
                        <p class="text-gray-600 leading-relaxed">
                            Located on the 2nd floor, you have easy access to the common lounge and dining area. The attached washroom is equipped with a geyser and modern fittings.
                        </p>
                    </div>

                </div>

                <!-- RIGHT COLUMN: Sticky Booking Card -->
                <div class="lg:col-span-1">
                    <div class="bg-white p-6 rounded-2xl shadow-lg border border-gray-100 sticky top-28">
                        <div class="flex justify-between items-center mb-6">
                            <div>
                                <span class="text-sm text-gray-500 block">Monthly Rent</span>
                                <span class="text-3xl font-bold text-primary">₹14,000</span>
                            </div>
                            <div class="text-right">
                                <span class="text-xs text-gray-400 block">Deposit</span>
                                <span class="text-sm font-semibold text-gray-600">1 Month</span>
                            </div>
                        </div>

                        <div class="space-y-3 mb-6">
                            <button @click="bookingModalOpen = true" class="w-full bg-accent hover:bg-yellow-600 text-white font-bold py-3.5 rounded-lg shadow-md transition-all transform hover:-translate-y-0.5">
                                Book a Site Visit
                            </button>
                            <a href="tel:+919876543210" class="w-full flex items-center justify-center gap-2 bg-white border-2 border-primary text-primary hover:bg-primary hover:text-white font-bold py-3 rounded-lg transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                                Call Owner
                            </a>
                        </div>

                        <div class="text-xs text-gray-400 text-center border-t border-gray-100 pt-4">
                            * Electricity charges excluded. <br> 1-month notice period required.
                        </div>
                    </div>
                </div>

            </div>
            
            <!-- Similar Rooms Section -->
            <div class="mt-16 pt-12 border-t border-gray-200">
                <h2 class="text-2xl font-bold text-gray-800 mb-8">Similar Rooms You May Like</h2>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Similar Room 1 -->
                    <div class="bg-white rounded-xl shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-100 overflow-hidden group">
                        <div class="relative h-48 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1616486338812-3dadae4b4f9d?auto=format&fit=crop&q=80&w=600" alt="Room" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                        </div>
                        <div class="p-4">
                            <h3 class="text-lg font-bold text-gray-800 mb-1">Premium Studio</h3>
                            <div class="flex justify-between items-center mt-2">
                                <span class="text-lg font-bold text-accent">₹18,000</span>
                                <a href="{{ route('room.details', 'studio') }}" class="text-sm text-primary font-semibold hover:underline">View</a>
                            </div>
                        </div>
                    </div>

                    <!-- Similar Room 2 -->
                    <div class="bg-white rounded-xl shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-100 overflow-hidden group">
                        <div class="relative h-48 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1595526114035-0d45ed16cfbf?auto=format&fit=crop&q=80&w=600" alt="Room" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                        </div>
                        <div class="p-4">
                            <h3 class="text-lg font-bold text-gray-800 mb-1">Comfort Double</h3>
                            <div class="flex justify-between items-center mt-2">
                                <span class="text-lg font-bold text-accent">₹9,500</span>
                                <a href="{{ route('room.details', 'comfort') }}" class="text-sm text-primary font-semibold hover:underline">View</a>
                            </div>
                        </div>
                    </div>

                    <!-- Similar Room 3 -->
                    <div class="bg-white rounded-xl shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-100 overflow-hidden group">
                        <div class="relative h-48 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1505693416388-b0346ef4143d?auto=format&fit=crop&q=80&w=600" alt="Room" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                        </div>
                        <div class="p-4">
                            <h3 class="text-lg font-bold text-gray-800 mb-1">Budget Triple</h3>
                            <div class="flex justify-between items-center mt-2">
                                <span class="text-lg font-bold text-accent">₹7,000</span>
                                <a href="{{ route('room.details', 'budget') }}" class="text-sm text-primary font-semibold hover:underline">View</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection