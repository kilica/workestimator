<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('よくある質問（政策）') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    <!-- Toast notification for copy success -->
                    <div id="copyToast" class="fixed top-4 right-4 bg-green-500 text-white px-4 py-2 rounded-lg shadow-lg transform translate-x-full transition-transform duration-300 z-50">
                        URLをコピーしました！
                    </div>

                    <!-- Navigation between FAQ pages -->
                    <div class="mb-8 flex space-x-4">
                        <a href="{{ route('faq') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition-colors">
                            FAQ（選挙・党）
                        </a>
                        <span class="bg-gray-500 text-white px-4 py-2 rounded-lg">
                            FAQ（政策）
                        </span>
                    </div>
                    
                    <!-- 山田太郎議員について -->
                    <div class="mb-12">
                        <h3 class="text-2xl font-bold text-gray-800 mb-6 border-b-2 border-blue-500 pb-2">
                            山田太郎議員について
                        </h3>
                        
                        <div class="space-y-6">
                            <div id="howto-gather-votes" class="bg-gray-50 p-4 rounded-lg relative">
                                <button onclick="copyToClipboard('#howto-gather-votes')" class="absolute top-2 right-2 text-gray-500 hover:text-gray-700 transition-colors">
                                    <svg class="w-5 h-5 block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                    </svg>
                                </button>
                                <h4 class="font-semibold text-lg text-gray-800 mb-2">
                                    Q: 山田太郎議員は前回2019年の参議院選挙で、自民党比例代表候補代2位となる54万票の得票があったそうですが、なぜそんなに票を集めたのでしょうか？
                                </h4>
                                <p class="text-gray-700">A: </p>
                            </div>
                            
                            <div id="why-ldp" class="bg-gray-50 p-4 rounded-lg relative">
                                <button onclick="copyToClipboard('#why-ldp')" class="absolute top-2 right-2  text-gray-500 hover:text-gray-700 transition-colors">
                                    <svg class="w-5 h-5 block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                    </svg>
                                </button>
                                <h4 class="font-semibold text-lg text-gray-800 mb-2">Q: なぜ自民党から出ているのですか？　表現の自由にとって敵のような党ではないですか？</h4>
                                <p class="text-gray-700">A: 確かに山田太郎議員が自民党に入った時点では表現規制勢力の強い党でした。</p>
                                <p>しかし、自民党（与党）に入ることは、表現の自由を守るうえで非常に大きなメリットもあります。</p>
                                <p>まず与党の議員の場合、<strong>法案が審議される前に</strong>官僚から相談を受け、修正を指示したり調整することができるようになります。この段階では、修正は比較的容易ですが、多くの人の合意を受けたあと、審議に入る頃には修正するには合意の取り直しになるため修正に対し抵抗が生まれてしまいます。</p>
                                <p>また法案が審議される自民党の部会では<strong>全会一致が法案通過の原則なので、山田太郎議員一人が反対を貫けば法案を止めることができます</strong>。</p>
                                <p>もし山田太郎議員が野党だと、反対できるようになるのは国会です。国会では最終的に多数決なので、山田太郎議員一人がどれだけ反対したところで法案は成立してしまいます。</p>
                                <p>実際、山田太郎議員が自民党に入って以来、表現を規制する法案は国会に出なくなりました。</p>
                                <p>また、2025年参議院選挙の<strong>公約</strong>では「表現の自由」という言葉まで載るようになり、山田太郎議員の活動が自民党に大きな影響を及ぼすようになっています。</p>
                            </div>
                            
                            <div id="yamada-supporters" class="bg-gray-50 p-4 rounded-lg relative">
                                <button onclick="copyToClipboard('#yamada-supporters')" class="absolute top-2 right-2  text-gray-500 hover:text-gray-700 transition-colors">
                                    <svg class="w-5 h-5 block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                    </svg>
                                </button>
                                <h4 class="font-semibold text-lg text-gray-800 mb-2">Q: どんな人、団体が山田太郎議員を支持しているのですか？</h4>
                                <p class="text-gray-700">A: 一番コアな支持者は「表現の自由」を重視する漫画・アニメ・ゲームなどのコンテンツが好きな人たちです。</p>
                                <p>また、こども家庭庁を創設し、児童手当の所得制限撤廃や発達障害の支援拡充を実現したため、子育て世代の方にも支持が広まっています。</p>
                                <p>また、フリーランス新法で若者やフリーランスの方々からの支持を集めました。</p>
                                <p>国立国会図書館のデジタル化では、研究者の方から強い支持を受けています。</p>
                                <p>このように、表現の自由を中核に、幅広い支持を集めるようになっています。</p>
                            </div>
                        </div>
                    </div>

                    <!-- 政策について -->
                    <div class="mb-12">
                        <h3 class="text-2xl font-bold text-gray-800 mb-6 border-b-2 border-purple-500 pb-2">
                            政策について
                        </h3>
                        
                        <div class="space-y-6">
                            <div id="policy-focus-areas" class="bg-gray-50 p-4 rounded-lg relative">
                                <button onclick="copyToClipboard('#policy-focus-areas')" class="absolute top-2 right-2 text-gray-500 hover:text-gray-700 transition-colors">
                                    <svg class="w-5 h-5 block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                    </svg>
                                </button>
                                <h4 class="font-semibold text-lg text-gray-800 mb-2">Q: 山田太郎議員の重点政策分野は何ですか？</h4>
                                <p class="text-gray-700">A: 山田太郎議員は「表現の自由」を中核に、こども家庭庁の創設、児童手当の所得制限撤廃、発達障害の支援拡充、フリーランス新法など、幅広い政策分野で実績を残しています。</p>
                                <p>国立国会図書館のデジタル化では、研究者の方から強い支持を受けています。</p>
                                <p>このように、表現の自由を中核に、幅広い政策で国民生活の向上に取り組んでいます。</p>
                            </div>

                            <div id="childcare-support" class="bg-gray-50 p-4 rounded-lg relative">
                                <button onclick="copyToClipboard('#childcare-support')" class="absolute top-2 right-2 text-gray-500 hover:text-gray-700 transition-colors">
                                    <svg class="w-5 h-5 block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                    </svg>
                                </button>
                                <h4 class="font-semibold text-lg text-gray-800 mb-2">Q: 子育て支援についてどのような取り組みをしていますか？</h4>
                                <p class="text-gray-700">A: こども家庭庁を創設し、児童手当の所得制限撤廃や発達障害の支援拡充を実現しました。</p>
                                <p>例えば、こども庁、こども基本法では保守派の議員からの強い反対がありましたが、成立させています。</p>
                                <p>これらの取り組みにより、子育て世代の方々からの支持が広まっています。</p>
                            </div>

                            <div id="freelance-support" class="bg-gray-50 p-4 rounded-lg relative">
                                <button onclick="copyToClipboard('#freelance-support')" class="absolute top-2 right-2 text-gray-500 hover:text-gray-700 transition-colors">
                                    <svg class="w-5 h-5 block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                    </svg>
                                </button>
                                <h4 class="font-semibold text-lg text-gray-800 mb-2">Q: フリーランス支援についてはどうですか？</h4>
                                <p class="text-gray-700">A: フリーランス新法を成立させ、若者やフリーランスの方々からの支持を集めました。</p>
                                <p>働き方の多様化に対応した法整備を進め、フリーランスの方々の労働環境改善に取り組んでいます。</p>
                            </div>

                            <div id="regional-revitalization" class="bg-gray-50 p-4 rounded-lg relative">
                                <button onclick="copyToClipboard('#regional-revitalization')" class="absolute top-2 right-2 text-gray-500 hover:text-gray-700 transition-colors">
                                    <svg class="w-5 h-5 block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                    </svg>
                                </button>
                                <h4 class="font-semibold text-lg text-gray-800 mb-2">Q: 地方創生についてはどのような取り組みをしていますか？</h4>
                                <p class="text-gray-700">A: 地方創生においても、コンテンツ産業の振興や表現の自由を活かした地域活性化に取り組んでいます。</p>
                                <p>漫画・アニメ・ゲームなどのコンテンツを活用した地域振興や、デジタル化による地方の情報格差解消にも力を入れています。</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function copyToClipboard(elementId) {
            const currentUrl = window.location.origin + window.location.pathname + elementId;
            
            if (navigator.clipboard && window.isSecureContext) {
                navigator.clipboard.writeText(currentUrl).then(function() {
                    showToast();
                }, function(err) {
                    console.error('クリップボードへのコピーに失敗しました: ', err);
                    fallbackCopyTextToClipboard(currentUrl);
                });
            } else {
                fallbackCopyTextToClipboard(currentUrl);
            }
        }

        function fallbackCopyTextToClipboard(text) {
            const textArea = document.createElement("textarea");
            textArea.value = text;
            textArea.style.top = "0";
            textArea.style.left = "0";
            textArea.style.position = "fixed";
            
            document.body.appendChild(textArea);
            textArea.focus();
            textArea.select();
            
            try {
                const successful = document.execCommand('copy');
                if (successful) {
                    showToast();
                } else {
                    console.error('フォールバックでのコピーに失敗しました');
                }
            } catch (err) {
                console.error('フォールバックでのコピーに失敗しました: ', err);
            }
            
            document.body.removeChild(textArea);
        }

        function showToast() {
            const toast = document.getElementById('copyToast');
            toast.classList.remove('translate-x-full');
            toast.classList.add('translate-x-0');
            
            setTimeout(function() {
                toast.classList.remove('translate-x-0');
                toast.classList.add('translate-x-full');
            }, 2000);
        }
    </script>
</x-app-layout>
