@extends('default.master')
@section('content')
	<div class="container">
		<div id="content">
			
			<form action="#" method="post" class="beta-form-checkout">
				<div class="row">
			
					<div class="col-sm-6">
						<h4 style="font-weight: bold;">Đăng kí</h4>
						<div class="space20">&nbsp;</div>

							<div class="form-block">
							<label for="email">Tài khoản <span style="color:red">*</span></label>
							<input type="text" id="email" name="username">
						</div>
						<div class="form-block">
							<label for="email">Địa chỉ email <span style="color:red">*</span></label>
							<input type="email" id="email" name="email" required>
						</div>

						<div class="form-block">
							<label for="your_last_name">Tên đầy đủ</label>
							<input type="text" id="your_last_name" name="fullname" >
						</div>

						<div class="form-block">
							<label for="adress">Địa chỉ<span style="color:red">*</span></label>
							<input type="text" id="adress" value="" name="address" required>
						</div>


						<div class="form-block">
							<label for="phone">Điện thoại<span style="color:red">*</span></label>
							<input type="text" id="phone" name="phone" required>
						</div>
						<div class="form-block">
							<label for="phone">Mật khẩu<span style="color:red">*</span></label>
							<input type="text" id="phone" name="password" required>
						</div>
						<div class="form-block">
							<label for="phone">Nhập lại mật khẩu<span style="color:red">*</span></label>
							<input type="text" id="phone" name="re-password" required>
						</div>
						<div class="form-block" style="padding-left: 200px;">
							<button style="background:#217994 " type="submit" class="btn">Đăng kí</button>
						</div>
					</div>
					<div class="col-sm-3"></div>
				</div>
			</form>
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection