<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('よくある質問（FAQ）') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    <!-- 山田太郎議員について -->
                    <div class="mb-12">
                        <h3 class="text-2xl font-bold text-gray-800 mb-6 border-b-2 border-blue-500 pb-2">
                            山田太郎議員について
                        </h3>
                        
                        <div class="space-y-6">
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <h4 class="font-semibold text-lg text-gray-800 mb-2">Q: 山田太郎議員の経歴を教えてください</h4>
                                <p class="text-gray-700">A: 山田太郎議員は○○年生まれ、○○大学卒業後、○○業界で○○年間の実務経験を積み、○○年に政界入りしました。これまで○○委員会委員長、○○政務官などを歴任し、現在は参議院議員として活動しています。</p>
                            </div>
                            
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <h4 class="font-semibold text-lg text-gray-800 mb-2">Q: 主な政治理念は何ですか？</h4>
                                <p class="text-gray-700">A: 「国民一人ひとりが輝ける社会の実現」を基本理念とし、経済成長と社会保障の両立、教育の充実、地方創生に重点を置いた政策を推進しています。</p>
                            </div>
                            
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <h4 class="font-semibold text-lg text-gray-800 mb-2">Q: どのような委員会に所属していますか？</h4>
                                <p class="text-gray-700">A: 現在、○○委員会、○○特別委員会に所属し、○○分野の政策立案に積極的に取り組んでいます。</p>
                            </div>
                        </div>
                    </div>

                    <!-- 選挙について -->
                    <div class="mb-12">
                        <h3 class="text-2xl font-bold text-gray-800 mb-6 border-b-2 border-green-500 pb-2">
                            選挙について
                        </h3>
                        
                        <div class="space-y-6">
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <h4 class="font-semibold text-lg text-gray-800 mb-2">Q: 次回の選挙はいつですか？</h4>
                                <p class="text-gray-700">A: 参議院議員の任期は6年で、次回の参議院選挙は○○年夏頃に予定されています。正確な日程は内閣が決定し、公示されます。</p>
                            </div>
                            
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <h4 class="font-semibold text-lg text-gray-800 mb-2">Q: どの選挙区から立候補していますか？</h4>
                                <p class="text-gray-700">A: 山田太郎議員は全国比例代表選挙区から立候補しています。全国どこからでも「山田太郎」とお書きいただけます。</p>
                            </div>
                            
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <h4 class="font-semibold text-lg text-gray-800 mb-2">Q: 投票方法を教えてください</h4>
                                <p class="text-gray-700">A: 参議院選挙では、選挙区選挙と比例代表選挙の2つの投票があります。比例代表選挙では、政党名または個人名（山田太郎）をお書きください。</p>
                            </div>
                        </div>
                    </div>

                    <!-- 自民党について -->
                    <div class="mb-12">
                        <h3 class="text-2xl font-bold text-gray-800 mb-6 border-b-2 border-red-500 pb-2">
                            自民党について
                        </h3>
                        
                        <div class="space-y-6">
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <h4 class="font-semibold text-lg text-gray-800 mb-2">Q: 自民党は表現規制の党ですか？</h4>
                                <p class="text-gray-700">A: YesでもありNoでもあります。かつては間違いなくそうでした。しかしこの6年で、山田太郎議員と赤松健議員が大量得票して当選したため、表現規制には慎重になり、ついには党の公約にも「表現の自由」が載るようになりました。</p>
                                <p><img src="/images/faq-05.png" /></p>
                            </div>
                            
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <h4 class="font-semibold text-lg text-gray-800 mb-2">Q: 自民党だと党議拘束で山田太郎議員は何も出来ないと聞きました。本当でしょうか？</h4>
                                <p class="text-gray-700">A: 全くの間違いです。山田太郎議員が自分の意見を通して数多くの実績を残していることからも分かると思います。</p>
                                <p><img src="/images/faq-01.png" /></p>
                            </div>

                            <div class="bg-gray-50 p-4 rounded-lg">
                                <h4 class="font-semibold text-lg text-gray-800 mb-2">Q: 党議拘束が問題じゃないとすると、なぜ自民党議員は自分が納得しない法案に賛成しているように見えるのでしょうか？</h4>
                                <p class="text-gray-700">A: 多くの議員は、派閥に所属し、支援団体から選挙で支援を受け、寄付をもらっています。そうした派閥の長や支援団体からの指示があると従わざるを得ないことがあります。</p>
                                <p class="text-gray-700">しかし山田太郎議員は無派閥、支援団体なし、団体献金なしで圧倒的得票をえているため、そうしたしがらみがないのです。</p>
                                <p><img src="/images/faq-02.png" /></p>
                            </div>

                            <div class="bg-gray-50 p-4 rounded-lg">
                                <h4 class="font-semibold text-lg text-gray-800 mb-2">Q: 山田さんのおかげで自民党が表現規制をしなくなったとはいえ、それでも野党のほうが安全では？</h4>
                                <p class="text-gray-700">A: 残念ながら、状況は非常に厳しいものがあります。共産党、国民民主党、立憲民主党はいずれもアダルトなどの表現を積極的に規制する方針を打ち出しています。</p>
                                <p><img src="/images/faq-06.png" /></p>
                            </div>

                            <div class="bg-gray-50 p-4 rounded-lg">
                                <h4 class="font-semibold text-lg text-gray-800 mb-2">Q: 自民党への入党方法は？</h4>
                                <p class="text-gray-700">A: <a href="https://taroyamada.jp/more-support/">こちら</a>をご覧ください。</p>
                            </div>
                        </div>
                    </div>

                    <!-- 政策について -->
                    <div class="mb-12">
                        <h3 class="text-2xl font-bold text-gray-800 mb-6 border-b-2 border-purple-500 pb-2">
                            政策について
                        </h3>
                        
                        <div class="space-y-6">
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <h4 class="font-semibold text-lg text-gray-800 mb-2">Q: 重点的に取り組んでいる政策分野は？</h4>
                                <p class="text-gray-700">A: 特に経済政策、教育政策、社会保障制度の充実に力を入れています。デジタル化の推進や地方創生にも積極的に取り組んでいます。</p>
                            </div>
                            
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <h4 class="font-semibold text-lg text-gray-800 mb-2">Q: 子育て支援についてどのような政策を推進していますか？</h4>
                                <p class="text-gray-700">A: 保育所の整備、育児休業制度の充実、児童手当の拡充など、子育て世代が安心して子どもを育てられる環境づくりに取り組んでいます。</p>
                            </div>
                            
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <h4 class="font-semibold text-lg text-gray-800 mb-2">Q: 地方創生についてはどのような取り組みを？</h4>
                                <p class="text-gray-700">A: 地方の特色を活かした産業振興、UIJターンの促進、インフラ整備など、地方が自立的に発展できる政策を推進しています。</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
