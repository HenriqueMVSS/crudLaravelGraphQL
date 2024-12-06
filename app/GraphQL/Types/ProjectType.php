<?php

declare(strict_types=1);

namespace App\GraphQL\Types;

use App\Models\Project;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class ProjectType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Project',
        'description' => 'A project',
        'model' => Project::class,
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'The id of the project'
            ],
            'name' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The name of the project'
            ],
            'description' => [
                'type' => Type::string(),
                'description' => 'The description of the project'
            ],
            'status' => [
                'type' => Type::string(),
                'description' => 'The status of the project'
            ],
        ];
    }
}