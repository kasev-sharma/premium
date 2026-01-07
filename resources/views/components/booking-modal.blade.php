<div x-show="bookingModalOpen" 
     style="display: none;" 
     class="fixed inset-0 z-[100] overflow-y-auto" 
     aria-labelledby="modal-title" role="dialog" aria-modal="true">
    
    <!-- Background Backdrop -->
    <div x-show="bookingModalOpen" 
         x-transition:enter="ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="fixed inset-0 bg-gray-900/75 backdrop-blur-sm transition-opacity" 
         @click="bookingModalOpen = false"></div>

    <div class="flex min-h-full items-center justify-center p-4 text-center sm:p-0">
        
        <!-- Modal Card -->
        <div x-show="bookingModalOpen" 
             x-transition:enter="ease-out duration-300"
             x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
             x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
             x-transition:leave="ease-in duration-200"
             x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
             x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
             class="relative transform overflow-hidden rounded-2xl bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg border-t-8 border-primary">
            
            <!-- Close Button -->
            <button @click="bookingModalOpen = false" class="absolute top-4 right-4 text-gray-400 hover:text-gray-600">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>
            </button>

            <div class="px-6 py-8">
                <div class="text-center mb-6">
                    <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-full bg-primary/10 text-primary mb-4">
                        <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900">Schedule a Site Visit</h3>
                    <p class="text-sm text-gray-500 mt-2">Fill in your details and we will confirm your appointment.</p>
                </div>

                <form class="space-y-4">
                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-1">Your Name</label>
                        <input type="text" class="w-full rounded-lg border-gray-300 focus:border-primary focus:ring-primary" placeholder="Enter full name">
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-1">Phone Number</label>
                        <input type="tel" class="w-full rounded-lg border-gray-300 focus:border-primary focus:ring-primary" placeholder="+91 99999 99999">
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-1">Preferred Date</label>
                            <input type="date" class="w-full rounded-lg border-gray-300 focus:border-primary focus:ring-primary">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-1">Room Type</label>
                            <select class="w-full rounded-lg border-gray-300 focus:border-primary focus:ring-primary">
                                <option>Single Room</option>
                                <option>Double Sharing</option>
                                <option>Triple Sharing</option>
                            </select>
                        </div>
                    </div>
                    
                    <button type="button" @click="bookingModalOpen = false; alert('Booking Request Sent!')" class="w-full bg-accent hover:bg-yellow-600 text-white font-bold py-3 rounded-lg shadow-md mt-2 transition-colors">
                        Confirm Booking
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>