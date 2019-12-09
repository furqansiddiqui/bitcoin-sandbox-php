<?php
declare(strict_types=1);

namespace App\Controllers\Frontend;

use App\Kernel\FrontendController;

/**
 * Class Home
 * @package App\Controllers\Frontend
 */
class Home extends FrontendController
{
    public function frontendCallback(): void
    {
    }

    /**
     * @throws \Comely\Knit\Exception\KnitException
     * @throws \Comely\Knit\Exception\TemplateException
     */
    public function get(): void
    {
        $this->page()->title("Home page")
            ->index(1);

        $template = $this->template("home.knit");
        $this->body($template);
    }
}