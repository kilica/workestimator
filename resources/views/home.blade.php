<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Hero Section -->
            <div class="overflow-hidden shadow-sm sm:rounded-lg mb-8 relative" style="background-image: url('{{ asset('images/top-banner.png') }}'); background-size: contain; background-position: center; background-repeat: no-repeat; height: 250px;">
                <div class="absolute inset-0"></div>
                <div class="relative z-10 p-6 text-white flex items-center justify-center h-full">
                    <div class="text-center">
                    </div>
                </div>
            </div>

            <!-- 山田太郎議員の紹介 -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-8">
                <div class="p-6">
                    <div>
                        <img src="/images/worksmap.png" alt="実績マップ" height="500px" />
                    </div>
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
                                    <li><strong>生年月日:</strong> 1967年5月12日</li>
                                    <li><strong>学歴:</strong> 慶應義塾大学経済学部経済学科</li>
                                    <li><strong>職歴:</strong> ネクステック株式会社 代表取締役社長等</li>
                                    <li><strong>当選回数:</strong> 参議院議員2期目</li>
                                </ul>
                            </div>
                        </div>
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="mt-6">
                                <h3 class="text-lg font-semibold mb-3">基本政策</h3>
                                <ul class="list-disc list-inside text-gray-700 space-y-1">
                                    <li>表現の自由を守る</li>
                                    <li>こどもや障がい者に優しい社会</li>
                                    <li>若者の将来不安の解消</li>
                                    <li>デジタル社会の諸課題の解決</li>
                                    <li>経済成長をもたらす</li>
                                </ul>
                            </div>
                            <div class="mt-6">
                                <h3 class="text-lg font-semibold mb-3">主な役職履歴</h3>
                                <ul class="list-disc list-inside text-gray-700 space-y-1">
                                    <li>デジタル大臣政務官</li>
                                    <li>内閣府大臣政務官</li>
                                    <li>文部科学大臣政務官</li>
                                    <li>復興大臣政務官</li>
                                    <li>参議院 地方創生及びデジタル社会の形成等に関する特別委員会 委員長</li>
                                    <li>党 知的財産戦略調査会 事務局長</li>
                                    <li>党 デジタル社会推進本部 事務局長代理（防災DX担当役員）</li>
                                    <li>党 文化立国調査会 事務局長代理</li>
                                    <li>党 こどもの自殺対策PT 座長</li>
                                    <li>党 「こども・若者」輝く未来創造本部 幹事</li>
                                    <li>広報本部 ネットメディア局 局長代理</li>
                                </ul>
                            </div>
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
                                    <p class="text-sm text-blue-700">
                                        政党名を書いても山田太郎議員の票にはなりません。必ず、<strong>「山田太郎」と氏名</strong>  を書いてください。
                                    </p>
                                    <p class="text-sm text-blue-700">
                                        参議院選挙 <strong>全国比例代表</strong>での立候補なので、<strong>日本全国どこにお住いの方でも投票可能</strong>です。
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
                                    <li>投票券を持参してください（紛失しても投票可能です）</li>
                                    <li>比例代表の投票用紙に「山田太郎」と記入</li>
                                    <li>投票時間: 通常、午前7時〜午後8時</li>
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
                                <div class="mt-4">
                                    <h3 class="font-semibold mb-2">拡散のお願い</h3>
                                    <ul class="list-disc list-inside text-gray-700 space-y-1">
                                        <li>各実績ページの「この実績をXで紹介する」ボタンを使って拡散してね</li>
                                        <ul>
                                            <li><a href="https://taroyamada.jp/works">「表現の自由を守る」の実績</a></li>
                                            <li><a href="https://taroyamada.jp/works/?category=kind">「こどもや障がい者に優しい社会」の実績</a></li>
                                        </ul>
                                        <li><a href="https://taroyamada.jp/sns/">みんなの応援ツイート</a>を拡散しよう</li>
                                        <li>ハッシュタグ <code>#表現の自由は山田太郎</code> <code>#こども政策は山田太郎</code> <code>#デジタルは山田太郎</code> <code>#製造業は山田太郎</code> の使用</li>
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
                                        本サイトは山田太郎議員を応援する有志にて作られており、山田太郎議員御本人及び山田太郎事務所とは無関係です。
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
                        
                        <div class="grid md:grid-cols-2 lg:grid-cols-2 gap-6">
                            <!-- 公式サイト・SNS -->
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <h3 class="text-lg font-semibold mb-3 text-black-600">公式サイト・SNS</h3>
                                <ul class="space-y-2">
                                    <li><strong>HP :</strong> <a href="">山田太郎公式サイト</a></li>

                                    <li>
                                        <a href="https://taroyamada.jp/" class="text-blue-600 hover:text-blue-800 flex items-center">
                                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M4.083 9h1.946c.089-1.546.383-2.97.837-4.118A6.004 6.004 0 004.083 9zM10 2a8 8 0 100 16 8 8 0 000-16zm0 2c-.076 0-.232.032-.465.262-.238.234-.497.623-.737 1.182-.389.907-.673 2.142-.766 3.556h3.936c-.093-1.414-.377-2.649-.766-3.556-.24-.56-.5-.948-.737-1.182C10.232 4.032 10.076 4 10 4zm3.971 5c-.089-1.546-.383-2.97-.837-4.118A6.004 6.004 0 0115.917 9h-1.946zm-2.003 2H8.032c.093 1.414.377 2.649.766 3.556.24.56.5.948.737 1.182.233.23.389.262.465.262.076 0 .232-.032.465-.262.238-.234.498-.623.737-1.182.389-.907.673-2.142.766-3.556zm1.166 4.118c.454-1.147.748-2.572.837-4.118h1.946a6.004 6.004 0 01-2.783 4.118zm-6.268 0C6.412 13.97 6.118 12.546 6.03 11H4.083a6.004 6.004 0 002.783 4.118z" clip-rule="evenodd"/>
                                            </svg>
                                            公式ウェブサイト
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://x.com/yamadataro43" class="text-blue-600 hover:text-blue-800 flex items-center">
                                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84"/>
                                            </svg>
                                            X（メイン）
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://x.com/yamadataro43" class="text-blue-600 hover:text-blue-800 flex items-center">
                                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84"/>
                                            </svg>
                                            X（こども政策）
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.facebook.com/yamadataro43/" class="text-blue-600 hover:text-blue-800 flex items-center">
                                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M20 10c0-5.523-4.477-10-10-10S0 4.477 0 10c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V10h2.54V7.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V10h2.773l-.443 2.89h-2.33v6.988C16.343 19.128 20 14.991 20 10z" clip-rule="evenodd"/>
                                            </svg>
                                            Facebook
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/yamada_taro43/" class="text-blue-600 hover:text-blue-800 flex items-center">
                                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"/>
                                            </svg>
                                            Instagram
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.youtube.com/user/youryamadataro" class="text-blue-600 hover:text-blue-800 flex items-center">
                                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M2 6a2 2 0 012-2h6a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z"/>
                                            </svg>
                                            YouTube
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <!-- 関連団体・支援組織 -->
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <h3 class="text-lg font-semibold mb-3 text-black-600">支援者サイト・SNS</h3>
                                <ul class="space-y-2">
                                    <li>
                                        <a href="https://x.com/ymdtrsp" class="text-blue-600 hover:text-blue-800 flex items-center">
                                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z"/>
                                            </svg>
                                            山田太郎サポーターズ Xアカウント
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://line.me/ti/g2/KXGzqfnirAf1alWCEE4oZKAY_2pSj_idEJa3mg?utm_source=invitation&utm_medium=link_copy&utm_campaign=default" class="text-blue-600 hover:text-blue-800 flex items-center">
                                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"/>
                                            </svg>
                                            LINEで友人に広める（オープンチャット）
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.youtube.com/@yamadataro-supporters" class="text-blue-600 hover:text-blue-800 flex items-center">
                                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"/>
                                            </svg>
                                            山田太郎サポーターズ YouTube
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://note.com/nijimorikokoro/" class="text-blue-600 hover:text-blue-800 flex items-center">
                                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"/>
                                            </svg>
                                            山田太郎 YouTube文字起こし
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.youtube.com/@yamada-supportersNo.50" class="text-blue-600 hover:text-blue-800 flex items-center">
                                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"/>
                                            </svg>
                                            ゆっくり山田太郎
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="bg-gray-50 border-l-4 border-gray-400 p-4 mt-6">
                            <div class="flex">
                                <div class="ml-3">
                                    <p class="text-sm text-gray-700">
                                        <strong>本サイトについて:</strong>
                                        本サイトは山田太郎議員を応援する有志にて作られており、山田太郎議員御本人及び山田太郎事務所とは無関係です。
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
