@extends('layouts.app')

@section('title', 'Add Appointment')

@section('content')
    <div class="page-header">
        <h1>Add Appointment</h1>
        <a href="{{ route('appointments.index') }}" class="btn btn-secondary">Back</a>
    </div>

    <div class="card">
        <form action="{{ route('appointments.store') }}" method="POST">
            @csrf

            <div class="form-grid">
                <div class="field">
                    <label for="patient_id">Patient</label>
                    <select id="patient_id" name="patient_id">
                        <option value="">Select Patient</option>
                        @foreach ($patients as $patient)
                            <option value="{{ $patient->id }}" {{ old('patient_id') == $patient->id ? 'selected' : '' }}>
                                {{ $patient->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('patient_id')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>

                <div class="field">
                    <label for="appointment_date">Appointment Date</label>
                    <input type="date" id="appointment_date" name="appointment_date" value="{{ old('appointment_date') }}">
                    @error('appointment_date')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>

                <div class="field">
                    <label for="appointment_time">Appointment Time</label>
                    <input type="time" id="appointment_time" name="appointment_time" value="{{ old('appointment_time') }}">
                    @error('appointment_time')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>

                <div class="field">
                    <label for="doctor">Doctor</label>
                    <input type="text" id="doctor" name="doctor" value="{{ old('doctor') }}">
                    @error('doctor')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>

                <div class="field">
                    <label for="status">Status</label>
                    <select id="status" name="status">
                        <option value="Pending" {{ old('status') == 'Pending' ? 'selected' : '' }}>Pending</option>
                        <option value="Confirmed" {{ old('status') == 'Confirmed' ? 'selected' : '' }}>Confirmed</option>
                        <option value="Completed" {{ old('status') == 'Completed' ? 'selected' : '' }}>Completed</option>
                        <option value="Cancelled" {{ old('status') == 'Cancelled' ? 'selected' : '' }}>Cancelled</option>
                    </select>
                    @error('status')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>

                <div class="field" style="grid-column: 1 / -1;">
                    <label for="notes">Notes</label>
                    <textarea id="notes" name="notes">{{ old('notes') }}</textarea>
                    @error('notes')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Save Appointment</button>
                <a href="{{ route('appointments.index') }}" class="btn btn-secondary">Back</a>
            </div>
        </form>
    </div>
@endsection