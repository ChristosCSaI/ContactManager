<!DOCTYPE html>
<html>
<head>
    <title>Contact Details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Contact Details</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $contact->first_name }} {{ $contact->last_name }}</h5>
                <p class="card-text"><strong>Phone:</strong> {{ $contact->phone }}</p>
                <p class="card-text"><strong>Description:</strong> {{ $contact->description }}</p>
                <a href="{{ route('contacts.index') }}" class="btn btn-primary">Back to Contacts</a>
            </div>
        </div>
    </div>
</body>
</html>
