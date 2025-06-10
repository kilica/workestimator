<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('実績編集') }}
        </h2>
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

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-semibold mb-4">{{ __('実績情報編集') }}</h3>
                    
                    <form method="POST" action="{{ route('works.update', $work->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Title -->
                            <div class="col-span-2">
                                <x-input-label for="title" :value="__('タイトル')" />
                                <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title', $work->title)" required autofocus />
                                <x-input-error :messages="$errors->get('title')" class="mt-2" />
                            </div>
                            
                            <!-- Cover Image -->
                            <div class="col-span-2">
                                <x-input-label for="cover_image" :value="__('カバー画像')" />
                                @if($work->cover_image)
                                    <div class="mt-2 mb-4">
                                        <img src="{{ asset('storage/' . $work->cover_image) }}" alt="{{ $work->title }}" class="w-32 h-32 object-cover rounded">
                                    </div>
                                @endif
                                <input id="cover_image" type="file" name="cover_image" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" />
                                <x-input-error :messages="$errors->get('cover_image')" class="mt-2" />
                            </div>
                            
                            <!-- Category -->
                            <div>
                                <x-input-label for="category_id" :value="__('カテゴリ')" />
                                <select id="category_id" name="category_id" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full" required>
                                    <option value="">{{ __('カテゴリを選択') }}</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}" {{ old('category_id', $work->category_id) == $category->id ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                                <x-input-error :messages="$errors->get('category_id')" class="mt-2" />
                            </div>
                            
                            <!-- Tags -->
                            <div>
                                <x-input-label for="tags" :value="__('タグ（複数選択可）')" />
                                <div class="mt-1 border border-gray-300 rounded-md p-2 h-32 overflow-y-auto">
                                    @foreach($tags as $tag)
                                        <div class="flex items-center mb-2">
                                            <input id="tag_{{ $tag->id }}" type="checkbox" name="tags[]" value="{{ $tag->id }}" 
                                                class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                                {{ in_array($tag->id, old('tags', $work->tags->pluck('id')->toArray())) ? 'checked' : '' }}>
                                            <label for="tag_{{ $tag->id }}" class="ml-2 text-sm text-gray-600">{{ $tag->name }}</label>
                                        </div>
                                    @endforeach
                                </div>
                                <x-input-error :messages="$errors->get('tags')" class="mt-2" />
                            </div>
                            
                            <!-- Ratings -->
                            <div>
                                <x-input-label for="difficulty_rating" :value="__('難易度（5段階）')" />
                                <select id="difficulty_rating" name="difficulty_rating" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full" required>
                                    @for($i = 1; $i <= 5; $i++)
                                        <option value="{{ $i }}" {{ old('difficulty_rating', $work->difficulty_rating) == $i ? 'selected' : '' }}>
                                            {{ $i }}
                                        </option>
                                    @endfor
                                </select>
                                <x-input-error :messages="$errors->get('difficulty_rating')" class="mt-2" />
                            </div>
                            
                            <div>
                                <x-input-label for="impact_rating" :value="__('影響度（5段階）')" />
                                <select id="impact_rating" name="impact_rating" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full" required>
                                    @for($i = 1; $i <= 5; $i++)
                                        <option value="{{ $i }}" {{ old('impact_rating', $work->impact_rating) == $i ? 'selected' : '' }}>
                                            {{ $i }}
                                        </option>
                                    @endfor
                                </select>
                                <x-input-error :messages="$errors->get('impact_rating')" class="mt-2" />
                            </div>
                            
                            <div>
                                <x-input-label for="progress_rating" :value="__('進捗（5段階）')" />
                                <select id="progress_rating" name="progress_rating" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full" required>
                                    @for($i = 1; $i <= 5; $i++)
                                        <option value="{{ $i }}" {{ old('progress_rating', $work->progress_rating) == $i ? 'selected' : '' }}>
                                            {{ $i }}
                                        </option>
                                    @endfor
                                </select>
                                <x-input-error :messages="$errors->get('progress_rating')" class="mt-2" />
                            </div>
                        </div>
                        
                        <!-- Background -->
                        <div class="mt-4">
                            <x-input-label for="background" :value="__('課題・背景')" />
                            <textarea id="background" name="background" rows="4" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full">{{ old('background', $work->background) }}</textarea>
                            <x-input-error :messages="$errors->get('background')" class="mt-2" />
                        </div>
                        
                        <!-- Achievement -->
                        <div class="mt-4">
                            <x-input-label for="achievement" :value="__('活躍')" />
                            <textarea id="achievement" name="achievement" rows="4" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full">{{ old('achievement', $work->achievement) }}</textarea>
                            <x-input-error :messages="$errors->get('achievement')" class="mt-2" />
                        </div>
                        
                        <!-- Improvements -->
                        <div class="mt-4">
                            <x-input-label for="improvements" :value="__('ここが良くなった！')" />
                            <textarea id="improvements" name="improvements" rows="4" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full">{{ old('improvements', $work->improvements) }}</textarea>
                            <x-input-error :messages="$errors->get('improvements')" class="mt-2" />
                        </div>
                        
                        <!-- Related Videos -->
                        <div class="mt-4">
                            <x-input-label for="related_videos" :value="__('関連動画（YouTubeのURLを改行区切りで入力）')" />
                            <textarea id="related_videos" name="related_videos" rows="4" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full" placeholder="https://www.youtube.com/watch?v=XXXXXXXXXXX">{{ old('related_videos', $work->related_videos) }}</textarea>
                            <x-input-error :messages="$errors->get('related_videos')" class="mt-2" />
                        </div>
                        
                        <!-- Related Links -->
                        <div class="mt-4">
                            <x-input-label for="related_links" :value="__('関連リンク（URLを改行区切りで入力）')" />
                            <textarea id="related_links" name="related_links" rows="4" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full" placeholder="https://example.com">{{ old('related_links', $work->related_links) }}</textarea>
                            <x-input-error :messages="$errors->get('related_links')" class="mt-2" />
                        </div>
                        
                        <div class="flex items-center justify-end mt-4">
                            <a href="{{ route('works.show', $work->id) }}" class="inline-flex items-center px-4 py-2 bg-gray-300 border border-transparent rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest hover:bg-gray-400 focus:bg-gray-400 active:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 mr-3">
                                {{ __('キャンセル') }}
                            </a>
                            <x-primary-button>
                                {{ __('更新') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
