<!-- resources/views/contacts/create.blade.php -->

<h1>Create New Contact</h1>

<form action="{{ route('contacts.store') }}" method="POST">
    @csrf
    <label for="name">Name:</label>
    <input type="text" name="name" required>
    
    <label for="email">Email:</label>
    <input type="email" name="email" required>

    <label for="message">Message:</label>
    <textarea name="message" rows="4" required></textarea>

    <button type="submit" class="btn btn-success">Create Contact</button>
</form>
