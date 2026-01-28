@extends('layoute')

@section('content')
<div class="min-h-screen bg-gray-50 py-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="flex flex-col md:flex-row md:items-center justify-between mb-10 gap-4">
            <div>
                <h1 class="text-3xl font-extrabold text-gray-900 tracking-tight">Community Feed</h1>
                <p class="text-gray-500 mt-1">Explore the latest technical discussions from the community.</p>
            </div>
            <a href="#" class="flex items-center justify-center px-6 py-3 bg-indigo-600 text-white font-bold rounded-xl shadow-lg shadow-indigo-200 hover:bg-indigo-700 hover:-translate-y-1 transition-all duration-200">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                Ask a Question
            </a>
        </div>

        <div class="flex flex-col lg:flex-row gap-8">
            <div class="lg:w-2/3 space-y-6">
                
                <div class="group relative bg-white rounded-2xl p-6 shadow-sm border border-gray-100 hover:shadow-xl hover:border-indigo-100 transition-all duration-300">
                    <div class="flex items-start justify-between">
                        <div class="flex-1">
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-indigo-50 text-indigo-700 mb-3">
                                #Database
                            </span>
                            <h2 class="text-xl font-bold text-gray-900 group-hover:text-indigo-600 transition-colors">
                                <a href="#">How to optimize PostgreSQL indexes for large JSONB columns?</a>
                            </h2>
                            <p class="mt-3 text-gray-600 leading-relaxed line-clamp-2">
                                We are storing millions of logs in a JSONB column. Queries are becoming slow when filtering by nested keys. Is a GIN index the best option here?
                            </p>
                        </div>
                    </div>

                    <div class="mt-6 pt-6 border-t border-gray-50 flex items-center justify-between">
                        <div class="flex items-center space-x-3">
                            <div class="h-8 w-8 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-700 font-bold text-xs">
                                JD
                            </div>
                            <span class="text-sm font-medium text-gray-700">John Doe</span>
                        </div>
                        <div class="flex items-center text-gray-400 text-sm space-x-4">
                            <span class="flex items-center"><svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg> 12</span>
                            <span>3 hours ago</span>
                        </div>
                    </div>
                </div>

                <div class="group relative bg-white rounded-2xl p-6 shadow-sm border border-gray-100 hover:shadow-xl hover:border-indigo-100 transition-all duration-300">
                    <div class="flex-1">
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-emerald-50 text-emerald-700 mb-3">
                            #Frontend
                        </span>
                        <h2 class="text-xl font-bold text-gray-900 group-hover:text-indigo-600 transition-colors">
                            <a href="#">Best way to handle dark mode splash in Tailwind?</a>
                        </h2>
                        <p class="mt-3 text-gray-600 leading-relaxed line-clamp-2">
                            I'm getting a white flash before the dark theme loads. I'm using the 'class' strategy. Any tips on fixing the flicker?
                        </p>
                    </div>
                    <div class="mt-6 pt-6 border-t border-gray-50 flex items-center justify-between text-sm">
                        <div class="flex items-center space-x-3">
                            <div class="h-8 w-8 rounded-full bg-emerald-100 flex items-center justify-center text-emerald-700 font-bold text-xs">
                                MK
                            </div>
                            <span class="font-medium text-gray-700">Maria Khan</span>
                        </div>
                        <span class="text-gray-400">Yesterday</span>
                    </div>
                </div>

            </div>

            <div class="lg:w-1/3">
                <div class="bg-indigo-900 rounded-3xl p-8 text-white shadow-2xl shadow-indigo-200">
                    <h3 class="text-xl font-bold mb-6">User Activity</h3>
                    
                    <div class="space-y-6">
                        <div class="flex items-center justify-between p-4 bg-white/10 rounded-2xl backdrop-blur-sm">
                            <div class="flex items-center">
                                <span class="text-indigo-100 font-medium">Favorites</span>
                            </div>
                            <span class="text-2xl font-bold">24</span>
                        </div>

                        <div class="flex items-center justify-between p-4 bg-white/10 rounded-2xl backdrop-blur-sm">
                            <div class="flex items-center">
                                <span class="text-indigo-100 font-medium">My Posts</span>
                            </div>
                            <span class="text-2xl font-bold">08</span>
                        </div>

                        <a href="#" class="block w-full text-center py-3 bg-white text-indigo-900 font-bold rounded-xl hover:bg-indigo-50 transition-colors">
                            View Profile
                        </a>
                    </div>
                    
                    <div class="mt-8 pt-8 border-t border-white/10 text-center">
                        <p class="text-indigo-200 text-sm">Looking for help? Check out our <a href="#" class="underline text-white">Documentation</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection