<?php

namespace App\Mcp\Tools;

use Illuminate\Contracts\JsonSchema\JsonSchema;
use Illuminate\JsonSchema\Types\Type;
use Laravel\Mcp\Request;
use Laravel\Mcp\Response;
use Laravel\Mcp\Server\Attributes\Description;
use Laravel\Mcp\Server\Tool;

#[Description('Returns a list of tasks with their completion status.')]
class ListTasksTool extends Tool
{
    /**
     * Handle the tool request.
     */
    public function handle(Request $request): Response
    {
        $tasks = [
            [
                'id' => 1,
                'title' => 'Learn Laravel MCP',
                'completed' => false,
            ],
            [
                'id' => 2,
                'title' => 'Prepare for technical interview',
                'completed' => false,
            ],
        ];

        return Response::text(
            json_encode($tasks, JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR)
        );
    }

    /**
     * Get the tool's input schema.
     *
     * @return array<string, Type>
     */
    public function schema(JsonSchema $schema): array
    {
        return [
            //
        ];
    }
}
