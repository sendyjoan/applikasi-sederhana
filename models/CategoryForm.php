<?php

namespace app\models;
// use Yii;
use yii\base\Model;

/**
 * CategoryForm is the model behind the category form.
 *
 */

class CategoryForm extends Model
{
    public $name;
    public $description;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name and description are both required
            [['name', 'description'], 'required'],
        ];
    }
}
