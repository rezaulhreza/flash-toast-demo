<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Rezaulhreza\FlashToast\FlashToast;

class FlashToastExample extends Component
{
    use FlashToast;

    public function success()
    {
        $this->toastSuccess('This is a success message');
    }

    public function danger()
    {
        $this->toastDanger('This is a danger message');
    }

    public function warning()
    {
        $this->toastWarning('This is a warning message');
    }

    public function info()
    {
        $this->toastInfo('This is a info message');
    }

    public function error()
    {
        $this->toastError('This is a error message');
    }

    public function primary()
    {
        $this->toastPrimary('This is a primary message');
    }

    public function secondary()
    {
        $this->toastSecondary('This is a secondary message');
    }

    public function light()
    {
        $this->toastLight('This is a light message');
    }

    public function dark()
    {
        $this->toastDark('This is a dark message');
    }

    public function link()
    {
        $this->flashToast((new \Rezaulhreza\FlashToast\Manager\ToastManager())
            ->title('This is a title')
            ->html('<a class="bg-blue-300 underline" href="https://www.google.com">This is a link</a>')
            ->level('info')
            ->showForMilliseconds(5000)
        );
    }
    public function text()
    {
        $this->flashToast((new \Rezaulhreza\FlashToast\Manager\ToastManager)
        ->text('Some text containing text or string'));
    }

    public function html()
    {
        $this->flashToast((new \Rezaulhreza\FlashToast\Manager\ToastManager)
        ->title('Toast Title')
        ->level('success')
        ->html('<h2 class="text-2xl">Sub title</h2> <b>Success</b>'));
    }

    public function duration()
    {
        $this->flashToast((new \Rezaulhreza\FlashToast\Manager\ToastManager)
        ->text('Showing for 200 ms')
        ->showForMilliseconds(200));
    }

    public function withWarning()
    {
        $this->flashToast((new \Rezaulhreza\FlashToast\Manager\ToastManager)
        ->text('Showing Warning Toast')
        ->showForMilliseconds(200)->level('warning'));
    }

    public function render()
    {
        return view('dashboard');
    }
}
