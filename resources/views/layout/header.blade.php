<!-- header -->
<div class="banner">
	 <div class="container">
		<div class="headr-right">
			
				<form class="search-box" action="timkiem" method="GET">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<input class="search-txt" type="text" name="tukhoa" placeholder="Nhập từ khóa tìm kiếm.......">
					<button class="search-btn" type="submit">
						<i class="fa fa-search"></i>
					</button>
				</form>
			
				<div class="details">
					<ul >
						@if(Auth::User() != null)
							<li><a href="nguoidung"><i class="glyphicon glyphicon-user"></i>{{Auth::User()->name}}</a></li>
							<li><a href="dangbaiviet"><i class="fa fa-pencil" aria-hidden="true"></i>Đăng bài viết</a></li>
							<li><a href="dangxuat">Đăng xuất</a></li>
						@else
							<li><a href="dangnhap"><i class="glyphicon glyphicon-user"></i> Đăng nhập</a></li>
							<li><a href="dangky">Đăng ký</a></li>
						
						@endif
						
					</ul>
			  </div>
		</div>
		@include('layout.menu')
		  <div class="banner-info">
			 <h3>Chào mừng đến với website</h3>
			 <h2>Luôn cập nhật những thông tin về dịch bệnh mới nhất</h2>
		  </div>
		  
	 </div>	 
</div>
<!---->