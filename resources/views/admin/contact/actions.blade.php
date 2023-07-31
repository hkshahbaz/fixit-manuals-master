@isset($contact)
    @if(!$contact->trashed())
        <i class="icon-trash text-danger-800" onclick="delete_contact('{{ route('contact.destroy',[$contact->id]) }}',{{ $contact->id }})"></i>
    @else
        <i class="icon-database-refresh text-success-800" onclick="restore_contact('{{ route('restore.contact',[$contact->id]) }}',{{ $contact->id}})"></i>
        <i class="icon-trash text-danger-800" onclick="delete_contact_Permanent('{{ route('contact.permanently.delete',[$contact->id]) }}',{{ $contact->id}})"></i>
    @endif
@endisset
