<?php

namespace App\Transformers\Backend;

use League\Fractal\TransformerAbstract;
use App\Entities\Backend\Category;

/**
 * Class CategoryTransformer
 * @package namespace App\Transformers\Backend;
 */
class CategoryTransformer extends TransformerAbstract
{

    /**
     * Transform the \Category entity
     * @param \Category $model
     *
     * @return array
     */
    public function transform(Category $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
