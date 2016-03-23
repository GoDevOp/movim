<?php
use Movim\Controller\Base;

class LoginController extends Base {
    function load() {
        $this->session_only = false;
    }

    function dispatch() {
        $this->page->setTitle(__('title.login', APP_TITLE));

        $user = new User();
        if($user->isLogged()) {
            $this->redirect('root');
        }
    }
}
