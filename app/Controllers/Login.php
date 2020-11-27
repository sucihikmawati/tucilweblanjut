<?php namespace App\Controllers;

class Login extends BaseController
{
	public function index()
	{
		return view('Login');
	}

    public function verif()
    {
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        if ($email=="Sucihikmawati24@gmail.com" && $password=="suci") 
        {
            return redirect()->to('/Home');
        }
        else{
            return redirect()->to('/Login');
        }
    }

}