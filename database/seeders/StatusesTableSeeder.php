<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Status;

class StatusesTableSeeder extends Seeder
{
    public function run()
    {
        Status::create(['status_category' => 'skill', 'name' => 'Approved', 'description' => 'skill is Approved']);
        Status::create(['status_category' => 'skill', 'name' => 'Disapproved', 'description' => 'skill is Disapproved']);
        Status::create(['status_category' => 'skill', 'name' => 'Pending', 'description' => 'skill is Pending']);

        Status::create(['status_category' => 'store', 'name' => 'Open', 'description' => 'store is Open']);
        Status::create(['status_category' => 'store', 'name' => 'Pending', 'description' => 'store is Pending']);
        Status::create(['status_category' => 'store', 'name' => 'Closed', 'description' => 'store is Closed']);

        Status::create(['status_category' => 'gig', 'name' => 'Open', 'description' => 'Gig is open']);
        Status::create(['status_category' => 'gig', 'name' => 'In Progress', 'description' => 'Gig is in progress']);
        Status::create(['status_category' => 'gig', 'name' => 'Completed', 'description' => 'Gig is completed']);
        Status::create(['status_category' => 'gig', 'name' => 'Canceled', 'description' => 'Gig is Canceled']);
        Status::create(['status_category' => 'gig', 'name' => 'Reported', 'description' => 'Gig is Reported']);



        Status::create(['status_category' => 'ticket', 'name' => 'Open', 'description' => 'Ticket is open']);
        Status::create(['status_category' => 'ticket', 'name' => 'Pending', 'description' => 'Ticket is Pending']);
        Status::create(['status_category' => 'ticket', 'name' => 'Closed', 'description' => 'Ticket is Closed']);
        Status::create(['status_category' => 'ticket', 'name' => 'Resolved', 'description' => 'Ticket is resolved']);

        Status::create(['status_category' => 'sale', 'name' => 'Pending', 'description' => 'sale is Pending']);
        Status::create(['status_category' => 'sale', 'name' => 'Confirmed', 'description' => 'sale is Confirmed']);
        Status::create(['status_category' => 'sale', 'name' => 'Delivered', 'description' => 'sale is Delivered']);
        Status::create(['status_category' => 'sale', 'name' => 'Canceled', 'description' => 'sale is Canceled']);
        // Add more statuses as needed
    }
}
