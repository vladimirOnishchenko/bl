<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

/**
 *  Class CoreRepository
 *
 *  @package App\Repositories
 *
 */

abstract class CoreRepository
{
    /**
     * @var Model
     */
    protected $model;

    public function __construct()
    {
        $this->model = app($this->getModelClass());
    }

    /**
     * @return mixed
     */
    abstract protected function getModelClass();

    /**
     * @return Model|mixed
     */
    protected function startConditions()
    {
        return clone $this->model;
    }
}
