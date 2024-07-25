<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Notification;
class notificationseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $noti=new Notification;
        $noti->message="Your Answer is Deleted.";
        $noti->user_id=8;
        $noti->action_id=8;
        $noti->action="report_target_user";
        $noti->save();
    }
}
