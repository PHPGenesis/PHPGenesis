<?php
/*
 * Copyright (c) 2024. Encore Digital Group.
 * All Right Reserved.
 */

namespace PHPGenesis\Common\Repositories;

interface IModelRepository
{
    public function create(array $attributes = []);

    public function firstOrCreate(array $attributes = [], array $values = []);

    public function all();

    public function find(string|int $id);

    public function update(array $values);

    public function updateOrCreate(array $attributes = [], array $values = []);

    public function delete();
}