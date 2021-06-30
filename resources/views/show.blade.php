<x-layout>
    <x-slot name="title">
        指示詳細
    </x-slot>

    <h1 class="text-xl font-bold p-5">指示詳細</h1>

    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        @csrf

        <div class="text-right">
            <a href="{{ route('index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">戻る</a>
        </div>

        <div class="font-bold text-xl mb-2 mt-3">指示内容</div>
        <div class="mx-3 mb-10">{!! nl2br(e($instruction->content)) !!}</div>
        <div class="font-bold text-xl mb-2 mt-3">日時</div>
        <div class="mx-3 mb-10">{{ $instruction->date }}</div>

        <a href="{{ route('edit', ['instruction' => $instruction]) }}" class="bg-transparent hover:bg-blue-500 text-blue-700 hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">編集</a>
        <a href="" class="bg-transparent hover:bg-gray-500 text-gray-700 hover:text-white py-2 px-4 border border-gray-500 hover:border-transparent rounded">削除</a>

    </div>

</x-layout>