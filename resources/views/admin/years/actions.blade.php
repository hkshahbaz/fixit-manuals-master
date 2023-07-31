@isset($year)
    @if(!$year->trashed())
        <i class="icon-trash text-danger-800" onclick="delete_year('{{ route('year.destroy',[$year->id]) }}',{{ $year->id }})"></i>

    @else
        <i class="icon-database-refresh text-success-800" onclick="restore_year('{{ route('restore.year',[$year->id]) }}',{{ $year->id}})"></i>
        <i class="icon-trash text-danger-800" onclick="delete_year_Permanent('{{ route('year.permanently.delete',[$year->id]) }}',{{ $year->id}})"></i>

    @endif
@endisset
