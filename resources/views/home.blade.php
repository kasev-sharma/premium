@extends('layouts.app')

@section('title', 'Premium PG in Gurgaon | Home')

@section('content')
    <!-- A. Hero Section -->
    <section class="relative h-[85vh] flex items-center justify-center bg-cover bg-center" 
             style="background-image: url('https://images.unsplash.com/photo-1522771753033-6a586857f291?auto=format&fit=crop&q=80&w=2000');">
        
        <!-- Dark Overlay -->
        <div class="absolute inset-0 bg-neutral-dark/60"></div>

        <div class="container mx-auto px-4 relative z-10 text-center text-white mt-10">
            <span class="uppercase tracking-widest text-sm font-semibold text-accent mb-4 block animate-fade-in-up">Welcome to Luxury Living</span>
            <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight animate-fade-in-up">
                Premium PG for <span class="text-accent">Students & Professionals</span><br>
                in Sector 22, Gurgaon.
            </h1>
            <p class="text-lg md:text-xl text-gray-200 mb-10 max-w-2xl mx-auto font-light">
                Experience comfort, community, and convenience with our fully furnished rooms and homely amenities.
            </p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('rooms') }}" class="bg-accent hover:bg-yellow-600 text-white font-bold py-3.5 px-8 rounded-full shadow-lg transition-all transform hover:-translate-y-1">
                    Explore Rooms
                </a>
                <a href="#location" class="bg-transparent border-2 border-white hover:bg-white hover:text-primary text-white font-bold py-3.5 px-8 rounded-full transition-all">
                    View Location
                </a>
            </div>
        </div>

        <!-- Quick Filter Bar (Floating) -->
        <div class="absolute -bottom-16 left-0 right-0 z-20 px-4">
            <div class="container mx-auto max-w-4xl bg-white p-6 rounded-xl shadow-2xl flex flex-col md:flex-row items-end gap-4 border-t-4 border-primary">
                
                <!-- Filter: Occupant -->
                <div class="w-full md:w-1/3">
                    <label class="block text-xs font-bold text-gray-500 uppercase mb-2">I am a...</label>
                    <select class="w-full border-gray-200 rounded-lg focus:border-primary focus:ring-primary">
                        <option>Student</option>
                        <option>Professional</option>
                    </select>
                </div>

                <!-- Filter: Sharing -->
                <div class="w-full md:w-1/3">
                    <label class="block text-xs font-bold text-gray-500 uppercase mb-2">Sharing Type</label>
                    <select class="w-full border-gray-200 rounded-lg focus:border-primary focus:ring-primary">
                        <option>Single Occupancy</option>
                        <option>Double Sharing</option>
                        <option>Triple Sharing</option>
                    </select>
                </div>

                <!-- Search Button -->
                <div class="w-full md:w-1/3">
                    <button class="w-full bg-primary hover:bg-teal-800 text-white font-bold py-3 px-6 rounded-lg transition-colors flex items-center justify-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        Search Rooms
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Spacer for Filter Bar -->

    
    <div class="h-24 bg-gray-50"></div>

    <!-- B. Key Highlights -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                
                <!-- Highlight 1 -->
                <div class="flex flex-col items-center group">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center text-primary mb-4 group-hover:bg-primary group-hover:text-white transition-colors duration-300">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                    </div>
                    <h3 class="font-bold text-gray-800">No Brokerage</h3>
                    <p class="text-sm text-gray-500">Direct booking, zero fees</p>
                </div>

                <!-- Highlight 2 -->
                <div class="flex flex-col items-center group">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center text-primary mb-4 group-hover:bg-primary group-hover:text-white transition-colors duration-300">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </div>
                    <h3 class="font-bold text-gray-800">Homely Food</h3>
                    <p class="text-sm text-gray-500">Hygienic & nutritious meals</p>
                </div>

                <!-- Highlight 3 -->
                <div class="flex flex-col items-center group">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center text-primary mb-4 group-hover:bg-primary group-hover:text-white transition-colors duration-300">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0"></path></svg>
                    </div>
                    <h3 class="font-bold text-gray-800">High-Speed WiFi</h3>
                    <p class="text-sm text-gray-500">Work from home ready</p>
                </div>

                <!-- Highlight 4 -->
                <div class="flex flex-col items-center group">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center text-primary mb-4 group-hover:bg-primary group-hover:text-white transition-colors duration-300">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                    </div>
                    <h3 class="font-bold text-gray-800">24/7 Security</h3>
                    <p class="text-sm text-gray-500">CCTV & Biometric Access</p>
                </div>

            </div>
        </div>
    </section>

    <!-- C. Featured Rooms Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 md:px-6">
            
            <div class="flex justify-between items-end mb-10">
                <div>
                    <h2 class="text-3xl font-bold text-gray-800 mb-2">Featured Rooms</h2>
                    <p class="text-gray-600">Handpicked premium stays for you.</p>
                </div>
                <a href="{{ route('rooms') }}" class="hidden md:flex items-center text-primary font-bold hover:text-primary-dark transition">
                    View All Rooms <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                
                <!-- Room Card 1 -->
                <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300 group">
                    <div class="relative h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1595526114035-0d45ed16cfbf?auto=format&fit=crop&q=80&w=800" alt="Room" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute top-4 right-4 bg-green-500 text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wide">Available</div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-2">
                            <div>
                                <h3 class="text-xl font-bold text-gray-800">Classic Single Room</h3>
                                <span class="text-xs text-gray-500 uppercase tracking-wide">For Professionals</span>
                            </div>
                            <div class="text-right">
                                <p class="text-xl font-bold text-accent">₹14,000</p>
                                <p class="text-xs text-gray-400">/ month</p>
                            </div>
                        </div>
                        <div class="flex gap-3 text-gray-500 text-sm mb-6 border-t border-gray-100 pt-4 mt-4">
                            <span class="flex items-center gap-1"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg> AC</span>
                            <span class="flex items-center gap-1"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0"></path></svg> WiFi</span>
                            <span class="flex items-center gap-1"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h18v18H3z"></path></svg> Attached Washroom</span>
                        </div>
                        <button class="w-full bg-primary hover:bg-teal-800 text-white font-semibold py-3 rounded-lg transition-colors">
                            View Details
                        </button>
                    </div>
                </div>

                <!-- Room Card 2 -->
                <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300 group">
                    <div class="relative h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1505693416388-b0346ef4143d?auto=format&fit=crop&q=80&w=800" alt="Room" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute top-4 right-4 bg-accent text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wide">Fast Filling</div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-2">
                            <div>
                                <h3 class="text-xl font-bold text-gray-800">Double Sharing Suite</h3>
                                <span class="text-xs text-gray-500 uppercase tracking-wide">For Students</span>
                            </div>
                            <div class="text-right">
                                <p class="text-xl font-bold text-accent">₹9,500</p>
                                <p class="text-xs text-gray-400">/ person</p>
                            </div>
                        </div>
                        <div class="flex gap-3 text-gray-500 text-sm mb-6 border-t border-gray-100 pt-4 mt-4">
                            <span class="flex items-center gap-1"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg> AC</span>
                            <span class="flex items-center gap-1"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path></svg> 4 Meals</span>
                            <span class="flex items-center gap-1"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg> Laundry</span>
                        </div>
                        <button class="w-full bg-primary hover:bg-teal-800 text-white font-semibold py-3 rounded-lg transition-colors">
                            View Details
                        </button>
                    </div>
                </div>

                <!-- Room Card 3 -->
                <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300 group">
                    <div class="relative h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1560185007-cde436f6a4d0?auto=format&fit=crop&q=80&w=800" alt="Room" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute top-4 right-4 bg-green-500 text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wide">Available</div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-2">
                            <div>
                                <h3 class="text-xl font-bold text-gray-800">Triple Sharing Budget</h3>
                                <span class="text-xs text-gray-500 uppercase tracking-wide">Value Pick</span>
                            </div>
                            <div class="text-right">
                                <p class="text-xl font-bold text-accent">₹7,000</p>
                                <p class="text-xs text-gray-400">/ person</p>
                            </div>
                        </div>
                        <div class="flex gap-3 text-gray-500 text-sm mb-6 border-t border-gray-100 pt-4 mt-4">
                            <span class="flex items-center gap-1"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z"></path></svg> Cooler</span>
                            <span class="flex items-center gap-1"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0"></path></svg> WiFi</span>
                            <span class="flex items-center gap-1"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg> Library</span>
                        </div>
                        <button class="w-full bg-primary hover:bg-teal-800 text-white font-semibold py-3 rounded-lg transition-colors">
                            View Details
                        </button>
                    </div>
                </div>

            </div>

            <!-- Mobile View All Button -->
            <div class="mt-8 text-center md:hidden">
                <a href="{{ route('rooms') }}" class="inline-block bg-white border border-gray-300 text-gray-700 font-bold py-3 px-8 rounded-full shadow-sm hover:bg-gray-50 transition-colors">
                    View All Rooms
                </a>
            </div>
        </div>
    </section>

<!-- D. Testimonials Slider -->
    <section class="py-20 bg-white border-t border-gray-100">
        <div class="container mx-auto px-4 text-center max-w-4xl">
            <h2 class="text-3xl font-bold text-gray-800 mb-12">What Our Residents Say</h2>

            <!-- Alpine.js Slider Logic -->
            <div x-data="{ 
                    activeSlide: 0,
                    slides: [
                        { text: 'The food is actually homely, unlike other PGs. High-speed WiFi helps me work from home without issues.', name: 'Rahul Sharma', role: 'Software Engineer' },
                        { text: 'Security was my main concern, and the biometric access here gives me total peace of mind. Very clean rooms.', name: 'Priya Verma', role: 'MBA Student' },
                        { text: 'No brokerage and zero hidden charges. The manager is very supportive and resolves issues instantly.', name: 'Amit Singh', role: 'Data Analyst' }
                    ],
                    timer: null,
                    startAutoSlide() {
                        this.timer = setInterval(() => {
                            this.activeSlide = (this.activeSlide + 1) % this.slides.length;
                        }, 5000);
                    }
                 }" 
                 x-init="startAutoSlide()"
                 class="relative min-h-[200px]">

                <!-- Slides -->
                <template x-for="(slide, index) in slides" :key="index">
                    <div x-show="activeSlide === index"
                         x-transition:enter="transition ease-out duration-500"
                         x-transition:enter-start="opacity-0 transform translate-x-10"
                         x-transition:enter-end="opacity-100 transform translate-x-0"
                         x-transition:leave="transition ease-in duration-500"
                         x-transition:leave-start="opacity-100 transform translate-x-0"
                         x-transition:leave-end="opacity-0 transform -translate-x-10"
                         class="absolute inset-0 flex flex-col items-center justify-center">
                        
                        <!-- Quote Icon -->
                        <div class="text-primary/20 mb-4">
                            <svg class="w-12 h-12" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21L14.017 18C14.017 16.054 15.331 15.222 16.674 14.944C16.965 14.885 17.16 14.654 17.07 14.375C15.829 13.978 15.356 12.879 15.632 11.232C15.938 9.40901 17.519 8.01701 19.387 8.01701C20.697 8.01701 21.841 8.84001 22.08 10.366C22.185 11.036 22.132 11.83 21.921 12.636C21.365 14.773 20.354 18.232 17.702 20.732C17.387 21.029 16.892 21.066 16.536 20.819L14.017 21ZM1.96799 21L1.96799 18C1.96799 16.054 3.28299 15.222 4.62499 14.944C4.91599 14.885 5.11099 14.654 5.02099 14.375C3.77999 13.978 3.30699 12.879 3.58299 11.232C3.88899 9.40901 5.46999 8.01701 7.33799 8.01701C8.64799 8.01701 9.79199 8.84001 10.031 10.366C10.136 11.036 10.083 11.83 9.87199 12.636C9.31599 14.773 8.30499 18.232 5.65299 20.732C5.33799 21.029 4.84299 21.066 4.48699 20.819L1.96799 21Z"></path></svg>
                        </div>
                        
                        <p class="text-xl md:text-2xl font-light text-gray-700 italic mb-6">"<span x-text="slide.text"></span>"</p>
                        
                        <div>
                            <h4 class="font-bold text-primary" x-text="slide.name"></h4>
                            <span class="text-xs text-gray-500 uppercase tracking-wide" x-text="slide.role"></span>
                        </div>
                    </div>
                </template>

                <!-- Indicators/Dots -->
                <div class="absolute -bottom-10 left-0 right-0 flex justify-center gap-2">
                    <template x-for="(slide, index) in slides" :key="index">
                        <button @click="activeSlide = index; clearInterval(timer); startAutoSlide()" 
                                class="w-3 h-3 rounded-full transition-colors"
                                :class="activeSlide === index ? 'bg-primary' : 'bg-gray-300'">
                        </button>
                    </template>
                </div>
            </div>
        </div>
    </section>

    <!-- E. Call to Action (CTA) -->
    <section class="py-20 bg-primary">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">Not sure which room fits you?</h2>
            <p class="text-blue-100 text-lg mb-8 max-w-2xl mx-auto">
                Talk to our property manager directly. We can help you choose the best room based on your budget and preferences.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <button @click="bookingModalOpen = true" class="bg-accent hover:bg-yellow-500 text-white font-bold py-4 px-10 rounded-full shadow-xl transition-transform hover:-translate-y-1">
                    Request a Callback
                </button>
                <a href="tel:+919876543210" class="bg-transparent border-2 border-white text-white hover:bg-white hover:text-primary font-bold py-4 px-10 rounded-full transition-colors">
                    Call +91 98765 43210
                </a>
            </div>
        </div>
    </section>


@endsection