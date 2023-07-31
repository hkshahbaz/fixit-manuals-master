@isset($manual)
    @if(!$manual->trashed())
        <i class="icon-trash text-danger-800" onclick="delete_manual('{{ route('manuals.destroy',[$manual]) }}',{{ $manual }})"></i>

    @else
        <i class="icon-database-refresh text-success-800" onclick="restore_manual('{{ route('restore.manuals',[$manual]) }}',{{ $manual}})"></i>
        <i class="icon-trash text-danger-800" onclick="delete_manual_Permanent('{{ route('manuals.permanently.delete',[$manual->id]) }}',{{ $manual->id}})"></i>

    @endif
@endisset
