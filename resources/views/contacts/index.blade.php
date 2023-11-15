<!-- resources/views/contacts/index.blade.php -->

<h1>Contacts</h1>
<a href="{{ route('contacts.create') }}" class="btn btn-primary">Create New Contact</a>
<table class="table">


    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($contacts as $contact)
            <tr>
                <td><a href="{{ route('contacts.show', $contact->id) }}">{{ $contact->name }}</a></td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->message }}</td>
                <td>
                    <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-primary">Edit</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
