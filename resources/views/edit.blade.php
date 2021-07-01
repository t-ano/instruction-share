<x-layout>
    <x-slot name="title">
        編集
    </x-slot>

    <h1 class="text-xl font-bold p-5">編集</h1>

    @if ($errors->any())
    <div class="text-red-500 text-s italic">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    
    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="{{ route('update', ['instruction' => $instruction]) }}" method="post">
        @csrf
    
        <div class="text-right">
            <a href="{{ route('show', ['instruction' => $instruction]) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">戻る</a>
        </div>
        
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">
                指示内容
            </label>
            <textarea
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                name="content" rows="20">{{ $instruction->content }}</textarea>
        </div>
        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2">
                日付
            </label>
            <div>{{ $instruction->date }}</div>
        </div>
        <div class="flex items-center justify-between">
            <button
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                type="submit">
                更新
            </button>
        </div>
        
    </form>
</x-layout>