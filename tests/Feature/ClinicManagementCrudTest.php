<?php

namespace Tests\Feature;

use Tests\TestCase;

class ClinicManagementCrudTest extends TestCase
{
    public function test_patient_routes_are_available(): void
    {
        $this->get('/patients')->assertStatus(200);
        $this->get('/patients/create')->assertStatus(200);
    }

    public function test_appointment_routes_are_available(): void
    {
        $this->get('/appointments')->assertStatus(200);
        $this->get('/appointments/create')->assertStatus(200);
    }
}
