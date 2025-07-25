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
                    <div id="copyToast" class="fixed top-4 right-4 bg-green-500 text-black px-4 py-2 rounded-lg shadow-lg transform translate-x-full transition-transform duration-300 z-50">
                        URLをコピーしました！
                    </div>

                    <!-- 山田太郎議員について -->
                    <div class="mb-12">
                        <h3 class="text-2xl font-bold text-gray-800 mb-6 border-b-2 border-blue-500 pb-2">
                            山田太郎議員について
                        </h3>

                        <div class="space-y-6">

                            <div id="why-yamada" class="bg-gray-50 p-4 rounded-lg relative">
                                <div class="flex justify-end mb-4">
                                    <button onclick="copyToClipboard('#why-yamada')" class="absolute top-2 right-2  text-gray-500 hover:text-gray-700 transition-colors">
                                        <svg class="w-5 h-5 block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                        </svg>
                                    </button>
                                </div>
                                <h4 class="font-semibold text-lg text-gray-800 mb-2">Q: 山田太郎議員を評価している人は、どんなところを評価しているのですか？</h4>
                                <p class="text-gray-700">A: 人によって様々だと思いますが、おもに以下のような点で高く評価されています。</p>
                                <ul>
                                    <li>表現の自由を守ってきた膨大な実績</li>
                                    <li>政策を実現する圧倒的手腕</li>
                                    <li>毎週、動画で政治活動を詳しく報告してくれる</li>
                                    <li>有言実行。やると行ったことを、しつこく粘り強く続けてくれる。</li>
                                    <li>派閥や団体のしがらみがなく活動している</li>
                                    <li>表現の自由を守ってくれる</li>
                                </ul>
                                <p>よければ <a href="https://posfie.com/@daiginjo/p/uZCLVF7?draft=1">表現の自由を守る国会議員「#あなたの山田太郎はどこから」？ - posfie</a> も御覧ください</p>
                            </div>

                            <div id="why-ldp" class="bg-gray-50 p-4 rounded-lg relative">
                                <div class="flex justify-end mb-4">
                                    <button onclick="copyToClipboard('#why-ldp')" class="absolute top-2 right-2  text-gray-500 hover:text-gray-700 transition-colors">
                                        <svg class="w-5 h-5 block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                        </svg>
                                    </button>
                                </div>
                                <h4 class="font-semibold text-lg text-gray-800 mb-2">Q: なぜ自民党から出ているのですか？　表現の自由にとって敵のような党ではないですか？</h4>
                                <p class="text-gray-700"><img src="/images/faq-hyogen-why-ldp.png" /></p>
                                <p class="mb-8"><a href="https://twitter.com/intent/tweet?text=pic.twitter.com/L7KOMTe6Cr" target="_blank">この画像を使って X にポストする</a></p>
                                <p>A: 確かに山田太郎議員が自民党に入った時点では表現規制勢力の強い党でした。</p>
                                <p>しかし、自民党（与党）に入ることは、表現の自由を守るうえで非常に大きなメリットもあります。</p>
                                <p>まず与党の議員の場合、<strong>法案が審議される前に</strong>官僚から相談を受け、修正を指示したり調整することができるようになります。この段階では、修正は比較的容易ですが、多くの人の合意を受けたあと、審議に入る頃には修正するには合意の取り直しになるため修正に対し抵抗が生まれてしまいます。</p>
                                <p>また法案が審議される自民党の部会では<strong>全会一致が法案通過の原則なので、山田太郎議員一人が反対を貫けば法案を止めることができます</strong>。</p>
                                <p>もし山田太郎議員が野党だと、反対できるようになるのは国会です。国会では最終的に多数決なので、山田太郎議員一人がどれだけ反対したところで法案は成立してしまいます。</p>
                                <p>実際、山田太郎議員が自民党に入って以来、表現を規制する法案は国会に出なくなりました。</p>
                                <p>また、2025年参議院選挙の<strong>自民党の公約</strong>では「表現の自由」という言葉まで載るようになりました。載ったからといって（我々の期待する形で）守るとは限らないのはもちろんですが、山田太郎議員の活動が自民党とって無視できないものになっているのは確かです。</p>
                            </div>

                            <div id="yamada-supporters" class="bg-gray-50 p-4 rounded-lg relative">
                                <div class="flex justify-end mb-4">
                                    <button onclick="copyToClipboard('#yamada-supporters')" class="absolute top-2 right-2  text-gray-500 hover:text-gray-700 transition-colors">
                                        <svg class="w-5 h-5 block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                        </svg>
                                    </button>
                                </div>
                                <h4 class="font-semibold text-lg text-gray-800 mb-2">Q: どんな人、団体が山田太郎議員を支持しているのですか？</h4>
                                <p class="text-gray-700">A: 一番コアな支持者は「表現の自由」を重視する漫画・アニメ・ゲームなどのコンテンツが好きな人たちです。</p>
                                <p>また、<a href="/works/11">こども家庭庁を創設</a>し、<a href="/works/14">社会的養護の充実</a>、<a href="https://taroyamada.jp/works/works-45189/" target="_blank">児童手当の所得制限撤廃</a>や<a href="https://taroyamada.jp/works/works-45181/" target="_blank">発達障害の支援拡充</a>を実現したため、子育て世代の方にも支持が広まっています。</p>
                                <p>また、<a href="/works/3">フリーランス新法</a>で若者やフリーランスの方々からの支持を集めました。</p>
                                <p><a href="/works/1">国立国会図書館のデジタル化</a>では、研究者の方から強い支持を受けています。</p>
                                <p>このように、表現の自由を中核に、幅広い支持を集めるようになっています。</p>
                            </div>

                            <div id="china" class="bg-gray-50 p-4 rounded-lg relative">
                                <div class="flex justify-end mb-4">
                                    <button onclick="copyToClipboard('#china')" class="absolute top-2 right-2  text-gray-500 hover:text-gray-700 transition-colors">
                                        <svg class="w-5 h-5 block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                        </svg>
                                    </button>
                                </div>
                                <h4 class="font-semibold text-lg text-gray-800 mb-2">Q: 中国のスパイだという人もいますが本当でしょうか？</h4>
                                <p class="text-gray-700">A: 「山田太郎議員が中国スパイ」などの主張は事実無根です。</p>
                                <p>中国のスパイだと行っている人たちの根拠は、山田太郎議員が北京航空航天大学の名誉教授の称号を授与されたということです。これは東大・早稲田大学で講師をしていた時期に講演依頼を受け対応したことで授与されたものであり、人民解放軍や中国共産党とは無関係です。</p>
                                <p>そもそもなぜ山田太郎氏に講演依頼が入ったかといえば、製造業のコンサルをやっていて中国に進出する日本企業のサポートもしていたため、ERP（基幹系の情報システム）について講演しました。</p>
                                <p>「名誉教授」はあくまでも名誉職です。むしろ中国政府から見ると、中国の軍事系の大学に入り込んだ日本人ということになるので警戒されている立場です。</p>
                                <p>批判している人たちも、具体的に情報を漏らした、便宜を図ったなどの批判をしているわけではなく、「名誉教授なんだから何か関係がありそう」という漠然とした疑いで「スパイだ」と断定してるだけです。</p>
                                <p>また、山田太郎議員は台湾視察の際に台湾の高官とも面会していますが、その際、<strong>台湾政府から徹底的なチェックを受けています</strong>。そのうえで面会が実現していますので、そのへんの評論家やYouTuberの発言よりはよほど信頼できるでしょう。</p>
                            </div>

                            <div id="china" class="bg-gray-50 p-4 rounded-lg relative">
                                <div class="flex justify-end mb-4">
                                    <button onclick="copyToClipboard('#china')" class="absolute top-2 right-2  text-gray-500 hover:text-gray-700 transition-colors">
                                        <svg class="w-5 h-5 block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                        </svg>
                                    </button>
                                </div>
                                <h4 class="font-semibold text-lg text-gray-800 mb-2">Q: 統一教会関係者という噂を聞きましたが本当でしょうか？</h4>
                                <p class="text-gray-700">A: 「山田太郎議員が統一教会と関係がある」という言説は事実に基づいたものではありません。</p>
                                <p>一部で誤解の原因とされるのが「Japan-US Innovation Summit 2019（令和元年自由民権大演説会・自由経済懇話会）」での講演ですが、これは統一教会のイベントではなく、一部関係者に統一教会と関係があるとされる人がいたというものです。</p>
                                <p>しかも、この講演では「表現の自由」について話しており、本当にこれが統一教会のイベントだとすると<strong>表現規制を推し進めたい統一教会に喧嘩を売るような内容</strong>でした。</p>
                                <p>さらに山田議員は<strong>親の信仰に基づく宗教虐待の問題</strong>に精力的に取り組んできた議員の一人です。宗教団体によるこどもへの強制的な信仰・献金などの問題解決に注力しており、<strong>統一教会の活動に真っ向から立ち向かっている議員</strong>です。</p>
                            </div>

                        </div>
                    </div>

                    <!-- 選挙について -->
                    <div class="mb-12">
                        <h3 class="text-2xl font-bold text-gray-800 mb-6 border-b-2 border-green-500 pb-2">
                            選挙について
                        </h3>
                        
                        <div class="space-y-6">
                            <div id="election-schedule" class="bg-gray-50 p-4 rounded-lg relative">
                                <div class="flex justify-end mb-4">
                                    <button onclick="copyToClipboard('#election-schedule')" class="absolute top-2 right-2  text-gray-500 hover:text-gray-700 transition-colors">
                                        <svg class="w-5 h-5 block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                        </svg>
                                    </button>
                                </div>
                                <h4 class="font-semibold text-lg text-gray-800 mb-2">Q: 次回の選挙はいつですか？</h4>
                                <p class="text-gray-700">A: 参議院議員の任期は6年で、次回の参議院選挙は<strong>2025年7月20日（日）</strong>です（7:00-20:00）。</p>
                                <p>7/4（金）8:30 から<strong>「期日前投票」</strong>が可能です。</p>
                            </div>
                            
                            <div id="election-district" class="bg-gray-50 p-4 rounded-lg relative">
                                <div class="flex justify-end mb-4">
                                    <button onclick="copyToClipboard('#election-district')" class="absolute top-2 right-2  text-gray-500 hover:text-gray-700 transition-colors">
                                        <svg class="w-5 h-5 block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                        </svg>
                                    </button>
                                </div>
                                <h4 class="font-semibold text-lg text-gray-800 mb-2">Q: どの選挙区から立候補していますか？</h4>
                                <p class="text-gray-700">A: 山田太郎議員は全国比例代表選挙区から立候補しています。<strong>全国どこからでも「山田太郎」と書いて投票</strong>することが出来ます。</p>
                                <p><img src="/images/everyone-vote.jpg" /></p>
                            </div>
                            
                            <div id="voting-method" class="bg-gray-50 p-4 rounded-lg relative">
                                <div class="flex justify-end mb-4">
                                    <button onclick="copyToClipboard('#voting-method')" class="absolute top-2 right-2  text-gray-500 hover:text-gray-700 transition-colors">
                                        <svg class="w-5 h-5 block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                        </svg>
                                    </button>
                                </div>
                                <h4 class="font-semibold text-lg text-gray-800 mb-2">Q: 投票方法を教えてください</h4>
                                <p class="text-gray-700">A: 山田太郎議員は2025年7月の参議院選挙では全国比例代表で立候補しています。そのため比例代表（2枚目）では、個人名（<strong>「山田太郎」</strong>）をお書きください。所属政党名を書いても山田太郎議員の当選にはほとんど影響しません。</p>
                                <p><img src="/images/vote_to_yamada.png" alt="" /></p>
                            </div>

                            <div id="akamatsu" class="bg-gray-50 p-4 rounded-lg relative">
                                <div class="flex justify-end mb-4">
                                    <button onclick="copyToClipboard('#akamatsu')" class="absolute top-2 right-2  text-gray-500 hover:text-gray-700 transition-colors">
                                        <svg class="w-5 h-5 block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                        </svg>
                                    </button>
                                </div>
                                <h4 class="font-semibold text-lg text-gray-800 mb-2">Q: 赤松健議員も応援しているので、今回は赤松さんに投票しようと思います。</h4>
                                <p class="text-gray-700">A: <img src="/images/akamatsu.jpg" /></p>
                            </div>

                            <div id="howto-support" class="bg-gray-50 p-4 rounded-lg relative">
                                <div class="flex justify-end mb-4">
                                    <button onclick="copyToClipboard('#howto-support')" class="absolute top-2 right-2  text-gray-500 hover:text-gray-700 transition-colors">
                                        <svg class="w-5 h-5 block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                        </svg>
                                    </button>
                                </div>
                                <h4 class="font-semibold text-lg text-gray-800 mb-2">Q: 山田太郎議員を応援したいと強く思いました。なにか力になれることはありますか？</h4>
                                <p class="text-gray-700">A: <a href="https://taroyamada.jp/sns" target="_blank">公式ホームページに応援方法がまとめられています</a>ので、ご覧いただきぜひお力をお貸しください。Xで山田太郎議員をフォローしたりリポストしたりと、簡単なことから始めることができます。</p>
                            </div>

                            <div id="too-many-vote" class="bg-gray-50 p-4 rounded-lg relative">
                                <div class="flex justify-end mb-4">
                                    <button onclick="copyToClipboard('#too-many-vote')" class="absolute top-2 right-2  text-gray-500 hover:text-gray-700 transition-colors">
                                        <svg class="w-5 h-5 block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                        </svg>
                                    </button>
                                </div>
                                <h4 class="font-semibold text-lg text-gray-800 mb-2">Q: 前回の山田太郎議員、赤松健議員は50万票以上という大量の得票で当選していますが、他の表現の自由を標榜する議員に一部票を回して議員数を増やすべきではないでしょうか？</h4>
                                <p class="text-gray-700">A: まず前提として、「表現の自由」票を分割する有効な方法がないため、<strong>「できればいいかもしれないけど現実的には困難」</strong>です。</p>
                                <p>下手をすれば、どちらの議員も票が足らなくなって落選し共倒れになってしまいます。</p>
                                <p>また、山田太郎議員、赤松健議員が大量の得票をしたことには大きな意義があります。「当選ラインの票数を超えた分はとりすぎで無駄」ではありません。両議員の大量の票は「表現の自由を重視する有権者が自民党支持者の中でも最大の勢力と言えるほどいる」ということを明らかにし、自民党も無視できなくなりました。</p>
                                <p>さらに自民党は、公約に「表現の自由」を明記するまでになっています。</p>
                            </div>

                            <div id="dislike-ldp-member" class="bg-gray-50 p-4 rounded-lg relative">
                                <div class="flex justify-end mb-4">
                                    <button onclick="copyToClipboard('#dislike-ldp-member')" class="absolute top-2 right-2  text-gray-500 hover:text-gray-700 transition-colors">
                                        <svg class="w-5 h-5 block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                        </svg>
                                    </button>
                                </div>
                                <h4 class="font-semibold text-lg text-gray-800 mb-2">Q: 自民党の比例候補者に絶対当選してほしくない人がいます。山田太郎議員には頑張ってほしいと思いますが、投票は控えようかと思います。</h4>
                                <p class="text-gray-700">A: 質問者さんの投票に関する意志は尊重したいと思います。選挙の仕組みについて解説しますので、参考にしていただけたらと思います。</p>
                                <p>参議院比例代表では自民党の場合、だいたい100万票増えると当選者が一人増えます。山田太郎議員の得票数は50万票程度なので、<strong>山田太郎議員に投票したから当選者数が増えることはほぼ無い</strong>と思います。</p>
                                <p>また、参議院の比例代表では、候補者は他党との戦いというよりも、<strong>自民党の他の候補との席の奪い合い</strong>という性格が強い選挙とも言われます。つまり、山田太郎議員に投票して山田太郎議員が当選することで、質問者さんの<strong>嫌いな候補者の席が一つ減る</strong>ことになります。</p>
                                <p>そのため山田太郎議員に投票することは、質問者さんの<strong>嫌いな議員に利するというよりも落選につながる</strong>と思います。</p>
                            </div>

                            <div id="list-order" class="bg-gray-50 p-4 rounded-lg relative">
                                <div class="flex justify-end mb-4">
                                    <button onclick="copyToClipboard('#list-order')" class="absolute top-2 right-2  text-gray-500 hover:text-gray-700 transition-colors">
                                        <svg class="w-5 h-5 block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                        </svg>
                                    </button>
                                </div>
                                <h4 class="font-semibold text-lg text-gray-800 mb-2">Q: 自民党の比例代表の候補者一覧を見ると、山田太郎議員は一番下の方にありました。これでは当選は難しいでしょうか？</h4>
                                <p class="text-gray-700">A: 参議院比例代表の仕組みでは、投票用紙に書かれた名前の多い順に当選していきます（各党2名の特定枠を除く）。そのため、<strong>名簿の順番に関係なく、たくさん名前を書かれれば当選</strong>します。</p>
                                <p>実際、前回2019年の選挙のときも、山田太郎議員の名前は自民党候補者の中で一番最後の方でしたが、自民党の中で2番目の得票で見事当選しました。</p>
                                <p>名簿の順番は、おそらく名前のあいうえお順に並んでいるだけだと思います。全く気にする必要はありません。</p>
                                <p><strong>名簿の順番に意味があるのは衆議院選挙の比例代表</strong>です。参議院は関係ありません。</p>
                            </div>

                            <div id="vote-to-other-expression-member" class="bg-gray-50 p-4 rounded-lg relative">
                                <div class="flex justify-end mb-4">
                                    <button onclick="copyToClipboard('#vote-to-other-expression-member')" class="absolute top-2 right-2  text-gray-500 hover:text-gray-700 transition-colors">
                                        <svg class="w-5 h-5 block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                        </svg>
                                    </button>
                                </div>
                                <h4 class="font-semibold text-lg text-gray-800 mb-2">Q: 表現の自由を守ってくれるという別の候補に入れようと思います。</h4>
                                <p class="text-gray-700"><img src="/images/faq-hyogen-protect-expression.png" /></p>
                                <p class="mb-8"><a href="https://twitter.com/intent/tweet?text=pic.twitter.com/w6LKuVCP3E" target="_blank">この画像を使って X にポストする</a></p>
                                <p>A: 山田太郎議員を推している当サイトとしては山田議員に入れていただきたいところですが、表現の自由を守ってくれる議員が増えることは喜ばしいことです。</p>
                                <p>ただし、口だけでなく本当に守ってくれるかというのはしっかり見極めていただけますと幸いです。</p>
                                <p>「表現の自由は重要だ」という議員でも、よくよく聞いてみると<strong>「いや、ここまでひどいものは流石に規制しないと」</strong>という考えを持っていることがよくあります。</p>
                                <p>これも一つの見識かと思いますが、「ここまでひどいもの」というのは、人によってまちまちですので、質問者さんの感覚に一致しているか見極めが必要です。</p>
                                <p>また、一度法律で規制されたものについて、その<strong>規制を外すのは、規制がかかる前に防ぐよりも何倍も困難</strong>です。それどころか「規制は拡大していくもの」と考えたほうがいいでしょう。「こういう問題が起きたからこれだけは規制しよう」で始まった規制も、「こんな問題も起きたからこれも同じように規制しよう」がどんどん増えていくものです。</p>
                                <p>後悔の無いよう、候補者を選んでください。</p>
                                <p><a href="https://x.com/kilica/status/1941712819382304947">詳しい解説ポスト</a></p>
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
                                <div class="flex justify-end mb-4">
                                    <button onclick="copyToClipboard('#ldp-expression-regulation')" class="absolute top-2 right-2  text-gray-500 hover:text-gray-700 transition-colors">
                                        <svg class="w-5 h-5 block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                        </svg>
                                    </button>
                                </div>
                                <h4 class="font-semibold text-lg text-gray-800 mb-2">Q: 自民党は表現規制の党ですか？</h4>
                                <p class="text-gray-700">A: YesでもありNoでもあります。かつては間違いなくそうでした。しかしこの6年で、山田太郎議員と赤松健議員が大量得票して当選したため、表現規制には慎重になり、ついには<strong>党の公約にも「表現の自由」が載る</strong>ようになりました。</p>
                                <p>ただし、いまでも表現の自由を規制したい議員は一定数います。山田太郎議員の得票数が減ってしまうと、党内の議論での発言力も小さくなってしまいます。是非応援お願いします。</p>
                                <p><img src="/images/faq-05.png" /></p>
                            </div>
                            
                            <div id="ldp-party-discipline" class="bg-gray-50 p-4 rounded-lg relative">
                                <div class="flex justify-end mb-4">
                                    <button onclick="copyToClipboard('#ldp-party-discipline')" class="absolute top-2 right-2  text-gray-500 hover:text-gray-700 transition-colors">
                                        <svg class="w-5 h-5 block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                        </svg>
                                    </button>
                                </div>
                                <h4 class="font-semibold text-lg text-gray-800 mb-2">Q: 自民党だと党議拘束で山田太郎議員は何も出来ないと聞きました。本当でしょうか？</h4>
                                <p class="text-gray-700"><img src="/images/faq-01.png" /></p>
                                <p>A: 全くの間違いです。</p>
                                <p>山田太郎議員が自分の意見を通して数多くの実績を残していることからも分かると思います。</p>
                                <p>例えば、こども庁、こども基本法では保守派の議員からの強い反対がありましたが、成立させています。</p>
                                <p>また、表現の自由を守るうえで問題があれば、選対委員長の肝いり法案でも潰してしまいます。</p>
                                <p>たしかに、部会（政務調査会）を通った法案については党議拘束によって反対できなくなりますが、自民党の議員であれば部会には参加可能なので、そこで反対するなり修正させるなりができます。</p>
                                <p>さらには、山田太郎議員の場合は、部会に上る前の官僚が法案を作っている段階で修正させています（表現の自由に関わる法案の場合、官僚が相談に来ます）。</p>
                                <p>山田太郎議員はたくさんの法案を作る議員なので、むしろ党議拘束によって自らの法案を成立させることができ、メリットの方が上回っているかもしれません。</p>
                                <p><img src="/images/faq-hyogen-download-restrict.png" /></p>
                                <p class="mb-8"><a href="https://twitter.com/intent/tweet?text=pic.twitter.com/bHJvpX3pzq" target="_blank">この画像を使って X にポストする</a></p>
                            </div>

                            <div id="ldp-faction-influence" class="bg-gray-50 p-4 rounded-lg relative">
                                <div class="flex justify-end mb-4">
                                    <button onclick="copyToClipboard('#ldp-faction-influence')" class="absolute top-2 right-2  text-gray-500 hover:text-gray-700 transition-colors">
                                        <svg class="w-5 h-5 block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                        </svg>
                                    </button>
                                </div>
                                <h4 class="font-semibold text-lg text-gray-800 mb-2">Q: 党議拘束が問題じゃないとすると、なぜ自民党議員は自分が納得しない法案に賛成しているように見えるのでしょうか？</h4>
                                <p class="text-gray-700">A: 多くの議員は、派閥に所属し、支援団体から選挙で支援を受け、寄付をもらっています。そうした<strong>派閥の長や支援団体からの指示</strong>があると従わざるを得ないことがあります。</p>
                                <p class="text-gray-700">しかし<strong>山田太郎議員は無派閥、支援団体なし、団体献金なし</strong>で圧倒的得票をえているため、そうしたしがらみがないのです。</p>
                                <p><img src="/images/faq-02.png" /></p>
                            </div>

                            <div id="ldp-vs-opposition" class="bg-gray-50 p-4 rounded-lg relative">
                                <div class="flex justify-end mb-4">
                                    <button onclick="copyToClipboard('#ldp-vs-opposition')" class="absolute top-2 right-2  text-gray-500 hover:text-gray-700 transition-colors">
                                        <svg class="w-5 h-5 block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                        </svg>
                                    </button>
                                </div>
                                <h4 class="font-semibold text-lg text-gray-800 mb-2">Q: 山田さんのおかげで自民党が表現規制をしなくなったとはいえ、それでも野党のほうが安全では？</h4>
                                <p class="text-gray-700">A: 残念ながら、状況は非常に厳しいものがあります。</p>
                                <p>共産党、国民民主党、立憲民主党はいずれもアダルトなどの表現を積極的に規制する方針を打ち出しています。</p>
                                <p>参政党も、党首の神谷さんが<a href="https://x.com/jinkamiya/status/1937890297696141817" target="_blank">表現規制の必要性をXで発言</a>しています。</p>
                                <p><img src="/images/faq-06.png" /></p>
                            </div>

                            <div id="ldp-membership" class="bg-gray-50 p-4 rounded-lg relative">
                                <div class="flex justify-end mb-4">
                                    <button onclick="copyToClipboard('#ldp-membership')" class="absolute top-2 right-2  text-gray-500 hover:text-gray-700 transition-colors">
                                        <svg class="w-5 h-5 block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                        </svg>
                                    </button>
                                </div>
                                <h4 class="font-semibold text-lg text-gray-800 mb-2">Q: 自民党への入党方法は？</h4>
                                <p class="text-gray-700">A: <a href="https://taroyamada.jp/more-support/">こちら</a>をご覧ください。</p>
                            </div>

                            <!--
                            <div id="dislike-ldp" class="bg-gray-50 p-4 rounded-lg relative">
                                <div class="flex justify-end mb-4">
                                    <button onclick="copyToClipboard('#dislike-ldp')" class="absolute top-2 right-2  text-gray-500 hover:text-gray-700 transition-colors">
                                        <svg class="w-5 h-5 block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                        </svg>
                                    </button>
                                </div>
                                <h4 class="font-semibold text-lg text-gray-800 mb-2">Q: 自民党には投票したくないんだけど？</h4>
                                <p class="text-gray-700">A: よく分かります。</p>
                                <p>ただ、自民党は選挙互助会的な性格の強い政党で、右派から左派まで、幅広い議員がいます。</p>
                                <p></p>
                            </div>
                            -->
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
