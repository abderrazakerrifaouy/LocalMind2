@extends('layoute.app')
{{ $title = $question->title }}

@section('content')
<div class="min-h-screen bg-gray-50 py-10">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden mb-8">
            <div class="p-8">
                <div class="flex items-center justify-between mb-6">
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-indigo-50 text-indigo-700">
                        📍 {{ $question->location ?? 'Global' }}
                    </span>
                    <span class="text-sm text-gray-400">{{ $question->created_at->diffForHumans() }}</span>
                </div>

                <h1 class="text-3xl font-extrabold text-gray-900 mb-6">{{ $question->title }}</h1>
                
                <div class="prose max-w-none text-gray-700 leading-relaxed mb-8">
                    {!! nl2br(e($question->content)) !!}
                </div>

                <div class="flex items-center justify-between pt-6 border-t border-gray-50">
                    <div class="flex items-center space-x-3">
                        <div class="h-10 w-10 rounded-xl bg-indigo-600 flex items-center justify-center text-white font-bold">
                            {{ substr($question->user->name, 0, 1) }}
                        </div>
                        <div>
                            <p class="text-sm font-bold text-gray-900">{{ $question->user->name }}</p>
                            <p class="text-xs text-gray-400">Author</p>
                        </div>
                    </div>
                    
                    <button class="flex items-center gap-2 px-4 py-2 rounded-xl border border-gray-200 hover:bg-red-50 hover:border-red-200 hover:text-red-600 transition group">
                        <svg class="w-5 h-5 group-hover:fill-current" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                        <span class="text-sm font-medium">Favorite</span>
                    </button>
                </div>
            </div>
        </div>

        <div class="mb-8">
            <h3 class="text-xl font-bold text-gray-900 mb-6">
                {{ $question->responses->count() }} Answers
            </h3>

            <div class="space-y-4">
                @foreach($question->responses as $response)
                    <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
                        <p class="text-gray-700 leading-relaxed mb-4">{{ $response->content }}</p>
                        <div class="flex items-center justify-between text-xs text-gray-400">
                            <span class="font-medium text-gray-900">Replied by {{ $response->user->name }}</span>
                            <span>{{ $response->created_at->diffForHumans() }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        @auth
            <div class="bg-white rounded-3xl p-8 shadow-xl shadow-indigo-100/50 border border-gray-100">
                <h3 class="text-lg font-bold text-gray-900 mb-4">Your Answer</h3>
                <form action="/cerateReponse{{$question->id }}" method="POST">
                    @csrf
                    <textarea name="content" rows="5" required 
                        placeholder="Write your solution here..."
                        class="block w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-2xl focus:ring-2 focus:ring-indigo-500 outline-none transition mb-4"></textarea>
                    <button type="submit" class="px-6 py-3 bg-indigo-600 text-white font-bold rounded-xl hover:bg-indigo-700 transition shadow-lg shadow-indigo-100">
                        Post Answer
                    </button>
                </form>
            </div>
        @else
            <div class="text-center p-8 bg-gray-100 rounded-2xl border-2 border-dashed border-gray-200">
                <p class="text-gray-600">Please <a href="/login" class="text-indigo-600 font-bold">login</a> to answer this question.</p>
            </div>
        @endauth

    </div>
</div>
@endsection