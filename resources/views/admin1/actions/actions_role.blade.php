@if(isset($role))
        @if(!$role->trashed())
            <a href="{{ route('roles.edit', [$role->id]) }}" title="Edit Project"><i class="icon-pencil5 mr-1 icon-1x"></i></a>
            <a href="javascript:sdelete('roles/{{$role->id}}')" title="Suspend User" class="delete-row delete-color" data-id="{{ $role->id }}"><i class="icon-bin mr-3 icon-1x" style="color:red;"></i></a>
        @else
            <a href="javascript:restore('roles/restore/{{$role->id}}')" title="Restore User" class="restore-row restore-color" data-id="{{ $role->id }}"><i
                    class="icon-loop3"></i></a>
            <a href="javascript:permanent('roles/deletePermanently/{{$role->id}}')" title="Delete Permanently" class="delete-permanently-row delete-color" style="margin: 20px;" data-id="{{ $role->id }}"><i
                    class="icon-cancel-square2" style="color: red;"></i></a>
        @endif
@endif
