<?php

namespace App\Jobs;

use App\Jobs\Job;
use App\Models\User;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Contracts\Mail\Mailer;

class SendMail extends Job implements SelfHandling
{
    protected $user;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(Mailer $mailer)
    {
        $data = [
            'title' => trans('front/verify.email-title'),
            'intro' => trans('front/verify.email-intro'),
            'link'  => trans('front/verify.email-link'),
            'confimation_code' => $this->user->confirmation_code
        ];

        $mailer->send('emails.verify',$data,function($message){
            $message->to($this->user->email,$this->user->username)
                    ->subject(trans('front/verify.email-title'));
        });
    }
}
