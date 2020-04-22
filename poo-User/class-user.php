<?php 

   class User
   {
       private $_nomUser;
       private $_prenomUser;
       private $_passwordUser;
       private $_emailUser;
   }

   public function __construct( $nomUser ) {
       $this->_nimUser = $_nomUser;
       $this->_prenomUser = $_prenomUser;
       $this->_passwordUser = $_passwordUser;
       $this->_emailUser = $_emailUser;
   }
?>