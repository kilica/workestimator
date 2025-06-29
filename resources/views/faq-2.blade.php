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

                    <!-- 政策について -->
                    <div class="mb-12">
                        <!-- 政策について -->
                        <h3 class="text-2xl font-bold text-gray-800 mb-6 border-b-2 border-purple-500 pb-2">
                            政治手法について
                        </h3>

                        <div class="space-y-6">
                            <div id="175-deletion" class="bg-gray-50 p-4 rounded-lg relative">
                                <button onclick="copyToClipboard('#175-deletion')" class="absolute top-2 right-2  text-gray-500 hover:text-gray-700 transition-colors">
                                    <svg class="w-5 h-5 block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                    </svg>
                                </button>
                                <h4 class="font-semibold text-lg text-gray-800 mb-2">Q: 刑法175条（わいせつ物頒布罪）の改正について、全く動きがないのですがやる気がないのでしょうか？</h4>
                                <p class="text-gray-700">A: 山田太郎議員は、刑法175条のわいせつ物頒布に対する規制を日本の表現の自由における最大の課題の一つと考えています</p>
                                <p>山田太郎議員の政治手法はかなり慎重なもので、動くことで悪影響が出る場合は動きません。いきあたたりばったりなパフォーマンスは避けます。</p>
                                <p>例えば、<a href="https://taroyamada.info/works/5">香川県のゲーム規制問題</a>で、香川県在住の少年が香川県を相手取って裁判を起こした時、これを応援する議員もいましたが山田太郎議員は動きませんでした。これは、万一裁判に負けたときに、ゲーム規制を導入しようか迷っている他県に対して「ゲーム規制を導入しても問題ない」という司法のお墨付きを与えてしまうからです。</p>
                                <p>また、<a href="https://taroyamada.info/works/7">クレジットカード会社による表現規制問題</a>でアメリカVISA本社を訪れて副社長と面談したときも、あらかじめ折衝を重ねて「望んだ回答を得られる」と踏んだうえで訪問しています。これも、パフォーマンスで事前調整もせずに行って「いや、VISAは道徳的に問題ありと判断した商品は扱わせない方針なんです」という回答を出されたらこの問題の解決は決定的に難しくなっていました。</p>
                                <p>実際には動いて準備をしていても、表に出さずに成果が確定的になるまで静かにしていることもあります。下手に騒ぐと、反対勢力が対抗して邪魔をしていること事があるからです。</p>
                                <p>刑法175条がどのような状況にあるのか分かりませんが、下手に騒ぐと「却って規制が強くなる」おそれがあります。事実、立憲民主党、国民民主党、共産党などアダルトな表現に対する規制を強めようという強い動きがあります。</p>
                                <p>一方で、山田太郎議員は非常に粘り強く活動する議員でもあります。花粉症対策は2013年から始めて10年以上かけて政府の関係閣僚会議で議論する問題にまでこぎつけていますし、こども家庭庁も準備を始めて5年以上経ったところで現れた僅かなチャンスを掴まえて実現しています。</p>
                                <p>刑法175条についても、引き続き取り組んでおり、他にできそうな議員もいない状況ですので、ぜひ山田太郎議員にご期待いただけたらと思います</p>
                                <ul>
                                    <li><a href="https://www.youtube.com/watch?v=IPb3Nw6uxsk&t=1389s">【第411回】荻野幸太郎さんと刑法175条特集 【山田太郎のさんちゃんねる】 - YouTube</a></li>
                                    <li><a href="https://www.youtube.com/watch?v=E_T45dnXxSc&t=1194s">【第497回】このままでいいのか?刑法175条〜表現の自由とわいせつ規制〜（2022/06/01） - YouTube</a></li>
                                    <li><a href="https://www.youtube.com/watch?v=9vyzDmbmqj0">【第555回】春画から考える刑法175条 (2023/10/04) #山田太郎のさんちゃんねる - YouTube</a></li>
                                </ul>
                            </div>

                            <div id="hyogen-problems" class="bg-gray-50 p-4 rounded-lg relative">
                                <button onclick="copyToClipboard('#hyogen-problems')" class="absolute top-2 right-2  text-gray-500 hover:text-gray-700 transition-colors">
                                    <svg class="w-5 h-5 block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                    </svg>
                                </button>
                                <h4 class="font-semibold text-lg text-gray-800 mb-2">Q: 山田太郎議員が与党自民党の議員になったことで表現の自由の問題は無くなったの？</h4>
                                <p class="text-gray-700">A: 残念ながら、まだ多くの問題が残っており、山田太郎議員の仕事も山積みです。</p>
                                <p>まず国会議員だからといって何でもできるわけではなく、国の立法と行政の監視が主な活動範囲となります。そのため、以下のような問題に直接対処するには限界があります。</p>
                                <ul>
                                    <li>行政・司法</li>
                                    <li>地方</li>
                                    <li>民間</li>
                                    <li>国際条約</li>
                                </ul>
                            </div>

                            <div id="hyogen-problems" class="bg-gray-50 p-4 rounded-lg relative">
                                <div class="flex justify-end mb-4">
                                    <button onclick="copyToClipboard('#hyogen-problems')" class="absolute top-2 right-2  text-gray-500 hover:text-gray-700 transition-colors">
                                        <svg class="w-5 h-5 block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                        </svg>
                                    </button>
                                </div>
                                <h4 class="font-semibold text-lg text-gray-800 mb-2">Q: この国会質疑は当たり前のことを聞いているように感じるのですが、やはり自民党の一員になって政府に手厳しい質疑はできなくなったのではないでしょうか？</h4>
                                <p class="text-gray-700">A: 山田太郎議員は野党時代から大臣などの相手を困らせるための国会質疑をしていませんでした。</p>
                                <p>山田太郎議員にとって、国会質疑は相手の無知を印象付けようと視聴者にアピールするためのものではなく、自分の制作を実現するうえでのピースを集めるためのものです。少し分かりづらいと思いますので、例を上げながら解説します。</p>
                                <p>・・・・・・</p>
                            </div>

                            <div id="invoice" class="bg-gray-50 p-4 rounded-lg relative">
                                <button onclick="copyToClipboard('#invoice')" class="absolute top-2 right-2  text-gray-500 hover:text-gray-700 transition-colors">
                                    <svg class="w-5 h-5 block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                    </svg>
                                </button>
                                <h4 class="font-semibold text-lg text-gray-800 mb-2">Q: </h4>
                                <p class="text-gray-700">A: （小山秘書）インボイス問題が税調で「いや、もうこのままやります」ということになって、そこから山田さんが帰ってきた時はなんかもう悲しんでるというよりも、燃え尽きてしょぼーんとしてるように見えたというのは結構印象的で、普段何があっても結構前を向いてずっとやってるんですが……</p>
                                <p>（山田議員）インボイスは結構十数回以上、直でやってて、かなり時間使って使ってたし、今でも使ってるんです。僕は、ぶっちゃけこれはよく皆さんに素直に謝らなきゃいけないんだけど、（インボイスの）2年延期勝ち取れると思ってたからね。やっぱり動いたなと思ったのは中小企業捜査会だよね。あの時にインボイス反対論はものすごく、出たんですね。これはさすがに山が動いたなと思って、このまま提言書を出してもしかしたら延長はあるかなって動いたと思ったんだけど、次の週ですよ。中小企業調査会に行ったら反対派だらけ！「インボイスやるべきだ」っていう人だらけで、これ財務省すげえなと思ったよね。一気に雰囲気が変わってて、ぶっ潰されたもんね。甘かったよなと思って、あれで打ちひしがれたんだよね。それまでは相当仕掛けてたし、緻密にやってきたし、財務省とも交渉してきたし……。2年延期して（その間に）形変えられると真剣に思ったことがあったんだけど、負けたよね。</p>
                                <p>（小山秘書）私も山田さんとやってきて、あそこまでちょっと見事に、逆にやられたなってのはあまり経験がないので、こちらもこちらで結構ショックでした。</p>
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
