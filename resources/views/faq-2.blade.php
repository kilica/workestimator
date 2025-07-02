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
                    <div id="copyToast" class="fixed top-4 right-4 bg-green-500 text-black px-4 py-2 rounded-lg shadow-lg transform translate-x-full transition-transform duration-300 z-50">
                        URLをコピーしました！
                    </div>

                    <!-- 政策について -->
                    <div class="mb-12">
                        <!-- 政策について -->
                        <h3 class="text-2xl font-bold text-gray-800 mb-6 border-b-2 border-purple-500 pb-2">
                            政策について
                        </h3>

                        <div class="space-y-6">
                            <div id="who-regulate" class="bg-gray-50 p-4 rounded-lg relative">
                                <div class="flex justify-end mb-4">
                                    <button onclick="copyToClipboard('#who-regulate')" class="absolute top-2 right-2  text-gray-500 hover:text-gray-700 transition-colors">
                                        <svg class="w-5 h-5 block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                        </svg>
                                    </button>
                                </div>
                                <h4 class="font-semibold text-lg text-gray-800 mb-2">Q: いま、どのような人が表現規制をしているのですか？</h4>
                                <p class="text-gray-700">
                                    <img src="/images/faq-hyogen-01.png" class="mb-8 " />
                                    <img src="/images/faq-hyogen-02.png" />
                                </p>
                            </div>

                            <div id="175-deletion" class="bg-gray-50 p-4 rounded-lg relative">
                                <div class="flex justify-end mb-4">
                                    <button onclick="copyToClipboard('#175-deletion')" class="absolute top-2 right-2  text-gray-500 hover:text-gray-700 transition-colors">
                                        <svg class="w-5 h-5 block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                        </svg>
                                    </button>
                                </div>
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
                                <div class="flex justify-end mb-4">
                                    <button onclick="copyToClipboard('#hyogen-problem')" class="absolute top-2 right-2  text-gray-500 hover:text-gray-700 transition-colors">
                                        <svg class="w-5 h-5 block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                        </svg>
                                    </button>
                                </div>
                                <h4 class="font-semibold text-lg text-gray-800 mb-2">Q: 山田太郎議員が与党自民党の議員になったことで表現の自由の問題は無くなったの？</h4>
                                <p class="text-gray-700">A: 残念ながら、まだ多くの問題が残っており、山田太郎議員の仕事も山積みです。</p>
                                <p>一番大きな課題としては、新サイバー犯罪条約の国内法整備で、表現規制に関する留保規定を国内法に盛り込めるかどうかが非常に重要になってきます。</p>
                                <p>また、プラットフォーマーの一種であるクレジットカード会社による規制も、まだ解決していません。</p>
                                <img src="/images/faq-hyogen-01.png" />
                                <p>また国会議員だからといって何でもできるわけではなく、国の立法と行政の監視が主な活動範囲となります。そのため、以下のような問題には制約があります。</p>
                                <ul>
                                    <li>行政・司法</li>
                                    <li>地方</li>
                                    <li>民間</li>
                                    <li>国際条約</li>
                                </ul>
                            </div>

                            <div id="onsen-musume" class="bg-gray-50 p-4 rounded-lg relative">
                                <div class="flex justify-end mb-4">
                                    <button onclick="copyToClipboard('#onsen-musume')" class="absolute top-2 right-2  text-gray-500 hover:text-gray-700 transition-colors">
                                        <svg class="w-5 h-5 block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                        </svg>
                                    </button>
                                </div>
                                <h4 class="font-semibold text-lg text-gray-800 mb-2">Q: 温泉むすめが批判にされされたときに山田太郎は何もやらなかったから支持できない。</h4>
                                <p class="text-gray-700">A: 温泉むすめの騒動は、仁藤夢乃さんがその設定について強く批判し炎上した事件だと思います。</p>
                                <p>国会議員は、民間の「これは嫌い」「これは良くない」といった言説に直接的に介入することは基本的にはしません。それこそ、表現の自由に対する圧力になってしまいます。</p>
                                <p>もし山田太郎議員に、<strong>批判に対抗するオピニオンリーダーのような役割を期待しているのであれば、確かに他の議員を探したほうが良い</strong>と思います。そもそもオピニオンリーダーは別に国会議員でなくてもできますし、それよりは立法や行政の監視といった国会議員にしかできない仕事に集中してもらう方がいいのではないでしょうか。</p>
                                <p>一方で、これが<strong>法規制や行政に及んでくる場合、山田太郎議員の出番</strong>となります。実際、温泉むすめの件では環境庁に後援をやめるべきといった意見が出ており、これには山田太郎議員も注目して環境庁にも釘を差しています。</p>
                                <p>ちなみに、温泉むすめの騒動で効果的な対応をした国会議員は<strong>誰もいない</strong>と思います。誰も支持しない、ということになるのではないでしょうか。</p>
                            </div>

                            <div id="diet-discussion" class="bg-gray-50 p-4 rounded-lg relative">
                                <div class="flex justify-end mb-4">
                                    <button onclick="copyToClipboard('#diet-discussion')" class="absolute top-2 right-2  text-gray-500 hover:text-gray-700 transition-colors">
                                        <svg class="w-5 h-5 block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                        </svg>
                                    </button>
                                </div>
                                <h4 class="font-semibold text-lg text-gray-800 mb-2">Q: この国会質疑は当たり前のことを聞いているように感じるのですが、やはり自民党の一員になって政府に手厳しい質疑はできなくなったのではないでしょうか？</h4>
                                <p class="text-gray-700">A: 山田太郎議員は野党時代から大臣などの相手を困らせるための国会質疑をしていませんでした。</p>
                                <p>山田太郎議員にとって、国会質疑は相手の無知を印象付けようと視聴者にアピールするためのものではなく、自分の政策を実現するうえで必要なピースを集めるためのものです。</p>
                                <p>少し分かりづらいと思いますので、例を上げながら解説します。</p>
                                <ul>
                                    <li><strong>ネット依存症の定義に関する政府見解の明確化:</strong> 山田議員は厚労省から「ネット依存症」について科学的根拠に基づいた定義は持ち合わせていないという認識を引き出しました。これによって、文科省が進めようとしていたゲームに関する啓蒙施策が科学的根拠を持たないことを浮き彫りにしました。</li>
                                    <li><strong>新サイバー犯罪条約: </strong>新サイバー犯罪条約について政府の立場を問いただし、「漫画、アニメ、ゲーム等の表現活動が不当に制限されることがあってはならない」と考えているという答弁を引き出しました。これによって、外務省の担当交渉官は安心して表現規制条項に反対（留保規定を残す）する立場で交渉を進められるようになりました。</li>
                                </ul>
                                <p>このように質疑自体は非常にあっさりしたもので、しかもこの回答をもらえることを事前に官僚と調整（答弁ライン）したうえで質疑を行います。調整したうえで欲しい回答がもらえない場合は質疑自体を行いません。</p>
                                <p>万が一、欲しい回答と反対の回答をされると政策を実現するうえでの障害にしかならないからです。</p>
                            </div>

                            <div id="invoice" class="bg-gray-50 p-4 rounded-lg relative">
                                <div class="flex justify-end mb-4">
                                    <button onclick="copyToClipboard('#invoice')" class="absolute top-2 right-2  text-gray-500 hover:text-gray-700 transition-colors">
                                        <svg class="w-5 h-5 block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                        </svg>
                                    </button>
                                </div>
                                <h4 class="font-semibold text-lg text-gray-800 mb-2">Q: 山田太郎ってインボイスに賛成したので信用できない</h4>
                                <p class="text-gray-700">A: まず、山田太郎議員はインボイスを含む法案には<a href="https://www.sangiin.go.jp/japanese/touhyoulist/190/190-0329-v004.htm">反対票を投じていますし、その後も<a href="https://taroyamada.jp/cat-expression/post-23143/">一貫して反対</a>しており賛成したという事実はありません。</a></p>
                                <p>2021年のときは、党内でインボイス延期（実施まで時間がなかったので一旦延期して時間を稼ぎ、その間に廃止に持ち込む作戦）の大論陣を張り、一時は延期獲得か、というところまで行きました。</p>
                                <blockquote class="ml-4 mt-4 mb-4">
                                <p><strong>（小山秘書）</strong> インボイス問題が税調で「いや、もうこのままやります」ということになって、そこから山田さんが帰ってきた時はなんかもう悲しんでるというよりも、燃え尽きてしょぼーんとしてるように見えたというのは結構印象的で、普段何があっても結構前を向いてずっとやってるんですが……</p>
                                <p><strong>（山田議員）</strong> インボイスは結構十数回以上、直でやってて、かなり時間使って使ってたし、今でも使ってるんです。これはよく皆さんに素直に謝らなきゃいけないんだけど、僕は、ぶっちゃけ（インボイスの）2年延期勝ち取れると思ってたからね。やっぱり「動いたな」と思ったのは中小企業捜査会だよね。あの時にインボイス反対論はものすごく、出たんですね。これはさすがに山が動いたなと思って、このまま提言書を出してもしかしたら延長はあるかなって。動いたと思ったんだけど、次の週ですよ。中小企業調査会に行ったら反対派だらけ！「インボイスやるべきだ」っていう人だらけで、これ財務省すげえなと思ったよね。一気に雰囲気が変わってて、ぶっ潰されたもんね。甘かったよなと思って、あれで打ちひしがれたんだよね。それまでは相当仕掛けてたし、緻密にやってきたし、財務省とも交渉してきたし……。2年延期して（その間に）形変えられると真剣に思ったことがあったんだけど、負けたよね。</p>
                                <p><strong>（小山秘書）</strong> 私も山田さんとやってきて、あそこまでちょっと見事に、逆にやられたなってのはあまり経験がないので、こちらもこちらで結構ショックでした。</p>
                                </blockquote>
                                <p>このあとも、経過措置として少額（1万円未満）の経費はインボイス不要にするなど、インボイスによる負担を軽減するためのいくつかの譲歩を引き出しています。</p>
                                <p>インボイス廃止を勝ち取ることができなかったのはそのとおりですが、少なくとも「インボイスに賛成した」というのは明確に誤りです。</p>
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
