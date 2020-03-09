<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;


	class User extends Eloquent implements UserInterface, RemindableInterface {

	    protected $table = "user";
	    protected $primaryKey = "id_user";
	    public $timestamps = false;

	    use UserTrait, RemindableTrait;

		protected $hidden = array('password', 'remember_token');

	        public function getAuthIdentifier(){
	        }

		public function getAuthPassword(){
	            return $this->password;
	        }

		public function getRememberToken(){
	        }

		public function setRememberToken($value){
	        }

		public function getRememberTokenName(){
	        }

	        public function getReminderEmail(){

	        }

	}
