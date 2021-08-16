<?php

namespace App\Http\Controllers;

use App\Mail\AttachmentMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailsController extends Controller
{
    public function email()
    {
        Mail::to('jeremygithuba@icloud.com')->send(new AttachmentMail());
    }
}
