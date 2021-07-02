<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Minha assinatura') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table  class="min-w-full bg-white">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4">Data</th>
                                <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4">Preço</th>
                                <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4">Download</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach($invoices as $item)
                                <tr>
                                    <td  class="px-6 py-4 border-b text-sm">{{ $item->date()->toFormattedDateString() }}</td>
                                    <td  class="px-6 py-4 border-b text-sm">{{ $item->total() }}</td>
                                    <td  class="px-6 py-4 border-b text-sm">
                                        <a href="{{ route('subscriptions.invoice.download', $item->id) }}" class="px-5 py-2 border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none">
                                        Baixar
                                        </a>
                                    </td>
                                </tr>
                           @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>