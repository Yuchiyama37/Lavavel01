{"filter":false,"title":"simutator.blade.php","tooltip":"/cms/resources/views/simutator.blade.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":0,"column":0},"end":{"row":48,"column":15},"action":"insert","lines":["<x-app-layout>","","    <!--ヘッダー[START]-->","    <x-slot name=\"header\">","        <div class=\"flex\">","        <h2 class=\"font-semibold text-xl text-gray-800 leading-tight\">","            <form action=\"{{ route('vessel_index') }}\" method=\"GET\" class=\"w-full max-w-lg\">","                <x-button class=\"bg-gray-100 text-gray-900\">{{ __('船一覧') }}</x-button>","            </form>","        </h2>","         <h2 class=\"font-semibold text-xl text-gray-800 leading-tight\">","            <form action=\"{{ route('product_index') }}\" method=\"GET\" class=\"w-full max-w-lg\">","                <x-button class=\"bg-gray-100 text-gray-900\">{{ __('商品一覧') }}</x-button>","            </form>","        </h2>","        </div>","    </x-slot>","    <!--ヘッダー[END]-->","            ","        <!-- バリデーションエラーの表示に使用-->","       <x-errors id=\"errors\" class=\"bg-blue-500 rounded-lg\">{{$errors}}</x-errors>","        <!-- バリデーションエラーの表示に使用-->","    ","    <!--全エリア[START]-->","    <div class=\" bg-gray-100 text-gray-700 text-left px-4 py-4 m-2\">","        ","        ","","        <!--上段エリア[START]--> ","        <x-calendar>","            ","        </x-calendar>","     ","            ","    ","","    ","        <!--左エリア[END]--> ","   ","    ","    <!--右側エリア[START]-->","    ","    <!--右側エリア[[END]-->","    ","    </div>   "," <!--全エリア[END]-->"," ","","</x-app-layout>"],"id":1}]]},"ace":{"folds":[],"scrolltop":389,"scrollleft":0,"selection":{"start":{"row":32,"column":5},"end":{"row":32,"column":5},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":23,"state":"start","mode":"ace/mode/php_laravel_blade"}},"timestamp":1679101994136,"hash":"a0c7f4f927f575cee06bb216b7385f6bb8f5b129"}