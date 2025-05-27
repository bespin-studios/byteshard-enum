<?php

namespace byteShard\Enum;

enum HttpResponseState: int
{
    case ERROR = 0;
    case WARNING = 1;
    case SUCCESS = 2;
    case RUNNING = 3;
}