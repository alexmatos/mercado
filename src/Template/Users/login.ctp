<?php
echo $this->Flash->render('Auth');
echo '<h1>Acesso ao Sistema</h1>';
echo $this->Form->create();
echo $this->Form->input('username');
echo $this->Form->input('password');
echo $this->Form->button('Login');
echo $this->Form->end();
?>
