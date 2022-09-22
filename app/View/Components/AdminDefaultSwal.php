<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AdminDefaultSwal extends Component
{
    private $messages_success = [];
    private $messages_errors = [];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        if (session()->has('messages')) {
            if (is_array(session()->get('messages'))) {
                foreach (session()->get('messages') as $message) {
                    $this->messages_success[] = $message;
                }
            } else {
                $this->messages_success[] = session()->get('messages');
            }
        }

        if (session()->has('errors')) {
            if (is_string(session()->get('errors'))) {
                $this->messages_errors[] = session()->get('errors');
            } else {
                foreach (session()->get('errors')->all() as $message) {
                    $this->messages_errors[] = $message;
                }
            }
        }
    }

    // get messages success as string
    public function getMessagesSuccess()
    {
        return addslashes(implode('<br>', $this->messages_success));
    }

    // get messages errors as string
    public function getMessagesErrors()
    {
        return addslashes(implode('<br>', $this->messages_errors));
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin-default-swal', [
            'messages_success' => $this->messages_success,
            'messages_errors' => $this->messages_errors,
        ]);
    }
}
