<?php

class Controller{
	//param pertama viewnya apa view('home/index'), kedua data
	public function view($view,$data=[]){
		//panggil viewnya di folder view anggap ini di folder index

		require_once '../app/views/'.$view.'.php';
	}
	
	public function model($model){
		require_once '../app/models/'.$model.'.php';
		return new $model;
	}	
} 