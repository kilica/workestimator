<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('マイページ') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- User Profile -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="p-6 text-gray-900">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-lg font-semibold">{{ __('プロフィール情報') }}</h3>
                        <a href="{{ route('users.edit', Auth::id()) }}" class="px-4 py-2 bg-gray-800 text-white rounded-md hover:bg-gray-700">
                            {{ __('編集') }}
                        </a>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <p class="text-sm text-gray-600">{{ __('表示名') }}</p>
                            <p class="font-medium">{{ Auth::user()->display_name }}</p>
                        </div>
                        
                        <div>
                            <p class="text-sm text-gray-600">{{ __('メールアドレス') }}</p>
                            <p class="font-medium">{{ Auth::user()->email }}</p>
                        </div>
                        
                        <div>
                            <p class="text-sm text-gray-600">{{ __('Twitter名') }}</p>
                            <p class="font-medium">{{ Auth::user()->twitter_name ?? '未設定' }}</p>
                        </div>
                        
                        <div>
                            <p class="text-sm text-gray-600">{{ __('権限') }}</p>
                            <p class="font-medium">
                                @if(Auth::user()->isAdmin())
                                    {{ __('管理者') }}
                                @elseif(Auth::user()->isStaff())
                                    {{ __('スタッフ') }}
                                @else
                                    {{ __('一般') }}
                                @endif
                            </p>
                        </div>
                    </div>
                    
                    @if(Auth::user()->bio)
                        <div class="mt-4">
                            <p class="text-sm text-gray-600">{{ __('自己紹介') }}</p>
                            <p class="font-medium">{{ Auth::user()->bio }}</p>
                        </div>
                    @endif
                    
                    <div class="mt-6 pt-4 border-t border-gray-200">
                        <form method="POST" action="{{ route('users.destroy', Auth::id()) }}" onsubmit="return confirm('アカウントを削除してもよろしいですか？この操作は取り消せません。');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700">
                                {{ __('アカウントを削除する') }}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            
            <!-- User's Evaluations -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-semibold mb-4">{{ __('あなたの評価一覧') }}</h3>
                    
                    @if($evaluations->isEmpty())
                        <p class="text-gray-500">{{ __('まだ評価を投稿していません。') }}</p>
                    @else
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            {{ __('実績') }}
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            {{ __('関心度') }}
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            {{ __('評価') }}
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            {{ __('コメント') }}
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            {{ __('操作') }}
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach($evaluations as $evaluation)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <a href="{{ route('works.show', $evaluation->work_id) }}" class="text-blue-600 hover:text-blue-900">
                                                    {{ $evaluation->work->title }}
                                                </a>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                {{ $evaluation->interest_level }}/3
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                {{ $evaluation->evaluation_rating }}/3
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ Str::limit($evaluation->comment, 50) }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                <a href="{{ route('work-evaluations.edit', $evaluation->id) }}" class="text-indigo-600 hover:text-indigo-900 mr-3">
                                                    {{ __('編集') }}
                                                </a>
                                                <form method="POST" action="{{ route('work-evaluations.destroy', $evaluation->id) }}" class="inline" onsubmit="return confirm('この評価を削除してもよろしいですか？');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="text-red-600 hover:text-red-900">
                                                        {{ __('削除') }}
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
