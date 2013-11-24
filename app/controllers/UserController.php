<?php

class UserController extends BaseController {

	public function getIndex()
	{
		$users = User::getMapper()->find(['active' => [ '$ne' => false ]])->get();

		return View::make('users')->with('users', $users);
	}

	public function getUser($id)
	{
		$user = User::getMapper()->findOne( array( '_id' => $id ) );

		return View::make('user')->with('user', $user);
	}

	public function activateUser()
	{
		$user = User::getMapper()->findOne( array( '_id' => 'and_re' ) );
		$user->active = true;
		$user->save();

		return Redirect::to( 'users' )->with('message', 'New Team Member added!');;
	}

}