<?php

namespace App\Repositories;

use App\Email;

interface EmailRepositoryInterface
{
    public function save($email);
}