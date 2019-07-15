<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use APP\BaseController;

class ContactController extends MyBaseContactController
{
    public function index()
    {
    	return 'Hi';
    }
}
