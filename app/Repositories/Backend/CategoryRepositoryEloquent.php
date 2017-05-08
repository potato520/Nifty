<?php

namespace App\Repositories\Backend;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\Backend\CategoryRepository;
use App\Entities\Backend\Category;
use App\Validators\Backend\CategoryValidator;

/**
 * Class CategoryRepositoryEloquent
 * @package namespace App\Repositories\Backend;
 */
class CategoryRepositoryEloquent extends BaseRepository implements CategoryRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return \App\models\Category::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return CategoryValidator::class;
    }




    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

    public function getNestedList()
    {
        return $this->model->getNestedList('name', null, '&nbsp;&nbsp;&nbsp;&nbsp;');
    }
}
