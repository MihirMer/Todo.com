<?php

namespace App\Console\Commands;

use App\Mail\TestMail;
use App\Models\Note;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class cronEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'reminder.emails';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send email notification about deadline information.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        //get all reminders
        $notes = Note::query()
            ->where('deadline', '>=', Carbon::today())
            ->orderBy('user_id')
            ->get();
        $data = [];
        foreach ($notes as $note) {
            $data[$note->user_id][] = $note->toArray();
        }

        foreach ($data as $userId => $deadlineAlerts) {
            $this->sendEmailTo($userId, $deadlineAlerts);
        }
        return 0;
    }

    private function sendEmailTo(int $userId, $deadlineAlerts)
    {

        $details = [
            'title' => 'Reminder regarding upcoming deadline.',
        ];

        $user = User::find($userId);

        Mail::to($user->email)->send(new TestMail($details, $deadlineAlerts, $user));
    }
}
