@extends('layouts.app')

@section('title', 'Photo Gallery - Premium PG')

@section('content')

    <!-- 1. Hero Section -->
    <section class="bg-primary py-12 text-center text-white">
        <div class="container mx-auto px-4">
            <h1 class="text-3xl md:text-4xl font-bold mb-2">Life at Premium PG</h1>
            <p class="text-blue-100">Take a visual tour of our premium spaces and happy community.</p>
        </div>
    </section>

    <!-- 2. Gallery Section (Alpine.js for Filtering & Lightbox) -->
    <section class="py-12 bg-white" 
             x-data="{ 
                activeFilter: 'all', 
                lightboxOpen: false, 
                currentImage: '',
                
                images: [
                    { src: 'https://images.unsplash.com/photo-1522771753033-6a586857f291?auto=format&fit=crop&q=80&w=800', category: 'rooms', title: 'Premium Single Room' },
                    { src: 'https://images.unsplash.com/photo-1595526114035-0d45ed16cfbf?auto=format&fit=crop&q=80&w=800', category: 'rooms', title: 'Double Sharing' },
                    { src: 'https://images.unsplash.com/photo-1560185007-cde436f6a4d0?auto=format&fit=crop&q=80&w=800', category: 'rooms', title: 'Triple Sharing' },
                    { src: 'https://images.unsplash.com/photo-1584622050111-993a426fbf0a?auto=format&fit=crop&q=80&w=800', category: 'washrooms', title: 'Hygenic Washroom' },
                    { src: 'https://images.unsplash.com/photo-1631679706909-1844bbd07221?auto=format&fit=crop&q=80&w=800', category: 'common', title: 'Lounge Area' },
                    { src: 'https://images.unsplash.com/photo-1556910103-1c02745a30bf?auto=format&fit=crop&q=80&w=800', category: 'food', title: 'Dining Hall' },
                    { src: 'https://images.unsplash.com/photo-1604382354936-07c5d9983bd3?auto=format&fit=crop&q=80&w=800', category: 'food', title: 'Fresh Breakfast' },
                    { src: 'https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&q=80&w=800', category: 'common', title: 'Co-working Space' },
                    { src: 'https://images.unsplash.com/photo-1556228453-efd6c1ff04f6?auto=format&fit=crop&q=80&w=800', category: 'rooms', title: 'Study Desk' },
                ],

                openLightbox(imgSrc) {
                    this.currentImage = imgSrc;
                    this.lightboxOpen = true;
                }
             }">
        
        <div class="container mx-auto px-4 md:px-6">
            
            <!-- Filter Tabs -->
            <div class="flex flex-wrap justify-center gap-3 mb-10">
                <button @click="activeFilter = 'all'" 
                        :class="activeFilter === 'all' ? 'bg-primary text-white' : 'bg-gray-100 text-gray-600 hover:bg-gray-200'"
                        class="px-6 py-2 rounded-full text-sm font-bold transition-colors">
                    All Photos
                </button>
                <button @click="activeFilter = 'rooms'" 
                        :class="activeFilter === 'rooms' ? 'bg-primary text-white' : 'bg-gray-100 text-gray-600 hover:bg-gray-200'"
                        class="px-6 py-2 rounded-full text-sm font-bold transition-colors">
                    Rooms
                </button>
                <button @click="activeFilter = 'food'" 
                        :class="activeFilter === 'food' ? 'bg-primary text-white' : 'bg-gray-100 text-gray-600 hover:bg-gray-200'"
                        class="px-6 py-2 rounded-full text-sm font-bold transition-colors">
                    Food & Dining
                </button>
                <button @click="activeFilter = 'common'" 
                        :class="activeFilter === 'common' ? 'bg-primary text-white' : 'bg-gray-100 text-gray-600 hover:bg-gray-200'"
                        class="px-6 py-2 rounded-full text-sm font-bold transition-colors">
                    Common Areas
                </button>
                <button @click="activeFilter = 'washrooms'" 
                        :class="activeFilter === 'washrooms' ? 'bg-primary text-white' : 'bg-gray-100 text-gray-600 hover:bg-gray-200'"
                        class="px-6 py-2 rounded-full text-sm font-bold transition-colors">
                    Washrooms
                </button>
            </div>

            <!-- Image Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <template x-for="image in images" :key="image.src">
                    <div x-show="activeFilter === 'all' || activeFilter === image.category"
                         x-transition:enter="transition ease-out duration-300"
                         x-transition:enter-start="opacity-0 scale-90"
                         x-transition:enter-end="opacity-100 scale-100"
                         class="relative group cursor-pointer overflow-hidden rounded-xl shadow-sm hover:shadow-xl transition-all"
                         @click="openLightbox(image.src)">
                        
                        <img :src="image.src" :alt="image.title" class="w-full h-64 object-cover transform group-hover:scale-110 transition-transform duration-500">
                        
                        <!-- Hover Overlay -->
                        <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <div class="text-center text-white">
                                <svg class="w-8 h-8 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"></path></svg>
                                <p class="font-bold text-lg" x-text="image.title"></p>
                            </div>
                        </div>
                    </div>
                </template>
            </div>

            <!-- Lightbox Modal -->
            <div x-show="lightboxOpen" 
                 style="display: none;"
                 x-transition.opacity
                 class="fixed inset-0 z-[100] bg-black/95 flex items-center justify-center p-4">
                
                <!-- Close Button -->
                <button @click="lightboxOpen = false" class="absolute top-6 right-6 text-white hover:text-gray-300">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>

                <!-- Full Image -->
                <img :src="currentImage" class="max-h-[90vh] max-w-full rounded-lg shadow-2xl" @click.outside="lightboxOpen = false">
            </div>

        </div>
    </section>

@endsection