<?php

require __DIR__.'/groups/app.php';

require __DIR__.'/groups/users.php';

require __DIR__.'/groups/clients.php';

require __DIR__.'/groups/projects.php';

require __DIR__.'/groups/tasks.php';

require __DIR__.'/groups/auth.php';

\Illuminate\Support\Facades\Route::get('mail',function(){
    \Illuminate\Support\Facades\Mail::to('Igorryd6@gmail.com')->send(new \App\Mail\GreetingEmail());
});
