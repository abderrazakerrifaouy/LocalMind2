@extends('layoute')

@section('content')
    <div class="min-h-[85vh] flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8 bg-gray-50">
        <div class="max-w-5xl w-full flex bg-white rounded-3xl shadow-2xl overflow-hidden border border-gray-100">

            <div class="w-full lg:w-1/2 p-8 sm:p-12">
                <div class="mb-10">
                    <h2 class="text-3xl font-extrabold text-gray-900 tracking-tight">Create Account</h2>
                    <p class="text-gray-500 mt-2">Join 10,000+ developers sharing knowledge.</p>
                </div>

                <form action="/register" method="POST" class="space-y-5">
                    @csrf

                    <div>
                        <label class="block text-xs font-bold uppercase text-gray-400 tracking-wider mb-1 ml-1">Full
                            Name</label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-gray-400">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </span>
                            <input type="text" name="name" required placeholder="Alex Johnson"
                                class="block w-full pl-11 pr-4 py-3.5 bg-gray-50 border border-gray-200 rounded-2xl focus:ring-2 focus:ring-indigo-500 focus:bg-white transition outline-none text-gray-700">
                        </div>
                        @error('name')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-xs font-bold uppercase text-gray-400 tracking-wider mb-1 ml-1">Email
                            Address</label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-gray-400">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                    </path>
                                </svg>
                            </span>
                            <input type="email" name="email" required placeholder="alex@example.com"
                                class="block w-full pl-11 pr-4 py-3.5 bg-gray-50 border border-gray-200 rounded-2xl focus:ring-2 focus:ring-indigo-500 focus:bg-white transition outline-none text-gray-700">
                        </div>
                        @error('email')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label
                            class="block text-xs font-bold uppercase text-gray-400 tracking-wider mb-1 ml-1">Password</label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-gray-400">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 00-2 2zm10-10V7a4 4 0 00-8 0v4h8z">
                                    </path>
                                </svg>
                            </span>
                            <input type="password" name="password" required placeholder="••••••••"
                                class="block w-full pl-11 pr-4 py-3.5 bg-gray-50 border border-gray-200 rounded-2xl focus:ring-2 focus:ring-indigo-500 focus:bg-white transition outline-none text-gray-700">
                        </div>
                        @error('password')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-xs font-bold uppercase text-gray-400 tracking-wider mb-1 ml-1">Confirm
                            Password</label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-gray-400">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 00-2 2z">
                                    </path>
                                </svg>
                            </span>
                            <input type="password" name="password_confirmation" required placeholder="••••••••"
                                class="block w-full pl-11 pr-4 py-3.5 bg-gray-50 border border-gray-200 rounded-2xl focus:ring-2 focus:ring-indigo-500 focus:bg-white transition outline-none text-gray-700">
                        </div>
                    </div>

                    <div class="flex items-center px-1">
                        <input type="checkbox" name="terms" id="terms"
                            class="h-4 w-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                        <label for="terms" class="ml-2 text-sm text-gray-500">I agree to the <a href="#"
                                class="text-indigo-600 underline">Terms of Service</a></label>
                    </div>
                    @error('terms')
                        <p class="text-red-500 text-sm mt-1 ml-1">{{ $message }}</p>
                    @enderror

                    <button type="submit"
                        class="w-full py-4 bg-indigo-600 text-white font-bold rounded-2xl shadow-xl shadow-indigo-100 hover:bg-indigo-700 hover:-translate-y-1 transition-all active:scale-95">
                        Start Coding Together
                    </button>
                </form>

                <p class="mt-8 text-center text-sm text-gray-500">
                    Already a member? <a href="/"
                        class="font-bold text-indigo-600 hover:text-indigo-500 transition">Log In</a>
                </p>
            </div>

            <div class="hidden lg:flex lg:w-1/2 bg-indigo-600 p-12 text-white flex-col justify-between">
                <div>
                    <div
                        class="bg-white/20 w-12 h-12 rounded-xl flex items-center justify-center mb-6 backdrop-blur-md text-2xl font-bold">
                        D</div>
                    <h3 class="text-4xl font-bold leading-tight">Elevate your <br> workflow today.</h3>
                    <p class="mt-4 text-indigo-100 text-lg">Your journey to better code starts here. Get answers, share
                        tips, and build your reputation.</p>
                </div>

                <div class="space-y-6">
                    <div class="flex items-center gap-4">
                        <div>
                            <p class="font-bold">Save Favorites</p>
                            <p class="text-indigo-200 text-sm">Keep track of useful solutions.</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4">
                        <div>
                            <p class="font-bold">Global Community</p>
                            <p class="text-indigo-200 text-sm">Connect with devs worldwide.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
