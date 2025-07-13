<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('よくある質問（落選運動）') }}
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

                    <!-- 落選運動について -->
                    <div class="mb-12">
                        <h3 class="text-2xl font-bold text-gray-800 mb-6 border-b-2 border-red-500 pb-2">
                            落選運動について
                        </h3>

                        <div class="space-y-6">
                            <div id="what-is-rakusen" class="bg-gray-50 p-4 rounded-lg relative">
                                <div class="flex justify-end mb-4">
                                    <button onclick="copyToClipboard('#what-is-rakusen')" class="absolute top-2 right-2  text-gray-500 hover:text-gray-700 transition-colors">
                                        <svg class="w-5 h-5 block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                        </svg>
                                    </button>
                                </div>
                                <h4 class="font-semibold text-lg text-gray-800 mb-2">Q: 落選運動とは何ですか？</h4>
                                <p class="text-gray-700">A: 落選運動とは、特定の候補者の当選を阻止することを目的とした選挙活動です。</p>
                                <p>これは表現の自由や政治活動の一環として認められている活動であり、有権者が自らの意思を表明する重要な手段の一つです。</p>
                                <p>ただし、選挙法に定められたルールに従って行う必要があります。</p>
                            </div>

                            <div id="how-to-rakusen" class="bg-gray-50 p-4 rounded-lg relative">
                                <div class="flex justify-end mb-4">
                                    <button onclick="copyToClipboard('#how-to-rakusen')" class="absolute top-2 right-2  text-gray-500 hover:text-gray-700 transition-colors">
                                        <svg class="w-5 h-5 block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                        </svg>
                                    </button>
                                </div>
                                <h4 class="font-semibold text-lg text-gray-800 mb-2">Q: 落選運動はどのように行えばよいですか？</h4>
                                <p class="text-gray-700">A: 落選運動を行う際は、公職選挙法に定められたルールを遵守することが重要です。</p>
                                <p>具体的には、事実に基づいた情報の提供や政策に関する批判的な議論を通じて、有権者に判断材料を提供することが基本となります。</p>
                                <p>誹謗中傷や虚偽の情報の流布は避け、建設的な政治的議論を心がけることが大切です。</p>
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
