<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('山田太郎議員') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Hero Section -->
            <div class="overflow-hidden shadow-sm sm:rounded-lg mb-8 relative" style="background-image: url('{{ asset('images/top-banner.png') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; min-height: 400px;">
                <div class="absolute inset-0 bg-black bg-opacity-40"></div>
                <div class="relative z-10 p-6 text-white flex items-center justify-center min-h-[400px]">
                    <div class="text-center mb-8">
                        <h1 class="text-5xl font-bold text-white mb-4 drop-shadow-lg">山田太郎議員 応援サイト</h1>
                        <p class="text-2xl text-white drop-shadow-md">国民の声を国政へ</p>
                    </div>
                </div>
            </div>

            <!-- 山田太郎議員の紹介 -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-8">
                <div class="p-6">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">山田太郎議員の紹介</h2>
                    <div class="prose max-w-none">
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <div class="bg-gray-200 h-64 rounded-lg flex items-center justify-center mb-4">
                                    <span class="text-gray-500">議員写真</span>
                                </div>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold mb-3">プロフィール</h3>
                                <ul class="space-y-2 text-gray-700">
                                    <li><strong>生年月日:</strong> 1975年4月15日</li>
                                    <li><strong>出身地:</strong> 東京都</li>
                                    <li><strong>学歴:</strong> 東京大学法学部卒業</li>
                                    <li><strong>職歴:</strong> 弁護士、NPO法人代表</li>
                                    <li><strong>当選回数:</strong> 参議院議員2期目</li>
                                </ul>
                            </div>
                        </div>
                        <div class="mt-6">
                            <h3 class="text-lg font-semibold mb-3">政治理念</h3>
                            <p class="text-gray-700 mb-4">
                                「すべての国民が安心して暮らせる社会の実現」を目指し、教育、福祉、経済政策に取り組んでいます。
                                特に子育て支援、高齢者福祉、中小企業支援に力を入れており、現場の声を大切にした政策立案を心がけています。
                            </p>
                            <h3 class="text-lg font-semibold mb-3">主な政策分野</h3>
                            <ul class="list-disc list-inside text-gray-700 space-y-1">
                                <li>子育て支援・教育政策</li>
                                <li>高齢者福祉・介護制度改革</li>
                                <li>中小企業支援・地域経済活性化</li>
                                <li>環境・エネルギー政策</li>
                                <li>デジタル化推進・IT政策</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 投票について -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-8">
                <div class="p-6">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">投票について</h2>
                    <div class="prose max-w-none">
                        <div class="bg-blue-50 border-l-4 border-blue-400 p-4 mb-6">
                            <div class="flex">
                                <div class="ml-3">
                                    <p class="text-sm text-blue-700">
                                        <strong>参議院選挙 全国比例代表</strong>で「山田太郎」とお書きください
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                        <h3 class="text-lg font-semibold mb-3">投票方法</h3>
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <h4 class="font-semibold mb-2">1. 投票所での投票</h4>
                                <ul class="list-disc list-inside text-gray-700 space-y-1 mb-4">
                                    <li>投票日当日に指定された投票所へ</li>
                                    <li>投票券を持参してください</li>
                                    <li>比例代表の投票用紙に「山田太郎」と記入</li>
                                    <li>投票時間: 午前7時〜午後8時</li>
                                </ul>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-2">2. 期日前投票</h4>
                                <ul class="list-disc list-inside text-gray-700 space-y-1 mb-4">
                                    <li>投票日前でも投票可能</li>
                                    <li>市区町村の選挙管理委員会で実施</li>
                                    <li>身分証明書をお持ちください</li>
                                    <li>期間: 公示日翌日〜投票日前日</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 mt-6">
                            <div class="flex">
                                <div class="ml-3">
                                    <p class="text-sm text-yellow-700">
                                        <strong>重要:</strong> 参議院選挙では「選挙区」と「比例代表」の2票があります。
                                        比例代表の投票用紙に「山田太郎」とお書きください。
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 応援方法 -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-8">
                <div class="p-6">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">応援方法</h2>
                    <div class="prose max-w-none">
                        <p class="text-gray-700 mb-6">
                            山田太郎議員の活動を応援していただく方法をご紹介します。
                            皆様のご支援が政治活動の大きな力となります。
                        </p>
                        
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <h3 class="text-lg font-semibold mb-3 flex items-center">
                                    <svg class="w-5 h-5 mr-2 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M18 13V5a2 2 0 00-2-2H4a2 2 0 00-2 2v8a2 2 0 002 2h3l3 3 3-3h3a2 2 0 002-2zM5 7a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1zm1 3a1 1 0 100 2h3a1 1 0 100-2H6z"/>
                                    </svg>
                                    SNSでの応援
                                </h3>
                                <ul class="list-disc list-inside text-gray-700 space-y-2">
                                    <li><strong>X（旧Twitter）:</strong> @yamada_taro_official をフォロー</li>
                                    <li><strong>Facebook:</strong> 山田太郎議員公式ページにいいね</li>
                                    <li><strong>Instagram:</strong> @yamada.taro.official をフォロー</li>
                                    <li><strong>YouTube:</strong> 山田太郎チャンネルを登録</li>
                                </ul>
                                <div class="mt-4">
                                    <h4 class="font-semibold mb-2">拡散のお願い</h4>
                                    <ul class="list-disc list-inside text-gray-700 space-y-1">
                                        <li>政策や活動報告のシェア・リツイート</li>
                                        <li>ハッシュタグ #山田太郎 #国政 の使用</li>
                                        <li>友人・知人への情報共有</li>
                                    </ul>
                                </div>
                            </div>
                            
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <h3 class="text-lg font-semibold mb-3 flex items-center">
                                    <svg class="w-5 h-5 mr-2 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"/>
                                    </svg>
                                    街宣活動・イベント参加
                                </h3>
                                <ul class="list-disc list-inside text-gray-700 space-y-2">
                                    <li><strong>街頭演説:</strong> 駅前・商店街での演説に参加</li>
                                    <li><strong>政策説明会:</strong> 地域での勉強会・座談会</li>
                                    <li><strong>ボランティア:</strong> チラシ配布・会場設営のお手伝い</li>
                                    <li><strong>個人演説会:</strong> 支援者向けイベントへの参加</li>
                                </ul>
                                <div class="mt-4">
                                    <h4 class="font-semibold mb-2">参加方法</h4>
                                    <ul class="list-disc list-inside text-gray-700 space-y-1">
                                        <li>事務所への電話・メールでお申し込み</li>
                                        <li>公式サイトのイベント情報をチェック</li>
                                        <li>SNSでの最新情報をフォロー</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="bg-blue-50 border-l-4 border-blue-400 p-4 mt-6">
                            <div class="flex">
                                <div class="ml-3">
                                    <p class="text-sm text-blue-700">
                                        <strong>お問い合わせ:</strong> 応援活動についてのご質問は、
                                        事務所（TEL: 03-1234-5678）またはメール（info@yamada-taro.jp）までお気軽にどうぞ。
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- リンク集 -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-8">
                <div class="p-6">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">リンク集</h2>
                    <div class="prose max-w-none">
                        <p class="text-gray-700 mb-6">
                            山田太郎議員に関連するアカウントやサイトをご紹介します。
                            最新の活動情報や政策詳細をご確認いただけます。
                        </p>
                        
                        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                            <!-- 公式サイト・SNS -->
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <h3 class="text-lg font-semibold mb-3 text-blue-600">公式サイト・SNS</h3>
                                <ul class="space-y-2">
                                    <li>
                                        <a href="#" class="text-blue-600 hover:text-blue-800 flex items-center">
                                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M4.083 9h1.946c.089-1.546.383-2.97.837-4.118A6.004 6.004 0 004.083 9zM10 2a8 8 0 100 16 8 8 0 000-16zm0 2c-.076 0-.232.032-.465.262-.238.234-.497.623-.737 1.182-.389.907-.673 2.142-.766 3.556h3.936c-.093-1.414-.377-2.649-.766-3.556-.24-.56-.5-.948-.737-1.182C10.232 4.032 10.076 4 10 4zm3.971 5c-.089-1.546-.383-2.97-.837-4.118A6.004 6.004 0 0115.917 9h-1.946zm-2.003 2H8.032c.093 1.414.377 2.649.766 3.556.24.56.5.948.737 1.182.233.23.389.262.465.262.076 0 .232-.032.465-.262.238-.234.498-.623.737-1.182.389-.907.673-2.142.766-3.556zm1.166 4.118c.454-1.147.748-2.572.837-4.118h1.946a6.004 6.004 0 01-2.783 4.118zm-6.268 0C6.412 13.97 6.118 12.546 6.03 11H4.083a6.004 6.004 0 002.783 4.118z" clip-rule="evenodd"/>
                                            </svg>
                                            公式ウェブサイト
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-blue-600 hover:text-blue-800 flex items-center">
                                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84"/>
                                            </svg>
                                            X（旧Twitter）
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-blue-600 hover:text-blue-800 flex items-center">
                                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M20 10c0-5.523-4.477-10-10-10S0 4.477 0 10c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V10h2.54V7.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V10h2.773l-.443 2.89h-2.33v6.988C16.343 19.128 20 14.991 20 10z" clip-rule="evenodd"/>
                                            </svg>
                                            Facebook
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-blue-600 hover:text-blue-800 flex items-center">
                                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"/>
                                            </svg>
                                            Instagram
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-blue-600 hover:text-blue-800 flex items-center">
                                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M2 6a2 2 0 012-2h6a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z"/>
                                            </svg>
                                            YouTube
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            
                            <!-- 政府・議会関連 -->
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <h3 class="text-lg font-semibold mb-3 text-green-600">政府・議会関連</h3>
                                <ul class="space-y-2">
                                    <li>
                                        <a href="#" class="text-blue-600 hover:text-blue-800 flex items-center">
                                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd"/>
                                                <path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z"/>
                                            </svg>
                                            参議院ホームページ
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-blue-600 hover:text-blue-800 flex items-center">
                                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                            </svg>
                                            国会会議録検索システム
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-blue-600 hover:text-blue-800 flex items-center">
                                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"/>
                                            </svg>
                                            議員立法・質問主意書
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-blue-600 hover:text-blue-800 flex items-center">
                                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"/>
                                            </svg>
                                            委員会活動記録
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            
                            <!-- 関連団体・支援組織 -->
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <h3 class="text-lg font-semibold mb-3 text-purple-600">関連団体・支援組織</h3>
                                <ul class="space-y-2">
                                    <li>
                                        <a href="#" class="text-blue-600 hover:text-blue-800 flex items-center">
                                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z"/>
                                            </svg>
                                            山田太郎後援会
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-blue-600 hover:text-blue-800 flex items-center">
                                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"/>
                                            </svg>
                                            市民の会
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-blue-600 hover:text-blue-800 flex items-center">
                                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"/>
                                            </svg>
                                            政策研究会
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-blue-600 hover:text-blue-800 flex items-center">
                                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"/>
                                            </svg>
                                            ボランティア団体
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="bg-gray-50 border-l-4 border-gray-400 p-4 mt-6">
                            <div class="flex">
                                <div class="ml-3">
                                    <p class="text-sm text-gray-700">
                                        <strong>お問い合わせ:</strong> 
                                        事務所 TEL: 03-1234-5678 | Email: info@yamada-taro.jp<br>
                                        〒100-0001 東京都千代田区千代田1-1-1 山田太郎事務所
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
