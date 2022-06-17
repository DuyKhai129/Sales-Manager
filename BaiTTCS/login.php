<?php 
	include 'inc/header.php';
	// include 'inc/slider.php';
?>
<?php
		$login_check = Session::get('customer_login'); 
		if($login_check){
			header('Location:order.php');
		}
?>
<?php
   
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        
        $insertCustomers = $cs->insert_customers($_POST);
        
    }
?>
<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
        
        $login_Customers = $cs->login_customers($_POST);
        
    }
?>
 <div class="main">
    <div class="content">
    	 <div class="login_panel">
        	<h3>Login</h3>
        	
        	<?php
			if(isset($login_Customers)){
    			echo $login_Customers;
    		}
        	?>
        	<form action="" method="post">
                	<input  type="text" name="email" class="field" placeholder="Nhập Tài Khoản......">
                    <input  type="password" name="password" class="field"  placeholder="Nhập Mật Khẩu......" >
                    <div class="buttons"><div><input type="submit" name="login" class="grey" value="Đăng nhập"></div></div>
             </form>
          </div>
         <?php

         ?> 
    	<div class="register_account">
    		<h3>Đăng ký tài khoản mới</h3>
    		<?php
    		if(isset($insertCustomers)){
    			echo $insertCustomers;
    		}
    		?>
    		<form action="" method="POST">
		   			 <table>
		   				<tbody>
						<tr>
						<td>
							<div>
							<input type="text" name="name" placeholder="Nhập tên....." >
							</div>
							
							<div>
							   <input type="text" name="city"  placeholder="Nhập thành phố....."  >
							</div>
							
							<div>
								<input type="text" name="zipcode"  placeholder="Nhập Zipcode....."  >
							</div>
							<div>
								<input type="text" name="email"  placeholder="Nhập tài khoản....."  >
							</div>
		    			 </td>
		    			<td>
						<div>
							<input type="text" name="address"  placeholder="Nhập địa chỉ....."  >
						</div>
		    		<div>
						<select id="country" name="country" onchange="change_country(this.value)" class="frm-field required">
							<option value="null">chọn một quốc gia</option>   
							<option value="DZ">Algeria</option>
							<option value="AR">Argentina</option>
							<option value="VN">Viet Nam</option>
							<option value="AM">Armenia</option>
							<option value="AW">Aruba</option>
							<option value="AU">Australia</option>
							<option value="BH">Bahrain</option>
							<option value="BD">Bangladesh</option>
							<option value="M">Mĩ</option>
							<option value="NB">Nhật Bản</option>
							<option value="TQ">Trung Quốc</option>
							

		         </select>
				 </div>		        
	
		           <div>
		          <input type="text" name="phone"  placeholder="Số điện thoại..." >
		          </div>
				  
				  <div>
					<input type="text" name="password"  placeholder="Nhập mật khẩu..." >
				</div>
		    	</td>
		    </tr> 
		    </tbody></table> 
		   <div class="search"><div><input type="submit" name="submit" style="margin-left: 285px;width: 150px" class="grey" value="Đăng ký"></div></div>
		    
		    <div class="clear"></div>
		    </form>
    	</div>  	
       <div class="clear"></div>
    </div>
 </div>
<?php 
	include 'inc/footer.php';
	
 ?>
