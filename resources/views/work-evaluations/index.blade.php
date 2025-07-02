<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('みんなの評価') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if($evaluations->count() > 0)
                        <div class="space-y-6">
                            @foreach($evaluations as $evaluation)
                                <div class="border border-gray-200 rounded-lg p-6 bg-gray-50">
                                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                                        <!-- 基本情報 -->
                                        <div>
                                            <h3 class="text-lg font-semibold mb-2">
                                                <a href="{{ route('works.show', $evaluation->work_id) }}" class="text-blue-600 hover:text-blue-900 hover:underline">
                                                    {{ $evaluation->work->title }}
                                                </a>
                                            </h3>
                                            <div class="text-sm text-gray-600 mb-4">
                                                <p><strong>評価者:</strong> {{ $evaluation->user->display_name }}</p>
                                                <p><strong>投稿日時:</strong> {{ $evaluation->created_at->format('Y年m月d日 H:i') }}</p>
                                            </div>
                                            
                                            <!-- 関心度と評価 -->
                                            <div class="grid grid-cols-2 gap-4 mb-4">
                                                <div>
                                                    <span class="text-sm font-medium text-gray-700">関心度:</span>
                                                    <div class="flex items-center mt-1">
                                                        @for($i = 1; $i <= 3; $i++)
                                                            @if($i <= $evaluation->interest_level->value)
                                                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                                                </svg>
                                                            @else
                                                                <svg class="w-4 h-4 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                                                </svg>
                                                            @endif
                                                        @endfor
                                                        <span class="ml-2 text-sm text-gray-600">{{ $evaluation->interest_level->label() }}</span>
                                                    </div>
                                                </div>
                                                
                                                <div>
                                                    <span class="text-sm font-medium text-gray-700">評価:</span>
                                                    <div class="flex items-center mt-1">
                                                        @for($i = 1; $i <= 3; $i++)
                                                            @if($i <= $evaluation->evaluation_rating->value)
                                                                <svg class="w-4 h-4 text-blue-400" fill="currentColor" viewBox="0 0 20 20">
                                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                                                </svg>
                                                            @else
                                                                <svg class="w-4 h-4 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                                                </svg>
                                                            @endif
                                                        @endfor
                                                        <span class="ml-2 text-sm text-gray-600">{{ $evaluation->evaluation_rating->label() }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- 感情タグ -->
                                        <div>
                                            <h4 class="text-sm font-medium text-gray-700 mb-2">評価タグ</h4>
                                            <div class="flex flex-wrap gap-2">
                                                @if($evaluation->helped)
                                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                                        助かりました〜
                                                    </span>
                                                @endif
                                                @if($evaluation->grateful)
                                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-pink-100 text-pink-800">
                                                        圧倒的感謝
                                                    </span>
                                                @endif
                                                @if($evaluation->amazing)
                                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-purple-100 text-purple-800">
                                                        すごすぎ！
                                                    </span>
                                                @endif
                                                @if($evaluation->expectation)
                                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                                        期待してます
                                                    </span>
                                                @endif
                                                @if($evaluation->kind)
                                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                                        優しい〜
                                                    </span>
                                                @endif
                                                @if($evaluation->genius)
                                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-indigo-100 text-indigo-800">
                                                        天才！？
                                                    </span>
                                                @endif
                                                @if($evaluation->encouragement)
                                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-orange-100 text-orange-800">
                                                        頑張れ！
                                                    </span>
                                                @endif
                                                @if($evaluation->perfect_score)
                                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                                        100点満点！
                                                    </span>
                                                @endif
                                                @if($evaluation->excellent)
                                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-teal-100 text-teal-800">
                                                        最高です
                                                    </span>
                                                @endif
                                                @if($evaluation->good_work)
                                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-cyan-100 text-cyan-800">
                                                        お疲れ様でした
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <!-- 応援コメント -->
                                    @if($evaluation->comment)
                                        <div class="mt-4 pt-4 border-t border-gray-200">
                                            <h4 class="text-sm font-medium text-gray-700 mb-2">応援コメント</h4>
                                            <div x-data="{ expanded: false }" class="text-sm text-gray-600">
                                                @php
                                                    $lines = explode("\n", $evaluation->comment);
                                                    $firstLine = $lines[0] ?? '';
                                                    $hasMoreLines = count($lines) > 1;
                                                @endphp
                                                
                                                <div x-show="!expanded">
                                                    <p>{{ $firstLine }}</p>
                                                    @if($hasMoreLines)
                                                        <button @click="expanded = true" class="mt-1 text-blue-600 hover:text-blue-800 text-xs font-medium">
                                                            [+] 続きを表示
                                                        </button>
                                                    @endif
                                                </div>
                                                
                                                <div x-show="expanded" x-cloak>
                                                    <div class="whitespace-pre-line">{{ $evaluation->comment }}</div>
                                                    @if($hasMoreLines)
                                                        <button @click="expanded = false" class="mt-1 text-blue-600 hover:text-blue-800 text-xs font-medium">
                                                            [-] 折りたたむ
                                                        </button>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            @endforeach
                        </div>

                        <!-- ページネーション -->
                        <div class="mt-6">
                            {{ $evaluations->links() }}
                        </div>
                    @else
                        <div class="text-center py-12">
                            <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                            <h3 class="mt-2 text-sm font-medium text-gray-900">実績評価がありません</h3>
                            <p class="mt-1 text-sm text-gray-500">まだ実績評価が投稿されていません。</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
