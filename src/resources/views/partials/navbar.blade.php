<header class="bg-white border-b border-gray-100 sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
            
            <div class="flex items-center gap-8">
                <a href="/" class="flex items-center gap-2 group">
                    <div class="bg-indigo-600 p-1.5 rounded-lg group-hover:bg-indigo-700 transition">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path>
                        </svg>
                    </div>
                    <span class="text-xl font-black text-gray-900 tracking-tight">Dev<span class="text-indigo-600">Flow</span></span>
                </a>
                @auth
                <nav class="hidden md:flex items-center gap-6 text-sm font-medium text-gray-500">
                    <a href="#" class="hover:text-indigo-600 transition">Questions</a>
                    <a href="#" class="hover:text-indigo-600 transition">Tags</a>
                    <a href="#" class="hover:text-indigo-600 transition">Users</a>
                </nav>
                @endauth
            </div>
            @auth
            <div class="hidden sm:flex flex-1 max-w-md mx-8">
                <div class="relative w-full">
                    <span class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="h-4 w-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </span>
                    <input type="text" 
                        class="block w-full pl-10 pr-3 py-2 border border-gray-200 rounded-xl bg-gray-50 text-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:bg-white transition" 
                        placeholder="Search questions...">
                </div>
            </div>
            @endauth
            <div class="flex items-center gap-4">
                @auth
                    <button class="p-2 text-gray-400 hover:text-indigo-600 rounded-full hover:bg-indigo-50 transition">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
                    </button>

                    <div class="flex items-center gap-3 pl-4 border-l border-gray-100">
                        <div class="text-right hidden md:block">
                            <p class="text-xs font-bold text-gray-900 leading-none">John Doe</p>
                            <p class="text-[10px] text-gray-400 mt-1">Pro Member</p>
                        </div>
                        <button class="h-10 w-10 rounded-xl bg-indigo-100 border-2 border-white shadow-sm flex items-center justify-center text-indigo-700 font-bold overflow-hidden">
                            <img src="https://ui-avatars.com/api/?name=John+Doe&background=4f46e5&color=fff" alt="User Avatar">
                        </button>
                    </div>
                @else
                    <a href="#" class="text-sm font-semibold text-gray-600 hover:text-indigo-600">Login</a>
                    <a href="#" class="px-5 py-2.5 bg-indigo-600 text-white text-sm font-bold rounded-xl hover:bg-indigo-700 shadow-md shadow-indigo-100 transition">
                        Join Community
                    </a>
                @endauth
            </div>
        </div>
    </div>
</header>