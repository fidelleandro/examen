@extends('layouts.home') 
@section('content')
<div class="container my-5 py-5 px-lg-5">
    <div class="row g-5 py-5">
            @if( isset($data) && count($data) )
            <table class="table-fixed relative min-w-full divide-y divide-gray-200 z-0 js-table">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="max-w-[4rem] px-6 py-3 text-left text-xs font-medium text-gray-600 tracking-normal"> 
                            Cliente
                        </th>
                        <th scope="col" class="w-1/2 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Campaña
                        </th>
                        <th scope="col" class="w-1/4 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            PlanMedio
                        </th>
                        <th scope="col" class="w-1/4 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            NombrePeriodista
                        </th>
                        <th scope="col" class="max-w-[4rem] px-6 py-3 text-left text-xs font-medium text-gray-600 tracking-normal"> 
                            ApellidoPeriodista
                        </th>
                        <th scope="col" class="w-1/2 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Medio
                        </th>
                        <th scope="col" class="w-1/4 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            NombrePrograma
                        </th>
                        <th scope="col" class="w-1/4 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            PlataformaDescripción
                        </th>
                        <th scope="col" class="w-1/4 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            PlataformaClasificación
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($data as $item)
                        <tr class="relative hover:bg-surface-hovered cursor-pointer js-table-row" data-location="">
                             
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $item->cliente }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $item->campaign }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $item->PlanMedio }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $item->NombrePeriodista }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $item->ApellidoPeriodista }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $item->Medio }}
                            </td> 
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $item->NombrePrograma }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $item->PlataformaDescripción }}
                            </td> 
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $item->PlataformaClasificación }}
                            </td> 
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @if ( $data->hasPages() )
                        <div class="bg-white px-4 py-3 border-t border-gray-200 sm:px-6">
                            {!! $data->withQueryString()->links() !!}
                        </div>
            @endif
        @else
            <div class="p-4">
                No hay datos
            </div>
        @endif
    </div>
</div>
</div>
</div> 
<!--------------------------------------------------------------------------------------->

@endsection