<?php

class UserController extends BaseController {

	public function getIndex()
	{
		$users = User::getMapper()->find()->sort( [ 'active' => 1 ] )->get();

		return View::make('users')->with('users', $users);
	}

	public function getUser($id)
	{
		$user = User::getMapper()->findOne( array( '_id' => $id ) );

		return View::make('user')->with('user', $user);
	}

}