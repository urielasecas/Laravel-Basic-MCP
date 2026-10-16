<?php

namespace App\Mcp\Servers;

use Laravel\Mcp\Server;
use Laravel\Mcp\Server\Attributes\Instructions;
use Laravel\Mcp\Server\Attributes\Name;
use Laravel\Mcp\Server\Attributes\Version;

#[Name('Task Server')]
#[Version('0.0.1')]
#[Instructions(
    'This server manages tasks. Use its tools to list, create, and complete tasks.'
)]
class TaskServer extends Server
{
    protected array $tools = [
        \App\Mcp\Tools\ListTasksTool::class,
    ];

    protected array $resources = [
        //
    ];

    protected array $prompts = [
        //
    ];
}
