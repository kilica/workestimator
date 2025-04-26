<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('実績評価編集') }}
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

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="p-6">
                    <h3 class="text-lg font-semibold mb-4">{{ __('評価対象実績') }}</h3>
                    <div class="flex items-center">
                        @if($evaluation->work->cover_image)
                            <img src="{{ asset('storage/' . $evaluation->work->cover_image) }}" alt="{{ $evaluation->work->title }}" class="w-24 h-24 object-cover rounded mr-4">
                        @else
                            <div class="w-24 h-24 bg-gray-200 flex items-center justify-center rounded mr-4">
                                <span class="text-gray-500">{{ __('画像なし') }}</span>
                            </div>
                        @endif
                        <div>
                            <h4 class="text-xl font-bold">{{ $evaluation->work->title }}</h4>
                            <p class="text-gray-600">{{ $evaluation->work->category->name }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-semibold mb-4">{{ __('評価を編集する') }}</h3>
                    
                    <form method="POST" action="{{ route('work-evaluations.update', $evaluation->id) }}">
                        @csrf
                        @method('PATCH')
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Interest Level -->
                            <div>
                                <x-input-label for="interest_level" :value="__('関心度（3段階）')" />
                                <select id="interest_level" name="interest_level" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full" required>
                                    @for($i = 1; $i <= 3; $i++)
                                        <option value="{{ $i }}" {{ old('interest_level', $evaluation->interest_level) == $i ? 'selected' : '' }}>
                                            {{ $i }}
                                        </option>
                                    @endfor
                                </select>
                                <x-input-error :messages="$errors->get('interest_level')" class="mt-2" />
                            </div>
                            
                            <!-- Evaluation Rating -->
                            <div>
                                <x-input-label for="evaluation_rating" :value="__('評価（3段階）')" />
                                <select id="evaluation_rating" name="evaluation_rating" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full" required>
                                    @for($i = 1; $i <= 3; $i++)
                                        <option value="{{ $i }}" {{ old('evaluation_rating', $evaluation->evaluation_rating) == $i ? 'selected' : '' }}>
                                            {{ $i }}
                                        </option>
                                    @endfor
                                </select>
                                <x-input-error :messages="$errors->get('evaluation_rating')" class="mt-2" />
                            </div>
                        </div>
                        
                        <!-- Evaluation Checkboxes -->
                        <div class="mt-6">
                            <x-input-label :value="__('実績評価（最低1つ選択必須）')" />
                            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4 mt-2">
                                <div class="flex items-center">
                                    <input id="helped" type="checkbox" name="helped" value="1" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" {{ old('helped', $evaluation->helped) ? 'checked' : '' }}>
                                    <label for="helped" class="ml-2 text-sm text-gray-600">{{ __('助かりました〜') }}</label>
                                </div>
                                
                                <div class="flex items-center">
                                    <input id="grateful" type="checkbox" name="grateful" value="1" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" {{ old('grateful', $evaluation->grateful) ? 'checked' : '' }}>
                                    <label for="grateful" class="ml-2 text-sm text-gray-600">{{ __('圧倒的感謝') }}</label>
                                </div>
                                
                                <div class="flex items-center">
                                    <input id="amazing" type="checkbox" name="amazing" value="1" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" {{ old('amazing', $evaluation->amazing) ? 'checked' : '' }}>
                                    <label for="amazing" class="ml-2 text-sm text-gray-600">{{ __('すごすぎ！') }}</label>
                                </div>
                                
                                <div class="flex items-center">
                                    <input id="expectation" type="checkbox" name="expectation" value="1" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" {{ old('expectation', $evaluation->expectation) ? 'checked' : '' }}>
                                    <label for="expectation" class="ml-2 text-sm text-gray-600">{{ __('期待してます') }}</label>
                                </div>
                                
                                <div class="flex items-center">
                                    <input id="kind" type="checkbox" name="kind" value="1" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" {{ old('kind', $evaluation->kind) ? 'checked' : '' }}>
                                    <label for="kind" class="ml-2 text-sm text-gray-600">{{ __('優しい〜') }}</label>
                                </div>
                                
                                <div class="flex items-center">
                                    <input id="genius" type="checkbox" name="genius" value="1" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" {{ old('genius', $evaluation->genius) ? 'checked' : '' }}>
                                    <label for="genius" class="ml-2 text-sm text-gray-600">{{ __('天才！？') }}</label>
                                </div>
                                
                                <div class="flex items-center">
                                    <input id="encouragement" type="checkbox" name="encouragement" value="1" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" {{ old('encouragement', $evaluation->encouragement) ? 'checked' : '' }}>
                                    <label for="encouragement" class="ml-2 text-sm text-gray-600">{{ __('頑張れ！') }}</label>
                                </div>
                                
                                <div class="flex items-center">
                                    <input id="perfect_score" type="checkbox" name="perfect_score" value="1" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" {{ old('perfect_score', $evaluation->perfect_score) ? 'checked' : '' }}>
                                    <label for="perfect_score" class="ml-2 text-sm text-gray-600">{{ __('100点満点！') }}</label>
                                </div>
                                
                                <div class="flex items-center">
                                    <input id="excellent" type="checkbox" name="excellent" value="1" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" {{ old('excellent', $evaluation->excellent) ? 'checked' : '' }}>
                                    <label for="excellent" class="ml-2 text-sm text-gray-600">{{ __('最高です') }}</label>
                                </div>
                                
                                <div class="flex items-center">
                                    <input id="good_work" type="checkbox" name="good_work" value="1" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" {{ old('good_work', $evaluation->good_work) ? 'checked' : '' }}>
                                    <label for="good_work" class="ml-2 text-sm text-gray-600">{{ __('お疲れ様でした') }}</label>
                                </div>
                            </div>
                            <x-input-error :messages="$errors->get('evaluation')" class="mt-2" />
                        </div>
                        
                        <!-- Comment -->
                        <div class="mt-6">
                            <x-input-label for="comment" :value="__('応援コメント')" />
                            <textarea id="comment" name="comment" rows="4" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full">{{ old('comment', $evaluation->comment) }}</textarea>
                            <x-input-error :messages="$errors->get('comment')" class="mt-2" />
                        </div>
                        
                        <div class="flex items-center justify-end mt-6">
                            <a href="{{ route('works.show', $evaluation->work_id) }}" class="inline-flex items-center px-4 py-2 bg-gray-300 border border-transparent rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest hover:bg-gray-400 focus:bg-gray-400 active:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 mr-3">
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
