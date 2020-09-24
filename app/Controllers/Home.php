<?php namespace App\Controllers;

use App\Models\StudentModel;

class Home extends BaseController
{
	public function index()
	{
		// return view('welcome_message');
		
		return view('home');
		
	}

	public function register()
	{
		if($this->request->getMethod() == 'post'){
			$model = new StudentModel();
			$model->save($_POST);
			return redirect()->to(site_url('/register?registered'));
		}
		return view('register');
		
	}

	public function studentRecord(){
		$model = new StudentModel();
		$data['table'] = $model->findAll();
		// if($post){
		// 	$data = [
		// 		'firstname' => $post['firstname'],
		// 		'surname' => $post['surname'],
		// 		'number' => $post['number'],
		// 		'email' => $post['email']
		// 	];
		// }

		return view('studentRecord', $data);
	}

	public function Delete($id){
		$model = new StudentModel();
		$model->where("s_id", $id)->delete();
		return redirect()->to(site_url('students?delete'));
	}

	public function Edit($id){
		$model = new StudentModel();
		$data['edit'] = $model->where('s_id', $id)->first();
		if($this->request->getMethod()== 'post'){
			$model = new StudentModel();
			$_POST['s_id'] = $id;
			$model->save($_POST);
			return redirect()->to(site_url('students?edit'));
		}
		return view('edit', $data);
	}

	//--------------------------------------------------------------------

}
