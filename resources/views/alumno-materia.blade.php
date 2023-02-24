<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Alumno-Materia
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="bg-white">
                    <div class="mx-auto max-w-2xl py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                            <h3 class="text-center mb-5">El alumno <span><strong class="text-red-800">{{$alumno->nombre}}</strong> </span> cursa las materias:</h3>
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-center">
                                            Materias
                                        </th>
                                        
                                    </tr>
                                </thead>
                                
                                <tbody>
                                    @foreach($alumno->materias as $registro)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white text-center">
                                            {{$registro->nombre}}
                                        </th>              
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-5">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="bg-white">
                    <div class="mx-auto max-w-2xl py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                            <h3 class="text-center mb-5">La materia de <span> <strong class="text-green-400"> {{$materia->nombre}} </strong> </span> cursa los siguientes alumnos:</h3>
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-center">
                                            Alumnos
                                        </th>
                                        
                                    </tr>
                                </thead>
                                
                                <tbody>
                                    @foreach($materia->alumnos as $registro)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white text-center">
                                            {{$registro->nombre}}
                                        </th>              
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