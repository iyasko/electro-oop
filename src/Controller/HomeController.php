<?php
declare(strict_types=1);

namespace App\Controller;

use App\Core\Controller\BaseController;

class HomeController extends BaseController
{
    public function indexAction()
    {
        $this->render('Home/index');
    }
}