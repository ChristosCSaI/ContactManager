<!DOCTYPE html>
<html>
<head>
    <title>Contacts</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1> Contacts</h1>
        
        <form method="GET" action="{{ route('contacts.index') }}" class="mb-3">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Search by name" value="{{ request()->input('search') }}">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit">Search</button>
                </div>
            </div>
        </form>

        <a href="{{ route('contacts.create') }}" class="btn btn-primary mb-3">Create New Contact</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Phone</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $contact)
                    <tr>
                        <td>{{ $contact->id }}</td>
                        <td>{{ $contact->first_name }}</td>
                        <td>{{ $contact->last_name }}</td>
                        <td>{{ $contact->phone }}</td>
                        <td>{{ $contact->description }}</td>
                        <td>
                            <a href="{{ route('contacts.show', $contact->id) }}" class="btn btn-sm btn-info">View</a>
                            <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="d-flex justify-content-center">
            {{ $contacts->links() }}
        </div>
    </div>
</body>
</html>
