@extends('layouts.app')

@section('title', 'Patients')

@section('content')
    <div class="page-header">
        <h1>PATIENTS</h1>
        <a href="{{ route('patients.create') }}" class="btn btn-primary">Add Patient</a>
    </div>

    <div class="card">
        @if ($patients->isEmpty())
            <p class="empty">No patients found.</p>
        @else
            <table>
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
                    @foreach ($patients as $patient)
                        <tr>
                            <td>{{ $patient->name }}</td>
                            <td>{{ $patient->email ?? '-' }}</td>
                            <td>{{ $patient->phone }}</td>
                            <td>{{ $patient->gender }}</td>
                            <td>
                                <div class="actions">
                                    <a href="{{ route('patients.show', $patient->id) }}" class="btn btn-secondary">View</a>
                                    <a href="{{ route('patients.edit', $patient->id) }}" class="btn btn-secondary">Edit</a>
                                    <form action="{{ route('patients.destroy', $patient->id) }}" method="POST"
                                        onsubmit="return confirm('Are you sure you want to delete this patient?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection