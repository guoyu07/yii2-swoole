<?php
/**
 * Created by PhpStorm.
 * User: lusc
 * Date: 2016/5/18
 * Time: 12:25
 */

namespace api\modules\v01\controllers;

use common\controllers\BaseController;

class DemoController extends BaseController
{
    public function actionIndex()
    {
        $_SESSION['time' . time()] = time();
        return [
            'hello'   => 'a',
            'world'   => 'b',
            'session' => $_SESSION,
        ];
    }
}
