@if(isset($sex))
    @if(!$sex->trashed())
        <a href="{{ route('gender.edit', [$sex->id]) }}" title="Edit Project"><i class="icon-pencil5 mr-1 icon-1x"></i></a>
        <a href="javascript:sdelete('gender/{{$sex->id}}')" title="Suspend User" class="delete-row delete-color" data-id="{{ $sex->id }}"><i class="icon-bin mr-3 icon-1x" style="color:red;"></i></a>
    @else
        <a href="javascript:restore('gender/restore/{{$sex->id}}')" title="Restore User" class="restore-row restore-color" data-id="{{ $sex->id }}"><i
                class="icon-loop3"></i></a>
        <a href="javascript:permanent('gender/deletePermanently/{{$sex->id}}')" title="Delete Permanently" class="delete-permanently-row delete-color" style="margin: 20px;" data-id="{{ $sex->id }}"><i
                class="icon-cancel-square2" style="color: red;"></i></a>
    @endif
@endif
