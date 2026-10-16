<?php

use App\Mcp\Servers\TaskServer;
use Laravel\Mcp\Facades\Mcp;

Mcp::web('/mcp/task', TaskServer::class);