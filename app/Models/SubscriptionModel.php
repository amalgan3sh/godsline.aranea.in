<?php

namespace App\Models;

use CodeIgniter\Model;
 
class SubscriptionModel extends Model
{
    protected $table = 'subscriptions'; // Your table name
    protected $primaryKey = 'id';
    protected $allowedFields = ['email']; // Fields that can be inserted

    // You can turn off timestamps if you don't want to use them.
    protected $useTimestamps = false;
}