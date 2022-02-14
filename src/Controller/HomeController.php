<?php
declare(strict_types=1);

namespace App\Controller;

use App\Kernel\Controller\BaseController;
use App\Model\Category;
use App\Model\User;

class HomeController extends BaseController
{
    public function indexAction()
    {
        $this->render('Home/index', [
            'categories' => Category::findAll(),
        ]);
    }
}