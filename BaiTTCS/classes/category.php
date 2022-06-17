<?php
	$filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../lib/database.php');
	include_once ($filepath.'/../helpers/format.php');
?>

<?php
	/**
	 * 
	 */
	class category
	{
		private $db;
		private $fm;
		
		public function __construct()
		{
			$this->db = new Database();
			$this->fm = new Format();
		}

		public function insert_category($catName){

			$catName = $this->fm->validation($catName);
			$catName = mysqli_real_escape_string($this->db->link, $catName);
			
			if(empty($catName)){
				$alert = "<span class='error'>Category must be not empty</span>";
				return $alert;
			}else{
				$query = "INSERT INTO category(catName) VALUES('$catName')";
				$result = $this->db->insert($query);
				if($result){
					$alert = "<span class='success'>Thêm danh mục thành công</span>";
					return $alert;
				}else{
					$alert = "<span class='error'>Thêm danh mục ko thành công</span>";
					return $alert;
				}
			}
		}
		public function show_category(){
			$query = "SELECT * FROM category order by catId desc";
			$result = $this->db->select($query);
			return $result;
		}
		public function update_category($catName,$id){

			$catName = $this->fm->validation($catName);
			$catName = mysqli_real_escape_string($this->db->link, $catName);
			$id = mysqli_real_escape_string($this->db->link, $id);

			if(empty($catName)){
				$alert = "<span class='error'>Danh mục không được để trống</span>";
				return $alert;
			}else{
				$query = "UPDATE category SET catName = '$catName' WHERE catId = '$id'";
				$result = $this->db->update($query);
				if($result){
					$alert = "<span class='success'>Đã cập nhật danh mục thành công</span>";
					return $alert;
				}else{
					$alert = "<span class='error'>Cập nhật danh mục ko thành công</span>";
					return $alert;
				}
			}

		}
		public function del_category($id){
			$query = "DELETE FROM category where catId = '$id'";
			$result = $this->db->delete($query);
			if($result){
				$alert = "<span class='success'>Đã xóa danh mục thành công</span>";
				return $alert;
			}else{
				$alert = "<span class='error'>Xóa danh mục ko thành công</span>";
				return $alert;
			}
			
		}
		public function getcatbyId($id){
			$query = "SELECT * FROM category where catId = '$id'";
			$result = $this->db->select($query);
			return $result;
		}
		public function show_category_fontend(){
			$query = "SELECT * FROM category order by catId desc";
			$result = $this->db->select($query);
			return $result;
		}
		public function get_product_by_cat($id){
			$query = "SELECT * FROM product WHERE catId='$id' order by catId desc LIMIT 8";
			$result = $this->db->select($query);
			return $result;
		}
		public function get_name_by_cat($id){
			$query = "SELECT product.*,category.catName,category.catId FROM product,category WHERE product.catId=category.catId AND product.catId ='$id' LIMIT 1";
			$result = $this->db->select($query);
			return $result;
		}
		


	}
?>