@extends('layouts.app')

@section('title', 'Appointments')

@section('content')
    <div class="page-header">
        <h1>APPOINTMENTS</h1>
        <a href="{{ route('appointments.create') }}" class="btn btn-primary">Add Appointment</a>
    </div>

    <div class="card">
        @if ($appointments->isEmpty())
            <p class="empty">No appointments found.</p>
        @else
            <table>
                <thead>
                    <tr>
                        <th>Patient</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Doctor</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($appointments as $appointment)
                        <tr>
                            <td>{{ $appointment->patient ? $appointment->patient->name : 'N/A' }}</td>
                            <td>{{ $appointment->appointment_date }}</td>
                            <td>{{ $appointment->appointment_time }}</td>
                            <td>{{ $appointment->doctor }}</td>
                            <td>{{ $appointment->status }}</td>
                            <td>
                                <div class="actions">
                                    <a href="{{ route('appointments.show', $appointment->id) }}" class="btn btn-secondary">View</a>
                                    <a href="{{ route('appointments.edit', $appointment->id) }}" class="btn btn-secondary">Edit</a>
                                    <form action="{{ route('appointments.destroy', $appointment->id) }}" method="POST"
                                        onsubmit="return confirm('Are you sure you want to delete this appointment?')">
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