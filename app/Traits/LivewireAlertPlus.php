<?php

namespace App\Traits;

use Jantinnerezo\LivewireAlert\LivewireAlert;

trait LivewireAlertPlus
{
    use LivewireAlert;

    public function flash(string $type = 'success', string $message = '', array $options = [], $route = 'home', $navigate = true)
    {
        $this->dispatchOrFlashAlert([
            'type' => $type,
            'message' => $message,
            'options' => $options,
            'flash' => true
        ]);

        return $this->redirect(route($route), navigate: $navigate);
    }
}
