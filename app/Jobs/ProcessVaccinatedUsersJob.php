<?php

namespace App\Jobs;

use App\Models\PublicUser;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class ProcessVaccinatedUsersJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $users = PublicUser::where('status','scheduled')
                ->where('scheduled_date','<=', Carbon::now())
                ->get();
        foreach ($users as $user) 
        {
            $user->update([
            'status'    => 'vaccinated',
            ]);
        }
    }
}
