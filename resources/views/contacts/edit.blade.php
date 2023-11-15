<!-- resources/views/contacts/edit.blade.php -->

<h1>Edit Contact</h1>

<form action="{{ route('contacts.update', $contact->id) }}" method="POST">
    @csrf
    @method('PATCH')

    <label for="name">Name:</label>
    <input type="text" name="name" value="{{ $contact->name }}" required>
    
    <label for="email">Email:</label>
    <input type="email" name="email" value="{{ $contact->email }}" required>

    <label for="message">Message:</label>
    <textarea name="message" rows="4" required>{{ $contact->message }}</textarea>

    <button type="submit" class="btn btn-primary">Update Contact</button>
</form>
