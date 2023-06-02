<?php

namespace App\Enums;

enum Status: string
{
    case OPEN = 'Open';
    case IN_PROGRESS = 'In Progress';
    case CLOSED = 'Closed';
}
