<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Mail;
use App\Employee;

class BirthdayEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'greeting:birthday';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'send birthday notification';

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
     * @return mixed
     */
    public function handle()
    {
        $date = ltrim(date('d-M', strtotime('today')),0);
        $employees = Employee::where('date_of_birth', $date)->get();

        foreach($employees as $employee){
            if($employee->email){
                 Mail::send(['html' => 'emails.birthday-email'], array('employee' =>$employee),function($message) use($employee){
                    $message->from('greetings@ariosh.com', 'Greetings from Ariosh');
                    $message->subject('Wishing you a Happy Birthday!');

                    $message->to($employee->email);
                    //$message->bcc(['olumide.olugbemiro@ariosh.com','']);
                });

                if( count(Mail::failures()) > 0 ) {
                
                $this->info("There was one or more failures. They were: <br />");
                

                foreach(Mail::failures() as $email_address) {
                    $this->info(" - $email_address <br />");
                    
                    }

                } else {
                     $this->info("No errors, all sent successfully!");
                    
                }

                $employee_numbers = $employee->mobile_number;
                $message = "Happy birthday to you, $employee->firstname $employee->lastname. On your special day, we want to remind you just how special you are; and we hope that you experience all the love in the world. Do have a great celebration!";
                $this->sendsms($employee_numbers ,$message);

                $this->info($date .' '. $employee->email.' '.$message);
            }
           
        }
        
    }

    public function sendsms($number,$message)
    {
        $user = 'olumide.olugbemiro@ariosh.com';
        $pass = 'Ariosh0112$$';
        $a=urlencode($user); //Note: urlencodemust be added forusernameand
        $b=urlencode($pass); // passwordas encryption code for security purpose.
        

        $message = urlencode($message); 
        $sender= urlencode("Ariosh Ltd."); 
        $mobile = $number;
        $url = "https://portal.nigeriabulksms.com/api/?username=".$a."&password=".$b."&message=".$message."&sender=".$sender."&mobiles=".$mobile;
        //$url = 'http://www.80kobosms.com/tools/geturl/Sms.php?userName=lumzysoft@yahoo.com&password=Ariosh123&sender='.$sender.'&message='.$message .'&flash=0&recipients='. $mobile;
        $ch = curl_init(); 
        curl_setopt($ch,CURLOPT_URL, $url); 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_HEADER, 0); 
        $resp = curl_exec($ch); 
        
        curl_close($ch);
    } 
}
