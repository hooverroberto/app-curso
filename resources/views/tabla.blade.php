<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Tabla
        </h2>
    </x-slot>
    <div class="px-6 h-full text-gray-800">
        <table class="table table-striped table-hover">
            <thead>
                <th>ID</th>
                <th>Descripcion</th>
                <th>id_categoria</th>
            </thead>
            <tbody>
                @foreach($productos as $producto)
                <tr>
                    <td>{{$producto->id}}</td>
                    <td>{{$producto->descripcion}}</td>
                    <td>{{$producto->id_categoria}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>