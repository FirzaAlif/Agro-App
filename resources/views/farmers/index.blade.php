@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Farmers List</h1>

    <!-- Success/Error Messages -->
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    @if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif

    <!-- Button trigger modal for adding farmer -->
    <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addFarmerModal">
        Add Farmer
    </button>

    <!-- Farmers Table -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Experience (years)</th>
                <th>Assets</th>
                <th>Relation</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($farmers as $farmer)
            <tr>
                <td>{{ $farmer->name }}</td>
                <td>{{ $farmer->age }}</td>
                <td>{{ $farmer->experience }}</td>
                <td>{{ $farmer->assets }}</td>
                <td>{{ $farmer->relation }}</td>
                <td>
                    <!-- Edit Button trigger modal -->
                    <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editFarmerModal{{ $farmer->id }}">
                        Edit
                    </button>

                    <!-- Delete Button -->
                    <form action="{{ route('farmers.destroy', $farmer->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>

            <!-- Edit Farmer Modal -->
            <div class="modal fade" id="editFarmerModal{{ $farmer->id }}" tabindex="-1" aria-labelledby="editFarmerModalLabel{{ $farmer->id }}" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editFarmerModalLabel{{ $farmer->id }}">Edit Farmer</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="{{ route('farmers.update', $farmer->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" name="name" value="{{ $farmer->name }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="age" class="form-label">Age</label>
                                    <input type="number" class="form-control" name="age" value="{{ $farmer->age }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="experience" class="form-label">Experience (years)</label>
                                    <input type="number" class="form-control" name="experience" value="{{ $farmer->experience }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="assets" class="form-label">Assets</label>
                                    <input type="number" class="form-control" name="assets" value="{{ $farmer->assets }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="relation" class="form-label">Relation</label>
                                    <input type="text" class="form-control" name="relation" value="{{ $farmer->relation }}" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </tbody>
    </table>

    <!-- Add Farmer Modal -->
    <div class="modal fade" id="addFarmerModal" tabindex="-1" aria-labelledby="addFarmerModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addFarmerModalLabel">Add New Farmer</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('farmers.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="age" class="form-label">Age</label>
                            <input type="number" class="form-control" name="age" required>
                        </div>
                        <div class="mb-3">
                            <label for="experience" class="form-label">Experience (years)</label>
                            <input type="number" class="form-control" name="experience" required>
                        </div>
                        <div class="mb-3">
                            <label for="assets" class="form-label">Assets</label>
                            <input type="number" class="form-control" name="assets" required>
                        </div>
                        <div class="mb-3">
                            <label for="relation" class="form-label">Relation</label>
                            <input type="text" class="form-control" name="relation" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add Farmer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
