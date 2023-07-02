<?php namespace Devtruyen\Blog\Models;

use Model;

/**
 * Banner Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class Banner extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string table name
     */
    public $table = 'devtruyen_blog_banners';

    /**
     * @var array rules for validation
     */
    public $rules = [];
}
