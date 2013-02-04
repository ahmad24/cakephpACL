<?php




class AppController extends Controller {
    var $components = array('Acl', 'Auth', 'Session');
    var $helpers = array('Html', 'Form', 'Session');

    function beforeFilter() {
        //$$$$$$$$$$$$$$
        
        $this->Auth->allowedActions = array('display');
        //$$$$$$$$$$$$
        //++++++++++++++++++++=
        $this->Auth->actionPath = 'controllers/';
        //++++++++++++++++++
        //Configure AuthComponent
        $this->Auth->authorize = 'actions';
        $this->Auth->loginAction = array('controller' => 'users', 'action' => 'login');
        $this->Auth->logoutRedirect = array('controller' => 'posts', 'action' => 'index');
        $this->Auth->loginRedirect = array('controller' => 'posts', 'action' => 'index');
    }
}
?>