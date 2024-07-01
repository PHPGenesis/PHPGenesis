<?php
/*
 * Copyright (c) 2024. Encore Digital Group.
 * All Right Reserved.
 */

namespace PHPGenesis\Common\Repositories;

use Illuminate\Support\Collection;

interface IModelRepository
{
    public function create(array $attributes = []): static;

    public function firstOrCreate(array $attributes = [], array $values = []): static;

    public function all(): Collection;

    public function find(string|int $id): static;

    public function update(array $values): static;

    public function updateOrCreate(array $attributes = [], array $values = []): static;

    public function delete(): void;
}
