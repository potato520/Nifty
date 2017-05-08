<?php

namespace App\Presenters\Backend;

use App\Transformers\Backend\ArticleTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class ArticlePresenter
 *
 * @package namespace App\Presenters\Backend;
 */
class ArticlePresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new ArticleTransformer();
    }
}
