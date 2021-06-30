<x-layout>
    <x-slot name="title">
        指示内容
    </x-slot>

    <h1 class="text-xl font-bold p-5">指示一覧</h1>

    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        @csrf

        <div class="text-right">
            <a href="{{ route('create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">新規作成</a>
        </div>

        <table class="table-fix">
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
                    <td class="border px-4 py-2">{{ $value->content }}</td>
                    <td class="border px-4 py-2 text-center">
                        <a href="{{ route('show', ['instruction' => $value]) }}" class="bg-transparent hover:bg-blue-500 text-blue-700 hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">詳細</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

</x-layout>