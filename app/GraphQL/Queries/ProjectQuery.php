<?php

declare(strict_types=1);

namespace App\GraphQL\Queries;

use App\Models\Project;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Query;

class ProjectQuery extends Query
{
    protected $attributes = [
        'name' => 'projects',
    ];

    public function type(): Type
    {
        return Type::listOf(GraphQL::type('Project'));
    }

    public function resolve($root, $args)
    {
        return Project::all();
    }
}