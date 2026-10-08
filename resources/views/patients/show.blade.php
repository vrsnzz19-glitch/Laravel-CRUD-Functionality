@extends('layouts.app')

@section('title', 'Patient Details')

@section('content')
    <div class="page-header">
        <h1>Patient Details</h1>
        <a href="{{ route('patients.index') }}" class="btn btn-secondary">Back</a>
    </div>

    <div class="card detail-card">
        <p><strong>Name:</strong> {{ $patient->name }}</p>
        <p><strong>Email:</strong> {{ $patient->email ?? '-' }}</p>
        <p><strong>Phone:</strong> {{ $patient->phone }}</p>
        <p><strong>Address:</strong> {{ $patient->address ?? '-' }}</p>
        <p><strong>Birth Date:</strong>
            {{ $patient->birth_date ? \Carbon\Carbon::parse($patient->birth_date)->format('F j, Y') : '-' }}</p>
        <p><strong>Gender:</strong> {{ $patient->gender }}</p>
    </div>
@endsection