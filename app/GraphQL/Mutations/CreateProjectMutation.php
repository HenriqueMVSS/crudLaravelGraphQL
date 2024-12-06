<?php

declare(strict_types=1);

namespace App\GraphQL\Mutations;

use App\Models\Project;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Mutation;

class CreateProjectMutation extends Mutation
{
    protected $attributes = [
        'name' => 'createProject',
    ];

    public function type(): Type
    {
        return GraphQL::type('Project');
    }

    public function args(): array
    {
        return [
            'name' => [
                'type' => Type::nonNull(Type::string()),
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
        return Project::create($args);
    }
}