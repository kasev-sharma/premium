@extends('layouts.app')

@section('title', 'Explore Rooms - Premium PG')

@section('content')

    <!-- Page Header -->
    <section class="bg-primary py-12 text-center text-white">
        <div class="container mx-auto px-4">
            <h1 class="text-3xl md:text-4xl font-bold mb-2">Explore Our Premium Rooms</h1>
            <p class="text-blue-100">Find the perfect space that suits your budget and lifestyle.</p>
        </div>
    </section>

    <!-- Main Content (Filters + Grid) -->
    <section class="py-12 bg-gray-50" x-data="{ price: 15000 }">
        <div class="container mx-auto px-4 md:px-6">
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
                
                <!-- LEFT SIDEBAR: FILTERS -->
                <div class="lg:col-span-1">
                    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 sticky top-24">
                        <div class="flex justify-between items-center mb-6">
                            <h3 class="text-lg font-bold text-gray-800">Filters</h3>
                            <button class="text-sm text-primary hover:underline">Reset</button>
                        </div>

                        <!-- Filter: Occupant -->
                        <div class="mb-6">
                            <h4 class="text-sm font-semibold text-gray-600 mb-3 uppercase tracking-wider">Occupant</h4>
                            <div class="space-y-2">
                                <label class="flex items-center gap-2 cursor-pointer">
                                    <input type="radio" name="occupant" class="text-primary focus:ring-primary border-gray-300">
                                    <span class="text-gray-700">Students</span>
                                </label>
                                <label class="flex items-center gap-2 cursor-pointer">
                                    <input type="radio" name="occupant" class="text-primary focus:ring-primary border-gray-300">
                                    <span class="text-gray-700">Professionals</span>
                                </label>
                                <label class="flex items-center gap-2 cursor-pointer">
                                    <input type="radio" name="occupant" class="text-primary focus:ring-primary border-gray-300" checked>
                                    <span class="text-gray-700">All</span>
                                </label>
                            </div>
                        </div>

                        <hr class="border-gray-100 mb-6">

                        <!-- Filter: Sharing Type -->
                        <div class="mb-6">
                            <h4 class="text-sm font-semibold text-gray-600 mb-3 uppercase tracking-wider">Sharing Type</h4>
                            <div class="space-y-2">
                                <label class="flex items-center gap-2 cursor-pointer">
                                    <input type="checkbox" class="text-primary focus:ring-primary border-gray-300 rounded">
                                    <span class="text-gray-700">Single Private</span>
                                </label>
                                <label class="flex items-center gap-2 cursor-pointer">
                                    <input type="checkbox" class="text-primary focus:ring-primary border-gray-300 rounded" checked>
                                    <span class="text-gray-700">Double Sharing</span>
                                </label>
                                <label class="flex items-center gap-2 cursor-pointer">
                                    <input type="checkbox" class="text-primary focus:ring-primary border-gray-300 rounded">
                                    <span class="text-gray-700">Triple Sharing</span>
                                </label>
                            </div>
                        </div>

                        <hr class="border-gray-100 mb-6">

                        <!-- Filter: Price Range -->
                        <div class="mb-6">
                            <h4 class="text-sm font-semibold text-gray-600 mb-3 uppercase tracking-wider">Max Budget</h4>
                            <input type="range" min="5000" max="25000" step="500" x-model="price" class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer accent-primary">
                            <div class="flex justify-between text-sm mt-2 text-gray-600 font-medium">
                                <span>₹5,000</span>
                                <span class="text-primary">₹<span x-text="price"></span></span>
                            </div>
                        </div>

                        <button class="w-full bg-primary hover:bg-teal-800 text-white font-bold py-3 rounded-lg transition-colors shadow-md">
                            Apply Filters
                        </button>
                    </div>
                </div>

                <!-- RIGHT SIDE: ROOM GRID -->
                <div class="lg:col-span-3">
                    
                    @php
                        // Dummy Data for Rooms
                        $rooms = [
                            ['title' => 'Luxury Single Suite', 'type' => 'Single Occupancy', 'price' => '15,000', 'tag' => 'Professional', 'img' => 'https://images.unsplash.com/photo-1522771753033-6a586857f291?auto=format&fit=crop&q=80&w=600'],
                            ['title' => 'Comfort Double', 'type' => 'Double Sharing', 'price' => '9,500', 'tag' => 'Student', 'img' => 'https://images.unsplash.com/photo-1595526114035-0d45ed16cfbf?auto=format&fit=crop&q=80&w=600'],
                            ['title' => 'Budget Triple', 'type' => 'Triple Sharing', 'price' => '7,000', 'tag' => 'Student', 'img' => 'https://images.unsplash.com/photo-1505693416388-b0346ef4143d?auto=format&fit=crop&q=80&w=600'],
                            ['title' => 'Premium Studio', 'type' => 'Single Occupancy', 'price' => '18,000', 'tag' => 'Professional', 'img' => 'https://images.unsplash.com/photo-1616486338812-3dadae4b4f9d?auto=format&fit=crop&q=80&w=600'],
                            ['title' => 'Standard Double', 'type' => 'Double Sharing', 'price' => '8,500', 'tag' => 'All', 'img' => 'https://images.unsplash.com/photo-1617806118233-18e1de247200?auto=format&fit=crop&q=80&w=600'],
                            ['title' => 'Economy Quad', 'type' => 'Four Sharing', 'price' => '5,500', 'tag' => 'Student', 'img' => 'https://images.unsplash.com/photo-1560185007-cde436f6a4d0?auto=format&fit=crop&q=80&w=600'],
                        ];
                    @endphp

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach($rooms as $index => $room)
                            <!-- Room Card -->
                            <div class="bg-white rounded-xl shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 overflow-hidden group flex flex-col">
                                <!-- Image Header -->
                                <div class="relative h-56 overflow-hidden">
                                    <img src="{{ $room['img'] }}" alt="{{ $room['title'] }}" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                                    <div class="absolute top-3 right-3 bg-green-500 text-white text-[10px] font-bold px-2 py-1 rounded shadow-sm">
                                        AVAILABLE
                                    </div>
                                    <div class="absolute bottom-3 left-3 bg-white/90 backdrop-blur text-primary text-xs font-bold px-2 py-1 rounded shadow-sm uppercase tracking-wide">
                                        {{ $room['tag'] }}
                                    </div>
                                </div>
                                
                                <!-- Content -->
                                <div class="p-5 flex flex-col flex-grow">
                                    <h3 class="text-lg font-bold text-gray-800 mb-1 group-hover:text-primary transition-colors">{{ $room['title'] }}</h3>
                                    <p class="text-sm text-gray-500 mb-3">{{ $room['type'] }}</p>
                                    
                                    <div class="flex items-baseline gap-1 mb-4">
                                        <span class="text-xl font-bold text-accent">₹{{ $room['price'] }}</span>
                                        <span class="text-xs text-gray-400">/ month</span>
                                    </div>

                                    <!-- Amenities Icons (Small) -->
                                    <div class="flex gap-3 border-t border-gray-50 pt-3 mb-4">
                                        <span class="flex items-center gap-1 text-xs text-gray-500" title="AC"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg> AC</span>
                                        <span class="flex items-center gap-1 text-xs text-gray-500" title="WiFi"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0"></path></svg> WiFi</span>
                                        <span class="flex items-center gap-1 text-xs text-gray-500" title="Meals"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path></svg> Food</span>
                                    </div>

                                    <!-- Action Button (Clickable Link) -->
                                    <div class="mt-auto">
                                        <a href="{{ route('room.details', 'room-'.($index+1)) }}" 
                                           class="block w-full text-center bg-primary/10 hover:bg-primary text-primary hover:text-white font-bold py-2.5 rounded-lg transition-all duration-300 text-sm">
                                            View Details
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Pagination (Static Mockup) -->
                    <div class="mt-10 flex justify-center gap-2">
                        <button class="w-10 h-10 rounded-full border border-gray-300 flex items-center justify-center text-gray-500 hover:bg-gray-100"><</button>
                        <button class="w-10 h-10 rounded-full bg-primary text-white flex items-center justify-center font-bold">1</button>
                        <button class="w-10 h-10 rounded-full border border-gray-300 flex items-center justify-center text-gray-500 hover:bg-gray-100">2</button>
                        <button class="w-10 h-10 rounded-full border border-gray-300 flex items-center justify-center text-gray-500 hover:bg-gray-100">></button>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection