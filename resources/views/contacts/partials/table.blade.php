<table id="contactsTable" class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Gender</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @forelse($contacts as $contact)
        <tr id="contact-{{$contact->id}}">
            <td>{{ $contact->name }}</td>
            <td>{{ $contact->email }}</td>
            <td>{{ $contact->phone }}</td>
            <td>{{ ucfirst($contact->gender) }}</td>
            <td>
                <div class="btn-group">
                    <a href="{{ route('contacts.show', $contact) }}" class="btn btn-sm btn-info">
                        <i class="bi bi-eye"></i>
                    </a>
                    <a href="{{ route('contacts.edit', $contact) }}" class="btn btn-sm btn-primary">
                        <i class="bi bi-pencil"></i>
                    </a>
                    <a href="{{ route('contacts.merge', $contact) }}" class="btn btn-sm btn-warning">
                        <i class="bi bi-archive"></i>
                    </a>
                    <button type="button" class="btn btn-sm btn-danger ajaxdelete" href="{{ route('contacts.destroy', $contact) }}" data-id="{{ $contact->id }}" >
                        <i class="bi bi-trash"></i>
                    </button>
                </div>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="5" class="text-center">No contacts found</td>
        </tr>
        @endforelse
    </tbody>
</table>

@if($contacts->hasPages())
<div class="d-flex justify-content-center">
    {{ $contacts->links() }}
</div>
@endif