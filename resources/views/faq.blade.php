<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('よくある質問（選挙・党）') }}
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
                        <span class="bg-gray-500 text-white px-4 py-2 rounded-lg">
                            FAQ（選挙・党）
                        </span>
                        <a href="{{ route('faq-2') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition-colors">
                            FAQ（政策）
                        </a>
                    </div>
                    
                    <!-- 選挙について -->
                    <div class="mb-12">
                        <h3 class="text-2xl font-bold text-gray-800 mb-6 border-b-2 border-green-500 pb-2">
                            選挙について
                        </h3>
                        
                        <div class="space-y-6">
                            <div id="election-schedule" class="bg-gray-50 p-4 rounded-lg relative">
                                <button onclick="copyToClipboard('#election-schedule')" class="absolute top-2 right-2  text-gray-500 hover:text-gray-700 transition-colors">
                                    <svg class="w-5 h-5 block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                    </svg>
                                </button>
                                <h4 class="font-semibold text-lg text-gray-800 mb-2">Q: 次回の選挙はいつですか？</h4>
                                <p class="text-gray-700">A: 参議院議員の任期は6年で、次回の参議院選挙は2025年7月20日（日）です。</p>
                            </div>
                            
                            <div id="election-district" class="bg-gray-50 p-4 rounded-lg relative">
                                <button onclick="copyToClipboard('#election-district')" class="absolute top-2 right-2  text-gray-500 hover:text-gray-700 transition-colors">
                                    <svg class="w-5 h-5 block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                    </svg>
                                </button>
                                <h4 class="font-semibold text-lg text-gray-800 mb-2">Q: どの選挙区から立候補していますか？</h4>
                                <p class="text-gray-700">A: 山田太郎議員は全国比例代表選挙区から立候補しています。<strong>全国どこからでも「山田太郎」と書いて投票</strong>することが出来ます。</p>
                            </div>
                            
                            <div id="voting-method" class="bg-gray-50 p-4 rounded-lg relative">
                                <button onclick="copyToClipboard('#voting-method')" class="absolute top-2 right-2  text-gray-500 hover:text-gray-700 transition-colors">
                                    <svg class="w-5 h-5 block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                    </svg>
                                </button>
                                <h4 class="font-semibold text-lg text-gray-800 mb-2">Q: 投票方法を教えてください</h4>
                                <p class="text-gray-700">A: 山田太郎議員は2025年7月の参議院選挙では全国比例代表で立候補しています。そのため比例代表（2枚目）では、個人名（<strong>「山田太郎」</strong>）をお書きください。所属政党名を書いても山田太郎議員の当選にはほとんど影響しません。</p>
                            </div>

                            <div id="akamatsu" class="bg-gray-50 p-4 rounded-lg relative">
                                 <button onclick="copyToClipboard('#akamatsu')" class="absolute top-2 right-2  text-gray-500 hover:text-gray-700 transition-colors">
                                    <svg class="w-5 h-5 block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                    </svg>
                                </button>
                                <h4 class="font-semibold text-lg text-gray-800 mb-2">Q: 赤松健議員も応援しているので、今回は赤松さんに投票しようと思います。</h4>
                                <p class="text-gray-700">A: <img src="/images/akamatsu.jpg" /></p>
                            </div>

                            <div id="howto-support" class="bg-gray-50 p-4 rounded-lg relative">
                                <button onclick="copyToClipboard('#howto-support')" class="absolute top-2 right-2  text-gray-500 hover:text-gray-700 transition-colors">
                                    <svg class="w-5 h-5 block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                    </svg>
                                </button>
                                <h4 class="font-semibold text-lg text-gray-800 mb-2">Q: 山田太郎議員を応援したいと強く思いました。なにか力になれることはありますか？</h4>
                                <p class="text-gray-700">A: <a href="https://taroyamada.jp/sns">公式ホームページに応援方法がまとめられています</a>ので、ご覧いただきぜひお力をお貸しください。Xで山田太郎議員をフォローしたりリポストしたりと、簡単なことから始めることができます。</p>
                            </div>

                            <div id="too-many-vote" class="bg-gray-50 p-4 rounded-lg relative">
                                <button onclick="copyToClipboard('#too-many-vote')" class="absolute top-2 right-2  text-gray-500 hover:text-gray-700 transition-colors">
                                    <svg class="w-5 h-5 block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                    </svg>
                                </button>
                                <h4 class="font-semibold text-lg text-gray-800 mb-2">Q: 前回の山田太郎議員、赤松健議員は50万票以上という大量の得票で当選していますが、他の表現の自由を標榜する議員に一部票を回して議員数を増やすべきではないでしょうか？</h4>
                                <p class="text-gray-700">A: まず前提として、「表現の自由」票を分割する有効な方法がないため、<strong>「できればいいかもしれないけど現実的には困難」</strong>です。</p>
                                <p>下手をすれば、どちらの議員も票が足らなくなって落選し共倒れになってしまいます。</p>
                                <p>また、山田太郎議員、赤松健議員が大量の得票をしたことには大きな意義があります。「当選ラインの票数を超えた分はとりすぎで無駄」ではありません。両議員の大量の票は「表現の自由を重視する有権者が自民党支持者の中でも最大の勢力と言えるほどいる」ということを明らかにし、自民党も無視できなくなりました。</p>
                                <p>さらに自民党は、公約に「表現の自由」を明記するまでになっています。</p>
                            </div>

                            <div id="dislike-ldp-member" class="bg-gray-50 p-4 rounded-lg relative">
                                <button onclick="copyToClipboard('#dislike-ldp-member')" class="absolute top-2 right-2  text-gray-500 hover:text-gray-700 transition-colors">
                                    <svg class="w-5 h-5 block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                    </svg>
                                </button>
                                <h4 class="font-semibold text-lg text-gray-800 mb-2">Q: 自民党の比例候補者に絶対当選してほしくない人がいます。山田太郎議員には頑張ってほしいと思いますが、投票は控えようかと思います。</h4>
                                <p class="text-gray-700">A: 質問者さんの投票に関する意志は尊重したいと思います。選挙の仕組みについて解説しますので、参考にしていただけたらと思います。</p>
                                <p>参議院比例代表では自民党の場合、だいたい100万票増えると当選者が一人増えます。山田太郎議員の得票数は50万票程度なので、<strong>山田太郎議員に投票したから当選者数が増えることはほぼ無い</strong>と思います。</p>
                                <p>また、参議院の比例代表では、候補者は他党との戦いというよりも、<strong>自民党の他の候補との席の奪い合い</strong>という性格が強い選挙とも言われます。つまり、山田太郎議員に投票して山田太郎議員が当選することで、質問者さんの<strong>嫌いな候補者の席が一つ減る</strong>ことになります。</p>
                                <p>そのため山田太郎議員に投票することは、質問者さんの<strong>嫌いな議員に利するというよりも落選につながる</strong>と思います。</p>
                            </div>

                            <div id="dislike-ldp-member" class="bg-gray-50 p-4 rounded-lg relative">
                                <button onclick="copyToClipboard('#dislike-ldp-member')" class="absolute top-2 right-2  text-gray-500 hover:text-gray-700 transition-colors">
                                    <svg class="w-5 h-5 block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                    </svg>
                                </button>
                                <h4 class="font-semibold text-lg text-gray-800 mb-2">Q: 自民党の比例代表の候補者一覧を見ると、山田太郎議員は一番下の方にありました。これでは当選は難しいでしょうか？</h4>
                                <p class="text-gray-700">A: 参議院比例代表の仕組みでは、投票用紙に書かれた名前の多い順に当選していきます（各党2名の特定枠を除く）。そのため、<strong>名簿の順番に関係なく、たくさん名前を書かれれば当選</strong>します。</p>
                                <p>実際、前回2019年の選挙のときも、山田太郎議員の名前は自民党候補者の中で一番最後の方でしたが、自民党の中で2番目の得票で見事当選しました。</p>
                                <p>名簿の順番は、おそらく名前のあいうえお順に並んでいるだけだと思います。全く気にする必要はありません。</p>
                                <p><strong>名簿の順番に意味があるのは衆議院選挙の比例代表</strong>です。参議院は関係ありません。</p>
                            </div>

                        </div>
                    </div>

                    <!-- 自民党について -->
                    <div class="mb-12">
                        <h3 class="text-2xl font-bold text-gray-800 mb-6 border-b-2 border-red-500 pb-2">
                            自民党について
                        </h3>
                        
                        <div class="space-y-6">
                            <div id="ldp-expression-regulation" class="bg-gray-50 p-4 rounded-lg relative">
                                <button onclick="copyToClipboard('#ldp-expression-regulation')" class="absolute top-2 right-2  text-gray-500 hover:text-gray-700 transition-colors">
                                    <svg class="w-5 h-5 block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                    </svg>
                                </button>
                                <h4 class="font-semibold text-lg text-gray-800 mb-2">Q: 自民党は表現規制の党ですか？</h4>
                                <p class="text-gray-700">A: YesでもありNoでもあります。かつては間違いなくそうでした。しかしこの6年で、山田太郎議員と赤松健議員が大量得票して当選したため、表現規制には慎重になり、ついには党の公約にも「表現の自由」が載るようになりました。</p>
                                <p>ただし、いまでも表現の自由を規制したい議員は一定数います。山田太郎議員の得票数が減ってしまうと、党内の議論での発言力も小さくなってしまいます。是非応援お願いします。</p>
                                <p><img src="/images/faq-05.png" /></p>
                            </div>
                            
                            <div id="ldp-party-discipline" class="bg-gray-50 p-4 rounded-lg relative">
                                <button onclick="copyToClipboard('#ldp-party-discipline')" class="absolute top-2 right-2  text-gray-500 hover:text-gray-700 transition-colors">
                                    <svg class="w-5 h-5 block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                    </svg>
                                </button>
                                <h4 class="font-semibold text-lg text-gray-800 mb-2">Q: 自民党だと党議拘束で山田太郎議員は何も出来ないと聞きました。本当でしょうか？</h4>
                                <p class="text-gray-700">A: 全くの間違いです。</p>
                                <p>山田太郎議員が自分の意見を通して数多くの実績を残していることからも分かると思います。</p>
                                <p>例えば、こども庁、こども基本法では保守派の議員からの強い反対がありましたが、成立させています。</p>
                                <p><img src="/images/faq-01.png" /></p>
                            </div>

                            <div id="ldp-faction-influence" class="bg-gray-50 p-4 rounded-lg relative">
                                <button onclick="copyToClipboard('#ldp-faction-influence')" class="absolute top-2 right-2  text-gray-500 hover:text-gray-700 transition-colors">
                                    <svg class="w-5 h-5 block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                    </svg>
                                </button>
                                <h4 class="font-semibold text-lg text-gray-800 mb-2">Q: 党議拘束が問題じゃないとすると、なぜ自民党議員は自分が納得しない法案に賛成しているように見えるのでしょうか？</h4>
                                <p class="text-gray-700">A: 多くの議員は、派閥に所属し、支援団体から選挙で支援を受け、寄付をもらっています。そうした派閥の長や支援団体からの指示があると従わざるを得ないことがあります。</p>
                                <p class="text-gray-700">しかし山田太郎議員は無派閥、支援団体なし、団体献金なしで圧倒的得票をえているため、そうしたしがらみがないのです。</p>
                                <p><img src="/images/faq-02.png" /></p>
                            </div>

                            <div id="ldp-vs-opposition" class="bg-gray-50 p-4 rounded-lg relative">
                                <button onclick="copyToClipboard('#ldp-vs-opposition')" class="absolute top-2 right-2  text-gray-500 hover:text-gray-700 transition-colors">
                                    <svg class="w-5 h-5 block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                    </svg>
                                </button>
                                <h4 class="font-semibold text-lg text-gray-800 mb-2">Q: 山田さんのおかげで自民党が表現規制をしなくなったとはいえ、それでも野党のほうが安全では？</h4>
                                <p class="text-gray-700">A: 残念ながら、状況は非常に厳しいものがあります。</p>
                                <p>共産党、国民民主党、立憲民主党はいずれもアダルトなどの表現を積極的に規制する方針を打ち出しています。</p>
                                <p>参政党も、党首の神谷さんが<a href="https://x.com/jinkamiya/status/1937890297696141817">表現規制の必要性をXで発言</a>しています。</p>
                                <p><img src="/images/faq-06.png" /></p>
                            </div>

                            <div id="ldp-membership" class="bg-gray-50 p-4 rounded-lg relative">
                                <button onclick="copyToClipboard('#ldp-membership')" class="absolute top-2 right-2  text-gray-500 hover:text-gray-700 transition-colors">
                                    <svg class="w-5 h-5 block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                    </svg>
                                </button>
                                <h4 class="font-semibold text-lg text-gray-800 mb-2">Q: 自民党への入党方法は？</h4>
                                <p class="text-gray-700">A: <a href="https://taroyamada.jp/more-support/">こちら</a>をご覧ください。</p>
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
