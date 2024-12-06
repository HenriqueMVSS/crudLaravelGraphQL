<?php

declare(strict_types=1);

namespace App\GraphQL\Mutations;

use App\Models\Project;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Mutation;

class UpdateProjectMutation extends Mutation
{
    protected $attributes = [
        'name' => 'updateProject',
    ];

    public function type(): Type
    {
        return GraphQL::type('Project');
    }

    public function args(): array
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
            ],
            'name' => [
                'type' => Type::string(),
            ],
            'description' => [
                'type' => Type::string(),
            ],
            'status' => [
                'type' => Type::string(),
            ],
        ];
    }

    public function resolve($root, $args)
    {
        $project = Project::findOrFail($args['id']);
        $project->update($args);
        return $project;
    }
}