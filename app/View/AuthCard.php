<?php

namespace App\View;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AuthCard extends Component
{
    public $title;
    public $description;
    public $buttonText;
    public $showEmail;
    public $showPassword;
    public $linkText;
    public $linkHref;
    public $action;

    public function __construct($title, $description, $buttonText, $showEmail = true, $showPassword = false, $linkText = null, $linkHref = null, $action = '#')
    {
        $this->title = $title;
        $this->description = $description;
        $this->buttonText = $buttonText;
        $this->showEmail = $showEmail;
        $this->showPassword = $showPassword;
        $this->linkText = $linkText;
        $this->linkHref = $linkHref;
        $this->action = $action;
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.layout.auth-card');
    }
}
