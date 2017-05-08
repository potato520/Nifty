<?php

namespace App\Repositories\Backend;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\Backend\ArticleRepository;
use App\Entities\Backend\Article;
use App\Validators\Backend\ArticleValidator;

/**
 * Class ArticleRepositoryEloquent
 * @package namespace App\Repositories\Backend;
 */
class ArticleRepositoryEloquent extends BaseRepository implements ArticleRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return \App\models\Article::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
