@isset($user)
    @if(!$user->trashed())
        <i class="icon-trash text-danger-800" onclick="delete_user('{{ route('users.destroy',[$user]) }}',{{ $user }})"></i>

    @else
        <i class="icon-database-refresh text-success-800" onclick="restore_user('{{ route('restore.user',[$user]) }}',{{ $user}})"></i>
        <i class="icon-trash text-danger-800" onclick="delete_user_Permanent('{{ route('permanently.delete',[$user->id]) }}',{{ $user->id}})"></i>

    @endif
@endisset
