@extends('layouts.app')

@section('title', 'Contact Us - Premium PG')

@section('content')

    <!-- 1. Hero Section -->
    <section class="bg-primary py-16 text-center text-white relative">
        <div class="container mx-auto px-4 relative z-10">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Get in Touch</h1>
            <p class="text-blue-100 text-lg">Have questions? We'd love to hear from you.</p>
        </div>
    </section>

    <!-- 2. Contact Info & Form -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4 md:px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20">
                
                <!-- Left: Information -->
                <div>
                    <h2 class="text-3xl font-bold text-gray-800 mb-6">Visit Us</h2>
                    <p class="text-gray-600 mb-8 leading-relaxed">
                        We are located in the prime sector of Gurgaon, offering easy connectivity to major corporate hubs and metro stations.
                    </p>

                    <!-- Contact Details -->
                    <div class="space-y-6 mb-10">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center text-primary flex-shrink-0">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800">Address</h4>
                                <p class="text-gray-600">Plot No. 45, Sector 22, Gurgaon,<br>Haryana 122015</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center text-primary flex-shrink-0">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800">Phone</h4>
                                <p class="text-gray-600">+91 98765 43210</p>
                                <p class="text-sm text-gray-500">Mon-Sun, 9am - 9pm</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center text-primary flex-shrink-0">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800">Email</h4>
                                <p class="text-gray-600">hello@premiumpg.com</p>
                            </div>
                        </div>
                    </div>

                    <!-- Nearby Distances -->
                    <div class="bg-gray-50 p-6 rounded-xl border border-gray-100">
                        <h4 class="font-bold text-gray-800 mb-4">Nearby Landmarks</h4>
                        <ul class="space-y-2 text-sm text-gray-600">
                            <li class="flex justify-between"><span>Cyber City</span> <span class="font-bold text-primary">2.5 km</span></li>
                            <li class="flex justify-between"><span>Udyog Vihar</span> <span class="font-bold text-primary">1.8 km</span></li>
                            <li class="flex justify-between"><span>Sector 21 Metro</span> <span class="font-bold text-primary">3.0 km</span></li>
                            <li class="flex justify-between"><span>Ambience Mall</span> <span class="font-bold text-primary">4.2 km</span></li>
                        </ul>
                    </div>
                </div>

                <!-- Right: Contact Form -->
                <div class="bg-white p-8 rounded-2xl shadow-lg border border-gray-100">
                    <h3 class="text-2xl font-bold text-gray-800 mb-6">Send us a Message</h3>
                    
                    <form class="space-y-5">
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-1">Full Name</label>
                            <input type="text" class="w-full rounded-lg border-gray-300 focus:border-primary focus:ring-primary" placeholder="Enter your name">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-1">Phone Number</label>
                            <input type="tel" class="w-full rounded-lg border-gray-300 focus:border-primary focus:ring-primary" placeholder="+91 99999 99999">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-1">Subject</label>
                            <select class="w-full rounded-lg border-gray-300 focus:border-primary focus:ring-primary">
                                <option>General Inquiry</option>
                                <option>Room Availability</option>
                                <option>Pricing Query</option>
                                <option>Complaint / Support</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-1">Message</label>
                            <textarea rows="4" class="w-full rounded-lg border-gray-300 focus:border-primary focus:ring-primary" placeholder="How can we help you?"></textarea>
                        </div>
                        <button class="w-full bg-accent hover:bg-yellow-600 text-white font-bold py-3.5 rounded-lg shadow-md transition-transform hover:-translate-y-1">
                            Send Message
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </section>

    <!-- 3. Google Map (Full Width) -->
    <section class="h-96 w-full bg-gray-200">
        <!-- Embed Google Map -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14030.5644265432!2d77.0716616!3d28.5096184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d196b0292725d%3A0x6b4065b986873106!2sSector%2022%2C%20Gurugram%2C%20Haryana!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin" 
                width="100%" 
                height="100%" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

@endsection