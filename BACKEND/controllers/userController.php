<?php

class userController extends Controller {

	public function index(){
		$examples=$this->model->load();		// просим у модели все записи
		$this->setResponce($examples);		// возвращаем ответ 
	}

	public function view($data){
		$example=$this->model->load($data['id']); // просим у модели конкретную запись
		$this->setResponce($example);
	}

	public function add()
	{
		if(isset($_POST['name']) && isset($_POST['id']) && isset($_POST['score']))
		{
			$dataToSave=array('id'=>$_POST['id'],'name'=>$_POST['name'],'score'=>$_POST['score'],);
			$addedItem=$this->model->create($dataToSave);
			$this->setResponce($addedItem);
		}
	}
	public function edit($data)
	{
		$post=json_decode(file_get_contents('php://input'), true);
		if(isset($post['id']) && isset($post['name']) && isset($post['score']))
		{
			echo "123";
			$dataToSave = array('id' => $post['id'],
								'name' => $post['name'],
								'score' => $post['score'],);
			$savedItem=$this->model->save($data['id'], $dataToSave);
			return $this->setResponce($savedItem);
		}
	}	
	public function delete(array $data){
			
			$deletedItem=$this->model->delete($data['id']);
			$this->setResponce($deletedItem);

	}
}
