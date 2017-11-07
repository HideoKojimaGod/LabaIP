<?php

class carController extends Controller {

	public function index(){
		$examples=$this->model->load();		
		$this->setResponce($examples);		
	}

	public function view($data){
		$example=$this->model->load($data['id']); 
		$this->setResponce($example);
	}

	public function add()
	{
		$post=json_decode(file_get_contents('php://input'), true);               //Я решил и здесь cделать через инпут
		if(isset($post['id']) && isset($post['brand']) && isset($post['model'])  // если данные посылать как raw то работает
			&& isset($post['engine']) && isset($post['weight']))				// только инпут, а если по-дргуому то _POST
		{																		//но _POST не работает в edit
			$dataToSave=array('id'=>$post['id'],
							'brand'=>$post['brand'],
							'model'=>$post['model'],
							'engine'=>$post['engine'],
							'weight'=>$post['weight'],);
			$addedItem=$this->model->create($dataToSave);
			$this->setResponce($addedItem);
		}
	}
	public function edit($data)
	{
		$post=json_decode(file_get_contents('php://input'), true);
		if(isset($post['id']) && isset($post['brand']) && isset($post['model'])
			&& isset($post['engine']) && isset($post['weight']))
		{
			$dataToSave=array('id'=>$post['id'],
							'brand'=>$post['brand'],
							'model'=>$post['model'],
							'engine'=>$post['engine'],
							'weight'=>$post['weight'],);
			$savedItem=$this->model->save($data['id'], $dataToSave);
			return $this->setResponce($savedItem);
		}
	}	
	public function delete(array $data){
			
			$deletedItem=$this->model->delete($data['id']);
			$this->setResponce($deletedItem);

	}
}