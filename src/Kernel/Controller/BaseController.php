<?php
declare(strict_types=1);

namespace App\Kernel\Controller;

use App\Core\Controller\Exception\TemplateFileNotFound;

class BaseController
{
    private const VIEW_FOLDER_PATH = __DIR__ . '/../../View/';

    /**
     * @throws TemplateFileNotFound
     */
    protected function render(string $template, array $variables = [])
    {
        if (!file_exists(self::VIEW_FOLDER_PATH . $template . '.php')) {
            throw new TemplateFileNotFound(sprintf('Template %s not exist', $template));
        }

        foreach ($variables as $variable => $value) {
            ${$variable} = $value;
        }

        require_once self::VIEW_FOLDER_PATH . $template . '.php';
    }
}