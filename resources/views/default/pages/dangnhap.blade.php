@extends('default.master')
@section('content')

	<div class="container">
		<div id="content">
			
			<form action="#" method="post" class="beta-form-checkout">
				<div class="row">
					<div class="col-sm-3"></div>
					<div class="col-sm-6">
						<h4 style="font-weight: bold;">Đăng nhập</h4>
						<div class="space20">&nbsp;</div>
						
							<div class="alert alert-danger">
								Thông tin đăng nhập không chính xác! Hãy kiểm tra tài khoản và mật khẩu của bạn
							</div>
						<div class="form-block">
							<label for="email">Tài khoản</label>
							<input type="email" id="email" required>
						</div>
						<div class="form-block">
							<label for="phone">Mật khẩu</label>
							<input type="text" id="phone" required>
						</div>
						<div class="form-block">
							<label style="margin-left: -11px;" for="email"><a  style="color: #39698c;margin-right:25px;" href="#" class="btn">Bạn không thể truy cập vào tài khoản?</a></label>


							</div>
								
						<div class="form-block" style="padding-left: 200px;">
							<button style="background: #ce3029;color:#e7e7e7" type="submit" class="btn">Đăng nhập</button>

						</div>
					</div>
					<div class="col-sm-3"></div>
				</div>
			</form>
		</div> <!-- #content -->
	</div> <!-- .container -->


@endsection