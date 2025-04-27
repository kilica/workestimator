<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('実績評価タグ管理') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="mb-6">
                        <p class="text-gray-600 mb-4">実績評価で使用されるタグの一覧です。これらのタグはユーザーが実績に対して評価を行う際に選択できるオプションとして表示されます。</p>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="min-w-full bg-white">
                            <thead>
                                <tr>
                                    <th class="py-3 px-4 border-b border-gray-200 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        キー
                                    </th>
                                    <th class="py-3 px-4 border-b border-gray-200 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        表示名
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($evaluationTags as $key => $value)
                                <tr>
                                    <td class="py-4 px-4 border-b border-gray-200">
                                        {{ $key }}
                                    </td>
                                    <td class="py-4 px-4 border-b border-gray-200">
                                        {{ $value }}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-6">
                        <p class="text-gray-600">
                            <strong>注意:</strong> これらのタグはデータベースのスキーマに直接関連付けられています。タグの追加や削除を行う場合は、データベースのマイグレーションとモデルの更新が必要です。
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
