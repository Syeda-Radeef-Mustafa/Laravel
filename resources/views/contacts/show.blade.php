<!-- resources/views/contacts/show.blade.php -->

<h1>{{ $contact->name }}</h1>
<p>Email: {{ $contact->email }}</p>
<p>Message: {{ $contact->message }}</p>

<a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-primary">Edit</a>

<form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Delete</button>
</form>
