<aside class="ant-sidebar sidebar  left-content col-md-3 col-md-pull-9">
@include('layout.ant_furniture.sidebar.category')
    
    <div class="aside-filter">
        <div class="heading hidden">
            <h2 class="title-head">Bộ lọc</h2>
        </div>
        <div class="aside-hidden-mobile">
            <div class="filter-container">
                <div class="filter-containers">
                    <div class="filter-container__selected-filter" style="display: none;">
                        <div class="filter-container__selected-filter-header clearfix">
                            <span class="filter-container__selected-filter-header-title">Bạn chọn</span>
                            <a href="javascript:void(0)" onclick="clearAllFiltered()"
                                class="filter-container__clear-all">Bỏ hết <i class="fa fa-angle-right"></i></a>
                        </div>
                        <div class="filter-container__selected-filter-list">
                            <ul></ul>
                        </div>
                    </div>
                </div>

                <aside class="aside-item filter-vendor">
                    <div class="aside-title">
                        <h2 class="title-head margin-top-0"><span>Thương hiệu</span></h2>
                    </div>
                    <div class="aside-content filter-group">
                        <div class="field-search input-group">
                            <input type="text" placeholder="Tìm Thương hiệu" class="form-control filter-vendor-list"
                                onkeyup="filterItemInList(jQuery('.filter-vendor-list'))">
                            <span class="input-group-btn">
                                <button class="btn btn-default"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </span>
                        </div>
                        <ul class="filter-vendor">


                            <li class="filter-item filter-item--check-box filter-item--green ">
                                <label data-filter="ant furni" for="filter-ant-furni" class="ant-furni">
                                    <input type="checkbox" id="filter-ant-furni" onchange="toggleFilter(this)"
                                        data-group="Hãng" data-field="vendor.filter_key" data-text="Ant Furni"
                                        value="(&quot;Ant Furni&quot;)" data-operator="OR">
                                    <i class="fa"></i>

                                    Ant Furni

                                </label>
                            </li>



                            <li class="filter-item filter-item--check-box filter-item--green ">
                                <label data-filter="klosso" for="filter-klosso" class="klosso">
                                    <input type="checkbox" id="filter-klosso" onchange="toggleFilter(this)"
                                        data-group="Hãng" data-field="vendor.filter_key" data-text="Klosso"
                                        value="(&quot;Klosso&quot;)" data-operator="OR">
                                    <i class="fa"></i>

                                    Klosso

                                </label>
                            </li>


                        </ul>
                    </div>
                </aside>


                <aside class="aside-item filter-price">
                    <div class="aside-title">
                        <h2 class="title-head margin-top-0"><span>Giá sản phẩm</span></h2>
                    </div>
                    <div class="aside-content filter-group">
                        <ul>





                            <li class="filter-item filter-item--check-box filter-item--green">
                                <span>
                                    <label for="filter-duoi-100-000d">
                                        <input type="checkbox" id="filter-duoi-100-000d" onchange="toggleFilter(this);"
                                            data-group="Khoảng giá" data-field="price_min" data-text="Dưới 100.000đ"
                                            value="(<100000)" data-operator="OR">
                                        <i class="fa"></i>
                                        Giá dưới 100.000đ
                                    </label>
                                </span>
                            </li>







                            <li class="filter-item filter-item--check-box filter-item--green">
                                <span>
                                    <label for="filter-100-000d-200-000d">
                                        <input type="checkbox" id="filter-100-000d-200-000d"
                                            onchange="toggleFilter(this)" data-group="Khoảng giá" data-field="price_min"
                                            data-text="100.000đ - 200.000đ" value="(>100000 AND <200000)"
                                            data-operator="OR">
                                        <i class="fa"></i>
                                        100.000đ - 200.000đ
                                    </label>
                                </span>
                            </li>






                            <li class="filter-item filter-item--check-box filter-item--green">
                                <span>
                                    <label for="filter-200-000d-300-000d">
                                        <input type="checkbox" id="filter-200-000d-300-000d"
                                            onchange="toggleFilter(this)" data-group="Khoảng giá" data-field="price_min"
                                            data-text="200.000đ - 300.000đ" value="(>200000 AND <300000)"
                                            data-operator="OR">
                                        <i class="fa"></i>
                                        200.000đ - 300.000đ
                                    </label>
                                </span>
                            </li>






                            <li class="filter-item filter-item--check-box filter-item--green">
                                <span>
                                    <label for="filter-300-000d-500-000d">
                                        <input type="checkbox" id="filter-300-000d-500-000d"
                                            onchange="toggleFilter(this)" data-group="Khoảng giá" data-field="price_min"
                                            data-text="300.000đ - 500.000đ" value="(>300000 AND <500000)"
                                            data-operator="OR">
                                        <i class="fa"></i>
                                        300.000đ - 500.000đ
                                    </label>
                                </span>
                            </li>






                            <li class="filter-item filter-item--check-box filter-item--green">
                                <span>
                                    <label for="filter-500-000d-1-000-000d">
                                        <input type="checkbox" id="filter-500-000d-1-000-000d"
                                            onchange="toggleFilter(this)" data-group="Khoảng giá" data-field="price_min"
                                            data-text="500.000đ - 1.000.000đ" value="(>500000 AND <1000000)"
                                            data-operator="OR">
                                        <i class="fa"></i>
                                        500.000đ - 1.000.000đ
                                    </label>
                                </span>
                            </li>
                            <li class="filter-item filter-item--check-box filter-item--green">
                                <span>
                                    <label for="filter-tren1-000-000d">
                                        <input type="checkbox" id="filter-tren1-000-000d" onchange="toggleFilter(this)"
                                            data-group="Khoảng giá" data-field="price_min" data-text="Trên 1.000.000đ"
                                            value="(>1000000)" data-operator="OR">
                                        <i class="fa"></i>
                                        Giá trên 1.000.000đ
                                    </label>
                                </span>
                            </li>



                        </ul>
                    </div>
                </aside>





            </div>
        </div>
    </div>
    


{{--    <aside class="aside-item banner">--}}
{{--        <div class="aside-title">--}}
{{--            <h2 class="title-head margin-top-0"><span>Khuyến mãi hot</span></h2>--}}
{{--        </div>--}}
{{--        <div class="aside-content zoom-banner">--}}
{{--            <a href="#">--}}
{{--                <img src="{{ asset ('layout/ant_furniture/bizweb.dktcdn.net/100/331/465/themes/684469/assets/FX0456-1.jpg')}}"--}}
{{--                    alt="Ant Furniture" class="img-responsive center-block">--}}
{{--            </a>--}}
{{--        </div>--}}
{{--    </aside>--}}

</aside>
<script src="{{ asset("layout/ant_furniture/js/sidebar.js") }}"></script>
