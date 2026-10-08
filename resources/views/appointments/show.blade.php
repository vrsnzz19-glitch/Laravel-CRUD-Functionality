@extends('layouts.app')

@section('title', 'Appointment Details')

@section('content')
    <div class="page-header">
        <h1>Appointment Details</h1>
        <a href="{{ route('appointments.index') }}" class="btn btn-secondary">Back</a>
    </div>

    <div class="card detail-card">
        <p><strong>Patient:</strong> {{ $appointment->patient ? $appointment->patient->name : 'N/A' }}</p>
        <p><strong>Date:</strong> {{ $appointment->appointment_date }}</p>
        <p><strong>Time:</strong> {{ $appointment->appointment_time }}</p>
        <p><strong>Doctor:</strong> {{ $appointment->doctor }}</p>
        <p><strong>Status:</strong> {{ $appointment->status }}</p>
        <p><strong>Notes:</strong> {{ $appointment->notes ?? '-' }}</p>
    </div>
@endsection