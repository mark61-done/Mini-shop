<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="text-center">
                        <div class="text-6xl mb-6">👋</div>
                        <h1 class="text-3xl font-bold text-gray-800 mb-4">Welcome, {{ Auth::user()->name }}!</h1>
                        <p class="text-gray-600 text-lg mb-8">Thank you for being our valued customer.</p>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                            <div class="bg-blue-50 p-6 rounded-lg">
                                <div class="text-3xl mb-3">🛍️</div>
                                <h3 class="font-semibold text-blue-800 mb-2">Shop Products</h3>
                                <p class="text-blue-600 mb-4">Browse our amazing product collection</p>
                                <a href="{{ route('shop.index') }}" 
                                   class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-sm font-medium">
                                    Start Shopping
                                </a>
                            </div>
                            
                            <div class="bg-green-50 p-6 rounded-lg">
                                <div class="text-3xl mb-3">🛒</div>
                                <h3 class="font-semibold text-green-800 mb-2">Your Cart</h3>
                                <p class="text-green-600 mb-4">View and manage your shopping cart</p>
                                <a href="{{ route('cart') }}" 
                                   class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg text-sm font-medium">
                                    View Cart
                                </a>
                            </div>
                        </div>
                        
                        <div class="bg-gray-50 p-6 rounded-lg">
                            <h3 class="font-semibold text-gray-800 mb-3">Quick Stats</h3>
                            <div class="flex justify-center space-x-8 text-center">
                                <div>
                                    <div class="text-2xl font-bold text-blue-600">0</div>
                                    <div class="text-sm text-gray-600">Orders</div>
                                </div>
                                <div>
                                    <div class="text-2xl font-bold text-green-600">
                                        @if(session('cart')) {{ count(session('cart')) }} @else 0 @endif
                                    </div>
                                    <div class="text-sm text-gray-600">Cart Items</div>
                                </div>
                                <div>
                                    <div class="text-2xl font-bold text-purple-600">0</div>
                                    <div class="text-sm text-gray-600">Wishlist</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>