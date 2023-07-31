@isset($brand)
    @if(!$brand->trashed())
        <i class="icon-trash text-danger-800" onclick="delete_brand('{{ route('carBrand.destroy',[$brand]) }}',{{ $brand }})"></i>

    @else
        <i class="icon-database-refresh text-success-800" onclick="restore_brand('{{ route('restore.brand',[$brand]) }}',{{ $brand}})"></i>
        <i class="icon-trash text-danger-800" onclick="delete_brand_Permanent('{{ route('brand.permanently.delete',[$brand->id]) }}',{{ $brand->id}})"></i>

    @endif
@endisset
