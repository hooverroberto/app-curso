<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Inventario
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="bg-white">
                    <div class="mx-auto max-w-2xl py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-center">
                                            ID
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-center">
                                            Descripción
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-center">
                                            id_frutasyverduras
                                        </th>               
                                    </tr>
                                </thead>
                                
                                <tbody>
                                    @foreach($inventarios as $inventario)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white text-center">
                                            {{$inventario->id}}
                                        </th>
                                        <td class="px-6 py-4 text-center">
                                            {{$inventario->descripcion}}
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            {{$inventario->id_frutayverdura}}
                                        </td>               
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>