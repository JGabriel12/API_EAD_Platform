<?php

namespace App\Repositories;

use App\Models\Module;

class ModuleRepository
{

  protected $entity;

  public function __construct(Module $model)
  {
    $this->entity = $model;
  }

  public function getModulesByCourseId(string $course_id)
  {
    return $this->entity->where('course_id', $course_id)->get();
  }
}
