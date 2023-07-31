@isset($car)
    @if(!$car->trashed())
        <i class="icon-trash text-danger-800" onclick="delete_car('{{ route('carModels.destroy',[$car]) }}',{{ $car }})"></i>

    @else
        <i class="icon-database-refresh text-success-800" onclick="restore_car('{{ route('restore.car',[$car]) }}',{{ $car}})"></i>
        <i class="icon-trash text-danger-800" onclick="delete_car_Permanent('{{ route('carModels.permanently.delete',[$car->id]) }}',{{ $car->id}})"></i>

    @endif
@endisset
