@extends('layout.ant_furniture.layouts.app')
@section('content')
<section class="bread-crumb margin-bottom-30">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul class="breadcrumb" itemscope="" itemtype="https://schema.org/BreadcrumbList">						
                        <li class="home" itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                            <a itemprop="item" href="/" title="Trang chủ">
                                <span itemprop="name">Trang chủ</span>
                                <meta itemprop="position" content="1">
                            </a>
                            <span><i class="fa fa-angle-right"></i></span>
                        </li>

                        <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                            <strong itemprop="name">Giới thiệu</strong>
                            <meta itemprop="position" content="2">
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="page">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="page-title category-title">
					<h1 class="title-head"><a href="#">Giới thiệu</a></h1>
				</div>
				<div class="content-page rte">
					<p>Làm nên danh tiếng và vị thế dẫn đầu cho Thương hiệu Ant Furniture suốt nhiều năm qua không chỉ là ở những sản phẩm nội thất cao cấp, chất lượng, mẫu mã đẹp bắt kịp xu hướng Thế giới; mà còn bởi TÍNH NĂNG và ƯU ĐIỂM vượt trội nhờ vào cải tiến thông minh đầy sáng tạo, giúp mang lại những trải nghiệm tuyệt vời và một cuộc sống cao cấp hơn cho người sử dụng<br>
<br>
Nội thất Ant Furniture bật mí những bí mật khiến Thương hiệu chiếm được lòng tin và trở thành lựa chọn số 1 cho các gia đình Việt yêu thích nội thất hiện đại</p>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection