@extends('layoute')

@section('content')
<div class="min-h-screen bg-gray-50 py-12">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <a href="/dashboardUser" class="inline-flex items-center text-sm text-gray-500 hover:text-indigo-600 mb-6 transition">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
            Back to Feed
        </a>

        <div class="bg-white rounded-3xl shadow-xl shadow-indigo-100/50 border border-gray-100 overflow-hidden">
            <div class="bg-indigo-600 p-8 text-white">
                <h1 class="text-2xl font-bold">Ask a Public Question</h1>
                <p class="text-indigo-100 text-sm mt-2">Be specific and imagine you’re asking a question to another person.</p>
            </div>

            <form action="/creteQestion" method="POST" class="p-8 space-y-6">
                @csrf

                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-1">Title</label>
                    <p class="text-xs text-gray-400 mb-3">Be specific and imagine you’re asking a question to another person.</p>
                    <input type="text" name="title" required 
                        placeholder="e.g. How to optimize PostgreSQL JSONB queries?"
                        class="block w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:bg-white transition outline-none text-gray-700">
                </div>

                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-1">Location</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-400">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path></svg>
                        </span>
                        <input type="text" name="location" 
                            placeholder="e.g. Casablanca, Morocco (Optional)"
                            class="block w-full pl-10 pr-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:bg-white transition outline-none text-gray-700">
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-1">The Body</label>
                    <p class="text-xs text-gray-400 mb-3">Include all the information someone would need to answer your question.</p>
                    <textarea name="content" rows="8" required 
                        placeholder="Explain your problem in detail..."
                        class="block w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:bg-white transition outline-none text-gray-700"></textarea>
                </div>

                <div class="pt-4 flex items-center justify-end gap-4">
                    <a href="/" class="text-sm font-medium text-gray-500 hover:text-gray-700">Cancel</a>
                    <button type="submit" 
                        class="px-8 py-3 bg-indigo-600 text-white font-bold rounded-xl shadow-lg shadow-indigo-100 hover:bg-indigo-700 hover:-translate-y-1 transition-all">
                        Post Your Question
                    </button>
                </div>
            </form>
        </div>
        
        <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="bg-blue-50 p-4 rounded-2xl border border-blue-100">
                <h4 class="font-bold text-blue-800 text-sm">1. Summarize</h4>
                <p class="text-xs text-blue-600 mt-1">Keep it short and clear.</p>
            </div>
            <div class="bg-amber-50 p-4 rounded-2xl border border-amber-100">
                <h4 class="font-bold text-amber-800 text-sm">2. Describe</h4>
                <p class="text-xs text-amber-600 mt-1">Show code if you have it.</p>
            </div>
            <div class="bg-emerald-50 p-4 rounded-2xl border border-emerald-100">
                <h4 class="font-bold text-emerald-800 text-sm">3. Be Kind</h4>
                <p class="text-xs text-emerald-600 mt-1">Our community is helpful.</p>
            </div>
        </div>
    </div>
</div>
@endsection