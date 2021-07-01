<x-layout>
    <x-slot name="title">
        指示内容
    </x-slot>

    <h1 class="text-xl font-bold p-5">指示一覧</h1>

    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        @csrf

        <div class="max-w-screen-md mx-auto">

            <div class="my-3">
                <form action="{{ route('index') }}" method="get" class="flex justify-betstart">
                    <label class="block text-gray-700 text-sm font-bold mb-2">
                        開始
                    </label>
                    <input class="shadow appearance-none border rounded w-100 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mr-3"
                        type="date" name="start" value="{{ $start }}">
                    <label class="block text-gray-700 text-sm font-bold mb-2">
                        終了
                    </label>
                    <input class="shadow appearance-none border rounded w-100 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mr-3"
                    type="date" name="end" value="{{ $end }}">
                    <button type="button" id="clear" class="bg-transparent hover:bg-gray-500 text-gray-700 hover:text-white py-2 px-4 border border-gray-500 hover:border-transparent rounded mr-3">クリア</button>
                    <input type="submit" name="search" value="絞り込み" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                </form>
                <div class="text-right">
                    <button type="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        <a href="{{ route('create') }}">新規作成</a>
                    </button>
                </div>
            </div>
    
            <table class="table-fix w-full">
                <thead>
                    <tr>
                        <th class="px-4 py-2 w-32">日付</th>
                        <th class="px-4 py-2">指示内容</th>
                        <th class="px-4 py-2 w-28"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($instructions as $value)
                    <tr>
                        <td class="border px-4 py-2">{{ $value->date }}</td>
                        <td class="border px-4 py-2">{{ mb_substr($value->content, 0, 50) }}</td>
                        <td class="border px-4 py-2 text-center">
                            <a href="{{ route('show', ['instruction' => $value]) }}" class="bg-transparent hover:bg-blue-500 text-blue-700 hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">詳細</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>

    <script>
        document.getElementById('clear').addEventListener('click', function() {
            console.log(document.getElementsByName('start')[0]);
            document.getElementsByName('start')[0].setAttribute('value','');
            document.getElementsByName('end')[0].setAttribute('value','');
        });
    </script>

</x-layout>