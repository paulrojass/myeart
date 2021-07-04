<template>
    <div>
        <!-- end /.menu-area -->
        <section class="hero-area2 hero-area3 bgimage">
            <div class="bg_image_holder">
                <img src="img/hero-image01.png" alt="background-image">
            </div>
            <div class="hero-content content_above">
                <div class="content-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="hero__content__title">
                                    <h1>Busca tu obra favorita</h1>
                                </div><!-- end .hero__btn-area-->
                            </div><!-- end .col-md-12 -->
                        </div>
                    </div>
                </div><!-- end .contact_wrapper -->
            </div><!-- end hero-content -->
        </section><!-- ends: .hero-area -->
        <div class="filter-area product-filter-area filter-area2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    </div><!-- end .col-md-12 -->
                </div><!-- end filter-bar -->
            </div>
        </div><!-- end .filter-area -->
        <section class="product-grid p-bottom-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-12 order-lg-0 order-md-1 order-sm-1 order-1">
                        <h3 class="h3 text-primary mb-4 font-weight-bolder">Avanzada</h3>
                        <aside class="sidebar product--sidebar">
                            <!-- Item -->
                            <div>
                                <h2 class="text-primary">Medio</h2>
                                <div class="sidebar-card card--category border-primary mb-2">
                                <!-- End Item -->
                                    <a class="card-title" href="#collapse1" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse1">
                                        <h5 class="mb-0">Pintura
                                            <span class="icon-arrow-down text-primary"></span>
                                        </h5>
                                    </a>
                                    <div class="collapse collapsible-content" id="collapse1">
                                        <ul class="card-content">
                                            <li>
                                                <a href="#">
                                                    option 1
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    option 2
                                                </a>
                                            </li>
                                        </ul>
                                    </div><!-- end .collapsible_content -->
                                </div><!-- end .sidebar-card -->
                                <div class="sidebar-card card--category border-primary mb-2">
                                <!-- End Item -->
                                    <a class="card-title" href="#collapse2" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse2">
                                        <h5 class="mb-0">Categoria de Pintura
                                            <span class="icon-arrow-down text-primary"></span>
                                        </h5>
                                    </a>
                                    <div class="collapse collapsible-content" id="collapse2">
                                        <ul class="card-content">
                                            <li>
                                                <a href="#">
                                                    option 1
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    option 2
                                                </a>
                                            </li>
                                        </ul>
                                    </div><!-- end .collapsible_content -->
                                </div><!-- end .sidebar-card -->

                            </div>
                            <div class="mt-4">
                                <h2 class="text-primary">Estilo de pintura</h2>
                                <div class="sidebar-card card--category border-primary mb-2">
                                <!-- End Item -->
                                    <a class="card-title" href="#collapse3" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse3">
                                        <h5 class="mb-0">Figurativo
                                            <span class="icon-arrow-down text-primary"></span>
                                        </h5>
                                    </a>
                                    <div class="collapse collapsible-content" id="collapse3">
                                        <ul class="card-content">
                                            <li>
                                                <a href="#">
                                                    option 1
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    option 2
                                                </a>
                                            </li>
                                        </ul>
                                    </div><!-- end .collapsible_content -->
                                </div><!-- end .sidebar-card -->
                                <div class="sidebar-card card--category border-primary mb-2">
                                <!-- End Item -->
                                    <a class="card-title" href="#collapse4" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse4">
                                        <h5 class="mb-0">Tecnicas de pintura
                                            <span class="icon-arrow-down text-primary"></span>
                                        </h5>
                                    </a>
                                    <div class="collapse collapsible-content" id="collapse4">
                                        <ul class="card-content">
                                            <li>
                                                <a href="#">
                                                    option 1
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    option 2
                                                </a>
                                            </li>
                                        </ul>
                                    </div><!-- end .collapsible_content -->
                                </div><!-- end .sidebar-card -->

                                <div class="mt-4">
                                    <ItemRange 
                                        title="Precio"
                                        prefix=" €"
                                        :min="0"
                                        :max="100"
                                    />
                                </div>

                                <div class="mt-4">
                                    <h2 class="text-primary">Orientacion</h2>
                                    <div class="row">
                                        <div 
                                            v-for="(item, i) in [1,2,3]" :key="i"
                                            class="col-4">
                                            <img src="img/buyr1.png" alt="" style="width: 100%">
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <h2 class="text-primary">Tamaño</h2>
                                    <div class="row">
                                        <div class="col-4">
                                            <img src="img/buyr1.png" alt="" style="width: 100%">
                                        </div>
                                        <div class="col-4">
                                            <img src="img/buyr1.png" alt="" style="width: 100%">
                                        </div>
                                        <div class="col-4">
                                            <img src="img/buyr1.png" alt="" style="width: 100%">
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <ItemRange 
                                        title="Altura"
                                        prefix=" + CM"
                                        :min="0"
                                        :max="500"
                                    />
                                </div>
                                <div class="mt-4">
                                    <ItemRange 
                                        title="Ancho"
                                        prefix=" + CM"
                                        :min="0"
                                        :max="500"
                                    />
                                </div>
                            </div>
                        </aside><!-- end aside -->
                    </div><!-- end .col-md-3 -->
                    <div class="col-xl-9 col-lg-8 col-md-12 order-lg-1 order-md-0 order-sm-0 order-0 product-list">
                        <div class="row">
                            <div 
                                class="col-xl-4 col-lg-6 col-md-6"
                                v-for="(item, index) in [1,2,3,4,5,6]"
                                :key="index"                                
                            >
                                <CardWordArtModel />
                            </div>
                        </div>
                        <!-- Start Pagination -->
                        <nav class="pagination-default mb-lg-0 mb-30">
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
                    <!-- Ends: .product-list -->
                </div>
            </div>
            <div class="mt-5">
                <NewsletterSection />
            </div>
        </section><!-- ends: .product-grid -->

    </div>

</template>

<script>
import Layout from "@/Layouts/Default/LayoutDefault"
import Header from "@/Layouts/Header"
import CardWordArtModel from "@/Components/CardWorkArtModel1"
import NewsletterSection from "@/Pages/Home/Sections/NewsletterSection"
import ItemRange from '@/Components/ItemRange'

export default {
    layout: Layout,
    components: {
        Header,
        CardWordArtModel,
        NewsletterSection,
        ItemRange
    }
}
</script>