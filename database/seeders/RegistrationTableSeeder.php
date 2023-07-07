<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Registration;


class RegistrationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Existing Customers
        // Customer A
        Registration::create([
            'id' => 1,
            'name' => 'Customer A',
            'email' => 'customer_a@example.com',
            'phone' => '123456789',
            'address' => '123 Main St',
            'preferred_date' => '2023-07-10',
            'preferred_time' => '10:00',
            'down_payment' => 20,
            'eligibility' => true,
            'purchase_status' => 'In progress',
            'loan_amount' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Customer B
        Registration::create([
            'id' => 2,
            'name' => 'Customer B',
            'email' => 'customer_b@example.com',
            'phone' => '987654321',
            'address' => '456 Elm St',
            'preferred_date' => '2023-07-11',
            'preferred_time' => '15:30',
            'down_payment' => 0,
            'eligibility' => false,
            'purchase_status' => 'Canceled',
            'loan_amount' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Customer C
        Registration::create([
            'id' => 11,
            'name' => 'Customer C',
            'email' => 'customer_c@example.com',
            'phone' => '555555555',
            'address' => '789 Oak St',
            'preferred_date' => '2023-07-12',
            'preferred_time' => '14:00',
            'down_payment' => 10,
            'eligibility' => false,
            'purchase_status' => 'Completed',
            'loan_amount' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Random Customers
        Registration::create([
            'id' => 3,
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'phone' => '555111222',
            'address' => '789 Maple St',
            'preferred_date' => '2023-07-13',
            'preferred_time' => '11:30',
            'down_payment' => 15,
            'eligibility' => true,
            'purchase_status' => 'In progress',
            'loan_amount' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Registration::create([
            'id' => 4,
            'name' => 'Jessica Adams',
            'email' => 'jessica.adams@example.com',
            'phone' => '555888999',
            'address' => '456 Pine St',
            'preferred_date' => '2023-07-20',
            'preferred_time' => '15:00',
            'down_payment' => 17,
            'eligibility' => true,
            'purchase_status' => 'In progress',
            'loan_amount' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Registration::create([
            'id' => 5,
            'name' => 'Jane Smith',
            'email' => 'jane.smith@example.com',
            'phone' => '555222333',
            'address' => '456 Oak St',
            'preferred_date' => '2023-07-14',
            'preferred_time' => '09:00',
            'down_payment' => 8,
            'eligibility' => false,
            'purchase_status' => 'Canceled',
            'loan_amount' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Registration::create([
            'id' => 6,
            'name' => 'Mike Johnson',
            'email' => 'mike.johnson@example.com',
            'phone' => '555333444',
            'address' => '789 Elm St',
            'preferred_date' => '2023-07-15',
            'preferred_time' => '13:30',
            'down_payment' => 18,
            'eligibility' => true,
            'purchase_status' => 'In progress',
            'loan_amount' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Registration::create([
            'id' => 7,
            'name' => 'Sarah Wilson',
            'email' => 'sarah.wilson@example.com',
            'phone' => '555444555',
            'address' => '123 Oak St',
            'preferred_date' => '2023-07-16',
            'preferred_time' => '16:00',
            'down_payment' => 12,
            'eligibility' => true,
            'purchase_status' => 'Canceled',
            'loan_amount' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Registration::create([
            'id' => 8,
            'name' => 'David Thompson',
            'email' => 'david.thompson@example.com',
            'phone' => '555555666',
            'address' => '456 Maple St',
            'preferred_date' => '2023-07-17',
            'preferred_time' => '10:30',
            'down_payment' => 22,
            'eligibility' => true,
            'purchase_status' => 'In progress',
            'loan_amount' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Registration::create([
            'id' => 9,
            'name' => 'Emily Davis',
            'email' => 'emily.davis@example.com',
            'phone' => '555666777',
            'address' => '789 Elm St',
            'preferred_date' => '2023-07-18',
            'preferred_time' => '14:30',
            'down_payment' => 16,
            'eligibility' => true,
            'purchase_status' => 'In progress',
            'loan_amount' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Registration::create([
            'id' => 10,
            'name' => 'Daniel Martin',
            'email' => 'daniel.martin@example.com',
            'phone' => '555777888',
            'address' => '123 Maple St',
            'preferred_date' => '2023-07-19',
            'preferred_time' => '12:00',
            'down_payment' => 4,
            'eligibility' => false,
            'purchase_status' => 'Completed',
            'loan_amount' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
