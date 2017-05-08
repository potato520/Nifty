<?php

namespace App\Transformers\Backend;

use League\Fractal\TransformerAbstract;
use App\Entities\Backend\Article;

/**
 * Class ArticleTransformer
 * @package namespace App\Transformers\Backend;
 */
class ArticleTransformer extends TransformerAbstract
{

    /**
     * Transform the \Article entity
     * @param \Article $model
     *
     * @return array
     */
    public function transform(Article $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
