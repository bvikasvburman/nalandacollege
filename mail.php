<?php

# Include the Autoloader (see "Libraries" for install instructions)
require 'vendor/autoload.php';
use Mailgun\Mailgun;

# API Key => key-ff9ff4eb19501c4ba30bbb97e929dab3
# Public API Key =>  pubkey-6ce8d4a22cfce42aaae118cd5bbe8a77
//sandbox76fbf748bc5946a18a8b03da390592a9.mailgun.org
//smtp.mailgun.org

# Instantiate the client.
$mgClient = new Mailgun('key-ff9ff4eb19501c4ba30bbb97e929dab3');
$domain = "sandbox76fbf748bc5946a18a8b03da390592a9.mailgun.org";

# Make the call to the client.
$result = $mgClient->sendMessage("$domain",
                  array('from'    => 'Mailgun Sandbox <postmaster@sandbox76fbf748bc5946a18a8b03da390592a9.mailgun.org>',
                        'to'      => 'Vikas Burman <bvikasvburman@gmail.com>',
                        'subject' => 'Hello Vikas Burman',
                        'text'    => 'Congratulations Vikas Burman, you just sent an email with Mailgun!  You are truly awesome!  You can see a record of this email in your logs: https://mailgun.com/cp/log .  You can send up to 300 emails/day from this sandbox server.  Next, you should add your own domain so you can send 10,000 emails/month for free.'));
    
    ?>