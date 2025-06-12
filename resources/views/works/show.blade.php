<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('実績詳細') }}
            </h2>
            @auth
                @if(Auth::user()->isAdmin() || Auth::user()->isStaff() || Auth::id() == $work->user_id)
                    <a href="{{ route('works.edit', $work->id) }}" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">
                        {{ __('編集') }}
                    </a>
                @endif
            @endauth
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            @endif

            @if (session('error'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                    <span class="block sm:inline">{{ session('error') }}</span>
                </div>
            @endif

            <!-- Work Details -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="relative" x-data="imageSlider()" x-init="init()">
                    @php
                        $allImages = collect();
                        if($work->cover_image) {
                            $allImages->push((object)['path' => $work->cover_image, 'alt' => $work->title]);
                        }
                        foreach($work->images as $image) {
                            $allImages->push((object)['path' => $image->image_path, 'alt' => $work->title]);
                        }
                    @endphp
                    
                    @if($allImages->count() > 0)
                        <div class="relative overflow-hidden">
                            @foreach($allImages as $index => $image)
                                <div x-show="currentSlide === {{ $index }}" 
                                     x-transition:enter="transition ease-out duration-300"
                                     x-transition:enter-start="opacity-0 transform translate-x-full"
                                     x-transition:enter-end="opacity-100 transform translate-x-0"
                                     x-transition:leave="transition ease-in duration-300"
                                     x-transition:leave-start="opacity-100 transform translate-x-0"
                                     x-transition:leave-end="opacity-0 transform -translate-x-full"
                                     class="w-full">
                                    <img src="{{ asset('storage/' . $image->path) }}" alt="{{ $image->alt }}" class="w-full h-64 object-cover">
                                </div>
                            @endforeach
                            
                            @if($allImages->count() > 1)
                                <button @click="previousSlide()" 
                                        class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-50 text-white p-2 rounded-full hover:bg-opacity-75 transition-all">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                    </svg>
                                </button>
                                
                                <button @click="nextSlide()" 
                                        class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-50 text-white p-2 rounded-full hover:bg-opacity-75 transition-all">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </button>
                                
                                <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2">
                                    @foreach($allImages as $index => $image)
                                        <button @click="currentSlide = {{ $index }}" 
                                                :class="currentSlide === {{ $index }} ? 'bg-white' : 'bg-white bg-opacity-50'"
                                                class="w-3 h-3 rounded-full transition-all"></button>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    @else
                        <div class="w-full h-64 bg-gray-200 flex items-center justify-center">
                            <span class="text-gray-500">{{ __('画像なし') }}</span>
                        </div>
                    @endif
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent p-6">
                        <h1 class="text-3xl font-bold text-white">{{ $work->title }}</h1>
                    </div>
                </div>
                
                <div class="p-6">
                    <div class="flex flex-wrap items-center gap-2 mb-4">
                        <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full">
                            {{ $work->category->name }}
                        </span>
                        
                        @foreach($work->tags as $tag)
                            <span class="px-3 py-1 bg-gray-100 text-gray-800 rounded-full">
                                {{ $tag->name }}
                            </span>
                        @endforeach
                    </div>
                    
                    <div class="flex justify-between mb-6">
                        <div>
                            <p class="text-sm text-gray-500">{{ __('投稿者') }}</p>
                            <p class="font-medium">{{ $work->user->display_name }}</p>
                        </div>
                        
                        <div>
                            <p class="text-sm text-gray-500">{{ __('投稿日') }}</p>
                            <p class="font-medium">{{ $work->created_at->format('Y/m/d') }}</p>
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                        <div>
                            <p class="text-sm text-gray-500 mb-1">{{ __('難易度') }}</p>
                            <div class="flex items-center">
                                @for($i = 1; $i <= 5; $i++)
                                    @if($i <= $work->difficulty_rating)
                                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                    @else
                                        <svg class="w-5 h-5 text-gray-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                    @endif
                                @endfor
                            </div>
                        </div>
                        
                        <div>
                            <p class="text-sm text-gray-500 mb-1">{{ __('影響度') }}</p>
                            <div class="flex items-center">
                                @for($i = 1; $i <= 5; $i++)
                                    @if($i <= $work->impact_rating)
                                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                    @else
                                        <svg class="w-5 h-5 text-gray-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                    @endif
                                @endfor
                            </div>
                        </div>
                        
                        <div>
                            <p class="text-sm text-gray-500 mb-1">{{ __('進捗') }}</p>
                            <div class="flex items-center">
                                @for($i = 1; $i <= 5; $i++)
                                    @if($i <= $work->progress_rating)
                                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                    @else
                                        <svg class="w-5 h-5 text-gray-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                    @endif
                                @endfor
                            </div>
                        </div>
                    </div>
                    
                    <div class="mb-6">
                        <h3 class="text-lg font-semibold mb-2">{{ __('課題・背景') }}</h3>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            {!! nl2br(e($work->background)) !!}
                        </div>
                    </div>
                    
                    <div class="mb-6">
                        <h3 class="text-lg font-semibold mb-2">{{ __('活躍') }}</h3>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            {!! nl2br(e($work->achievement)) !!}
                        </div>
                    </div>
                    
                    <div class="mb-6">
                        <h3 class="text-lg font-semibold mb-2">{{ __('ここが良くなった！') }}</h3>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            {!! nl2br(e($work->improvements)) !!}
                        </div>
                    </div>
                    
                    @if($work->related_videos)
                        <div class="mb-6">
                            <h3 class="text-lg font-semibold mb-2">{{ __('関連動画') }}</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                                @foreach(explode("\n", $work->related_videos) as $videoUrl)
                                    @if(trim($videoUrl))
                                        @php
                                            $videoId = '';
                                            if (preg_match('/(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/\s]{11})/', $videoUrl, $match)) {
                                                $videoId = $match[1];
                                            }
                                        @endphp
                                        
                                        @if($videoId)
                                            <div class="relative">
                                                <div class="aspect-w-16 aspect-h-9">
                                                    <img src="https://img.youtube.com/vi/{{ $videoId }}/0.jpg" alt="YouTube Thumbnail" class="w-full h-auto rounded-lg">
                                                </div>
                                                <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
                                                    <a href="{{ $videoUrl }}" target="_blank" class="pointer-events-auto">
                                                        <svg class="w-16 h-16 text-red-600" fill="currentColor" viewBox="0 0 24 24">
                                                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 14.5v-9l6 4.5-6 4.5z" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        @endif
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    @endif
                    
                    @if($work->faq)
                        <div class="mb-6">
                            <h3 class="text-lg font-semibold mb-2">{{ __('FAQ（よくある質問）') }}</h3>
                            <div class="bg-gray-50 p-4 rounded-lg">
                                {!! nl2br(e($work->faq)) !!}
                            </div>
                        </div>
                    @endif
                    
                    @if($work->related_links)
                        <div class="mb-6">
                            <h3 class="text-lg font-semibold mb-2">{{ __('関連リンク') }}</h3>
                            <div class="space-y-2">
                                @foreach(explode("\n", $work->related_links) as $linkLine)
                                    @if(trim($linkLine))
                                        @php
                                            $parts = explode(' ', trim($linkLine), 2);
                                            $url = $parts[0];
                                            $title = isset($parts[1]) ? $parts[1] : $url;
                                        @endphp
                                        <div class="bg-gray-50 p-3 rounded-lg">
                                            <a href="{{ $url }}" target="_blank" class="text-blue-600 hover:text-blue-800 underline break-all">
                                                {{ $title }}
                                            </a>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>
            </div>
            
            <!-- Evaluations -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-lg font-semibold">{{ __('実績評価') }}</h3>
                        @auth
                            <a href="{{ route('work-evaluations.create', ['work_id' => $work->id]) }}" class="px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700">
                                {{ __('評価を投稿する') }}
                            </a>
                        @else
                            <a href="{{ route('login') }}" class="px-4 py-2 bg-gray-600 text-white rounded-md hover:bg-gray-700">
                                {{ __('ログインして評価する') }}
                            </a>
                        @endauth
                    </div>
                    
                    @if($evaluations->isEmpty())
                        <p class="text-gray-500">{{ __('まだ評価がありません。最初の評価を投稿しましょう！') }}</p>
                    @else
                        <div class="space-y-6">
                            @foreach($evaluations as $evaluation)
                                @if($evaluation->is_visible || Auth::user() && (Auth::user()->isAdmin() || Auth::user()->isStaff()))
                                    <div class="border rounded-lg p-4 {{ !$evaluation->is_visible ? 'bg-red-50' : '' }}">
                                        <div class="flex justify-between items-start">
                                            <div>
                                                <p class="font-medium">{{ $evaluation->user->display_name }}</p>
                                                <p class="text-sm text-gray-500">{{ $evaluation->created_at->format('Y/m/d H:i') }}</p>
                                            </div>
                                            
                                            <div class="flex space-x-2">
                                                <div class="text-center">
                                                    <p class="text-xs text-gray-500">{{ __('関心度') }}</p>
                                                    <p class="font-medium">{{ $evaluation->interest_level->label() }}</p>
                                                </div>
                                                
                                                <div class="text-center">
                                                    <p class="text-xs text-gray-500">{{ __('評価') }}</p>
                                                    <p class="font-medium">{{ $evaluation->evaluation_rating->label() }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="mt-3 flex flex-wrap gap-2">
                                            @if($evaluation->helped)
                                                <span class="px-2 py-1 bg-blue-100 text-blue-800 rounded-full text-xs">助かりました〜</span>
                                            @endif
                                            @if($evaluation->grateful)
                                                <span class="px-2 py-1 bg-purple-100 text-purple-800 rounded-full text-xs">圧倒的感謝</span>
                                            @endif
                                            @if($evaluation->amazing)
                                                <span class="px-2 py-1 bg-yellow-100 text-yellow-800 rounded-full text-xs">すごすぎ！</span>
                                            @endif
                                            @if($evaluation->expectation)
                                                <span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs">期待してます</span>
                                            @endif
                                            @if($evaluation->kind)
                                                <span class="px-2 py-1 bg-pink-100 text-pink-800 rounded-full text-xs">優しい〜</span>
                                            @endif
                                            @if($evaluation->genius)
                                                <span class="px-2 py-1 bg-indigo-100 text-indigo-800 rounded-full text-xs">天才！？</span>
                                            @endif
                                            @if($evaluation->encouragement)
                                                <span class="px-2 py-1 bg-orange-100 text-orange-800 rounded-full text-xs">頑張れ！</span>
                                            @endif
                                            @if($evaluation->perfect_score)
                                                <span class="px-2 py-1 bg-red-100 text-red-800 rounded-full text-xs">100点満点！</span>
                                            @endif
                                            @if($evaluation->excellent)
                                                <span class="px-2 py-1 bg-teal-100 text-teal-800 rounded-full text-xs">最高です</span>
                                            @endif
                                            @if($evaluation->good_work)
                                                <span class="px-2 py-1 bg-gray-100 text-gray-800 rounded-full text-xs">お疲れ様でした</span>
                                            @endif
                                        </div>
                                        
                                        @if($evaluation->comment)
                                            <div class="mt-3 bg-gray-50 p-3 rounded">
                                                {!! nl2br(e($evaluation->comment)) !!}
                                            </div>
                                        @endif
                                        
                                        <div class="mt-3 flex justify-between items-center">
                                            <div>
                                                @if(Auth::user() && Auth::id() == $evaluation->user_id)
                                                    <a href="{{ route('work-evaluations.edit', $evaluation->id) }}" class="text-sm text-blue-600 hover:text-blue-800 mr-3">
                                                        {{ __('編集') }}
                                                    </a>
                                                    <form method="POST" action="{{ route('work-evaluations.destroy', $evaluation->id) }}" class="inline" onsubmit="return confirm('この評価を削除してもよろしいですか？');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="text-sm text-red-600 hover:text-red-800">
                                                            {{ __('削除') }}
                                                        </button>
                                                    </form>
                                                @endif
                                            </div>
                                            
                                            @if(Auth::user() && (Auth::user()->isAdmin() || Auth::user()->isStaff()))
                                                <form method="POST" action="{{ route('work-evaluations.toggle-visibility', $evaluation->id) }}">
                                                    @csrf
                                                    @method('PATCH')
                                                    <button type="submit" class="text-sm {{ $evaluation->is_visible ? 'text-red-600 hover:text-red-800' : 'text-green-600 hover:text-green-800' }}">
                                                        {{ $evaluation->is_visible ? __('非表示にする') : __('表示する') }}
                                                    </button>
                                                </form>
                                            @endif
                                            
                                            @if(Auth::user() && Auth::id() == $evaluation->user_id)
                                                <a href="https://twitter.com/intent/tweet?text={{ urlencode('「' . $work->title . '」を評価しました！ #実績評価') }}&url={{ urlencode(route('works.show', $work->id)) }}" target="_blank" class="text-sm text-blue-500 hover:text-blue-700">
                                                    <svg class="inline-block w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                        <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"></path>
                                                    </svg>
                                                    {{ __('X.comに投稿する') }}
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    
    <script>
    function imageSlider() {
        return {
            currentSlide: 0,
            totalSlides: {{ $allImages->count() ?? 0 }},
            
            init() {
                if (this.totalSlides > 1) {
                    setInterval(() => {
                        this.nextSlide();
                    }, 5000);
                }
            },
            
            nextSlide() {
                this.currentSlide = (this.currentSlide + 1) % this.totalSlides;
            },
            
            previousSlide() {
                this.currentSlide = this.currentSlide === 0 ? this.totalSlides - 1 : this.currentSlide - 1;
            }
        }
    }
    </script>
</x-app-layout>
