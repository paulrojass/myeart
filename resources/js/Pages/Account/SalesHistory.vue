<template>
    <div>
        <div class="dashboard_contents section--padding">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="filter-bar clearfix filter-bar2 ">
                            <div class="dashboard__title d-flex align-items-center">
                                <h3>Historial de ventas</h3>
                            </div>
                            <div class="filter__items m-4 col-6">
                                <div class="filter__option filter--search w-100">
                                    <form action="#">
                                        <input type="text" placeholder="Search products">
                                        <button type="submit"><span class="icon-magnifier"></span></button>
                                    </form>
                                </div>
                            </div><!-- ends: .pull-right -->
                        </div><!-- ends: .filter-bar -->
                    </div><!-- ends: .col-md-12 -->
                </div><!-- ends: .row -->

                <div class="product_archive mb-5">
                    <table class="table">
                        <thead>
                            <th>Producto</th>
                            <th>Info</th>
                            <th>Precio</th>
                            <th>Certificado</th>
                            <th>Estado</th>
                        </thead>
                        <tr>
                            <td>
                                Cuadro oleo verde
                            </td>
                            <td>
                                <div>17/02/20</div>
                                <div>Daniel Lewis</div>
                            </td>
                            <td>
                                <div class="item_price">
                                    <span>59 $</span>
                                </div>
                            </td>
                            <td>
                                Icon
                            </td>
                            <td>
                                En Progreso
                            </td>
                        </tr>
                    </table>
                </div>

                <div class="product_archive">
                    <div class="title_area">
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <h5>Producto</h5>
                            </div>
                            <div class="col-md-2 col-sm-6">
                                <h5 class="add_info">Info</h5>
                            </div>
                            <div class="col-md-2 col-sm-6 text-center">
                                <h5>Precio</h5>
                            </div>
                            <div class="col-md-2 col-sm-6">
                                <h5>Certificado</h5>
                            </div>
                            <div class="col-md-2 col-sm-6">
                                <h5>Estado</h5>
                            </div>
                        </div>
                    </div><!-- ends: .title_area -->
                    <div class="row">
                        <div class="single_product clearfix col-md-12">
                            <div class="row">
                                <div class="col-lg-4 col-sm-12">
                                    <div class="product__description">
                                        <img src="img/pur1.jpg" alt="Purchase image">
                                        <div class="short_desc">
                                            <h5>
                                                <a href="">Cuadro oleo verde</a>
                                            </h5>
                                        </div>
                                    </div>
                                    <!-- ends: .product__description -->
                                </div>
                                <!-- ends: .col-md-5 -->
                                <div class="col-lg-2 col-sm-6">
                                    <div class="d-flex aling-items-center">
                                        <div>
                                            <h5>17/02/20</h5>
                                            <h5>Daniel Lewis</h5>
                                        </div>
                                    </div>
                                    <!-- ends: .product__additional_info -->
                                </div>
                                <!-- ends: .col-md-3 -->
                                <div class="col-lg-2 col-sm-6">
                                    <div class="product__price_download">
                                        <div class="item_price ">
                                            <span>$59</span>
                                        </div>
                                    </div><!-- ends: .product__price_download -->
                                </div><!-- ends: .col-md-4 -->

                                <div class="col-lg-2 col-sm-6">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <div>
                                            <img src="imagenes/icons/fl_downloader.png" alt="" width="40px">
                                        </div>
                                    </div>
                                </div><!-- ends: .col-md-4 -->

                                <div class="col-lg-2 col-sm-6">
                                    <div class="product__price_download">
                                        <div class="item_price ">
                                            <span>En proceso</span>
                                        </div>
                                    </div><!-- ends: .product__price_download -->
                                </div><!-- ends: .col-md-4 -->
                            </div>
                        </div><!-- ends: .single_product -->
                        <!-- Start Pagination -->
                        <div class="col-md-12">
                            <!-- Start Pagination -->
                            <nav class="pagination-default ">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true"><i class="fa fa-long-arrow-left"></i></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
                                    <li class="page-item"><a class="page-link" href="#">10</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true"><i class="fa fa-long-arrow-right"></i></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav><!-- Ends: .pagination-default -->
                        </div>
                    </div><!-- ends: .row -->
                </div><!-- ends: .product_archive2 -->
            </div><!-- ends: .container -->
        </div><!-- ends: .dashboard_menu_area -->
    </div>
</template>