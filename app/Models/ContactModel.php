<?php

namespace App\Models;

use CodeIgniter\Model;
 
class ContactModel extends Model
{
    protected $table = 'contact_responses';
    protected $primaryKey = 'id';
    protected $allowedFields = [
       'first_name', 'last_name', 'email', 'phone', 'subject', 'message', 
    ];
    protected $useTimestamps = false;
}