@extends('layouts.app')

@section('title', 'Edit Patient')

@section('content')
    <div class="page-header">
        <h1>Edit Patient</h1>
        <a href="{{ route('patients.index') }}" class="btn btn-secondary">Back</a>
    </div>

    <div class="card">
        <form action="{{ route('patients.update', $patient->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-grid">
                <div class="field">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" value="{{ old('name', $patient->name) }}">
                    @error('name')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>

                <div class="field">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email', $patient->email) }}">
                    @error('email')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>

                <div class="field">
                    <label for="phone">Phone</label>
                    <input type="text" id="phone" name="phone" value="{{ old('phone', $patient->phone) }}">
                    @error('phone')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>

                <div class="field">
                    <label for="birth_date">Birth Date</label>
                    <input type="date" id="birth_date" name="birth_date"
                        value="{{ old('birth_date', $patient->birth_date) }}">
                    @error('birth_date')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>

                <div class="field">
                    <label for="gender">Gender</label>
                    <select id="gender" name="gender">
                        <option value="">Select Gender</option>
                        <option value="Male" {{ old('gender', $patient->gender) == 'Male' ? 'selected' : '' }}>Male</option>
                        <option value="Female" {{ old('gender', $patient->gender) == 'Female' ? 'selected' : '' }}>Female
                        </option>
                    </select>
                    @error('gender')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>

                <div class="field" style="grid-column: 1 / -1;">
                    <label for="address">Address</label>
                    <textarea id="address" name="address">{{ old('address', $patient->address) }}</textarea>
                    @error('address')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Update Patient</button>
                <a href="{{ route('patients.index') }}" class="btn btn-secondary">Back</a>
            </div>
        </form>
    </div>
@endsection