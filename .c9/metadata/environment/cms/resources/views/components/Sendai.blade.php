{"filter":false,"title":"Sendai.blade.php","tooltip":"/cms/resources/views/components/Sendai.blade.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":0,"column":0},"end":{"row":35,"column":22},"action":"insert","lines":["<!-- 一覧表示[START] -->","    <div class=\"\"> ","","      ","     ","            <table border=\"1\">","                <thead>","                    <tr>","                        <th>Date</th>","                        <th>Propane Quantity</th>","                        <th>Butane Quantity</th>","                    </tr>","                </thead>","                <tbody>","                    ","                    @foreach ($inventories as $inventory)","                        @if($inventory->terminal=\"仙台\")","                        <tr>","                            <td>{{ $inventory->date }}</td>","                            <td>{{ $inventory->terminal }}</td>","                            <td>{{ $inventory->propane }}</td>","                            <td>{{ $inventory->butane }}</td>","                        </tr>","                        @endif","                    @endforeach","                 ","                </tbody>","            </table>","            ","      ","   ","   ","    </div>  ","    ","    ","    <!-- 一覧表示[END] -->"],"id":1}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":6,"column":23},"end":{"row":6,"column":23},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1679225770143,"hash":"a9ed62f6f6346c6d31838c242b3dbc85929b5646"}