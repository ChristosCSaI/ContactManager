<!DOCTYPE html>
<html>
<head>
    <title>Edit Contact</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Edit Contact</h1>
        <form action="{{ route('contacts.update', $contact->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="first_name">First Name:</label>
                <input type="text" class="form-control" id="first_name" name="first_name" value="{{ $contact->first_name }}" required>
            </div>
            <div class="form-group">
                <label for="last_name">Last Name:</label>
                <input type="text" class="form-control" id="last_name" name="last_name" value="{{ $contact->last_name }}" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="text" class="form-control" id="phone" name="phone" value="{{ $contact->phone }}">
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" id="description" name="description">{{ $contact->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>
