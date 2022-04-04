<?php 

class Task extends DB{
	
	// Mengambil data
	function getTask(){
		// Query mysql select data ke tb_to_do
		$query = "SELECT * FROM tb_to_do" order by status_td desc, id;

		// Mengeksekusi query
		return $this->execute($query);
	}

	//method menambahkan data
	function add(){
		//menampung data dari inputan dengan post
		$name = $_POST['tname'];
		$deadline = $_POST['tdeadline'];
		$detail = $_POST['tdetails'];
		$subject = $_POST['tsubject'];
		$priority = $_POST['tpriority'];

		//memasukkan query
		$query = "INSERT INTO tb_to_do (name_td, details_td, subject_td, priority_td, deadline_td, status_td) 
				  VALUES ('$name', '$detail', '$subject', '$priority', '$deadline', 'Belum')";
	
		return $this->execute($query);

	}

	function delete($key){
		//memasukkan query
		$query = "delete from tb_to_do where id = '$key'";

		return $this->execute($query);
	}
	
	//fungsi mengganti status
	function stats($key){
		$query = "update tb_to_do set status_td='Sudah' where id='$key'";
		return $this->execute($query);
	}

	function sort($key){
		$query = "Select * from tb_to_do order by $key";
		return $this->execute($query);
	}
}

?>
