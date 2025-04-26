<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('ユーザー編集') }}
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
                    <h3 class="text-lg font-semibold mb-4">{{ __('ユーザー情報編集') }}</h3>
                    
                    <form method="POST" action="{{ route('users.update', $user->id) }}">
                        @csrf
                        @method('PATCH')
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Display Name -->
                            <div>
                                <x-input-label for="display_name" :value="__('表示名')" />
                                <x-text-input id="display_name" class="block mt-1 w-full" type="text" name="display_name" :value="old('display_name', $user->display_name)" required autofocus />
                                <x-input-error :messages="$errors->get('display_name')" class="mt-2" />
                            </div>
                            
                            <!-- Twitter Name -->
                            <div>
                                <x-input-label for="twitter_name" :value="__('Twitter名')" />
                                <x-text-input id="twitter_name" class="block mt-1 w-full" type="text" name="twitter_name" :value="old('twitter_name', $user->twitter_name)" />
                                <x-input-error :messages="$errors->get('twitter_name')" class="mt-2" />
                            </div>
                            
                            @if(Auth::user()->isAdmin())
                                <!-- Role -->
                                <div>
                                    <x-input-label for="role" :value="__('権限')" />
                                    <select id="role" name="role" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full">
                                        <option value="admin" {{ old('role', $user->role) === 'admin' ? 'selected' : '' }}>{{ __('管理者') }}</option>
                                        <option value="staff" {{ old('role', $user->role) === 'staff' ? 'selected' : '' }}>{{ __('スタッフ') }}</option>
                                        <option value="general" {{ old('role', $user->role) === 'general' ? 'selected' : '' }}>{{ __('一般') }}</option>
                                    </select>
                                    <x-input-error :messages="$errors->get('role')" class="mt-2" />
                                </div>
                                
                                <!-- Status -->
                                <div>
                                    <x-input-label for="status" :value="__('ステータス')" />
                                    <select id="status" name="status" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full">
                                        <option value="active" {{ old('status', $user->status) === 'active' ? 'selected' : '' }}>{{ __('有効') }}</option>
                                        <option value="inactive" {{ old('status', $user->status) === 'inactive' ? 'selected' : '' }}>{{ __('無効') }}</option>
                                        <option value="deleted" {{ old('status', $user->status) === 'deleted' ? 'selected' : '' }}>{{ __('削除') }}</option>
                                    </select>
                                    <x-input-error :messages="$errors->get('status')" class="mt-2" />
                                </div>
                            @endif
                        </div>
                        
                        <!-- Bio -->
                        <div class="mt-4">
                            <x-input-label for="bio" :value="__('自己紹介')" />
                            <textarea id="bio" name="bio" rows="4" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full">{{ old('bio', $user->bio) }}</textarea>
                            <x-input-error :messages="$errors->get('bio')" class="mt-2" />
                        </div>
                        
                        <div class="flex items-center justify-end mt-4">
                            <a href="{{ route('users.show', $user->id) }}" class="inline-flex items-center px-4 py-2 bg-gray-300 border border-transparent rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest hover:bg-gray-400 focus:bg-gray-400 active:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 mr-3">
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
