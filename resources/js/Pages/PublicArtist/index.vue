<template>
    <div>
        <Header title="Pintura 22" />
        <section class="single-product-desc">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <div class="item-preview border-none">
                            <div class="item-prev-area">
                                <div class="preview-img-wrapper">
                                    <div class="item__preview-img">
                                        <div class="item__preview-slider">
                                            <div class="prev-slide">
                                                <img src="img/single1.jpg" alt="Preview Image">
                                            </div>
                                        </div>
                                        <div class="prev-nav thumb-nav">
                                            <span class="lnr nav-left icon-arrow-left"></span>
                                            <span class="lnr nav-right icon-arrow-right"></span>
                                        </div><!-- ends: .prev-nav -->
                                    </div>
                                    <div class="item__preview-thumb pb-4 mt-4 border-primary">
                                        <div class="prev-thumb ">
                                            <div 
                                                class="thumb-slider d-flex"
                                                
                                                >
                                                <div class="item-thumb" 
                                                    v-for="(item, i) in [1,2,3,4,5,6,7,8,9,10]" :key="i"> 
                                                    <img src="img/thumb1.jpg" alt="Thumbnail Image">
                                                </div>
                                            </div><!-- end .thumb-slider -->
                                        </div>
                                    </div><!-- ends: .item__preview-thumb -->
                                </div><!-- ends: .preview-img-wrapper -->
                            </div><!-- Ends: .item-prev-area -->
                        </div><!-- ends: .item-preview-->
                        <div class="item-info border-primary">
                            <div class="item-navigation">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li>
                                        <a href="#product-details" class="active" id="tab1" aria-controls="product-details" role="tab" data-toggle="tab" aria-selected="true">
                                            Detalles del producto</a>
                                    </li>
                                    <li>
                                        <a href="#product-comment" id="tab2" aria-controls="product-comment" role="tab" data-toggle="tab">
                                            Comentarios </a>
                                    </li>
                                    <li>
                                        <a href="#product-review" id="tab3" aria-controls="product-review" role="tab" data-toggle="tab">
                                            <span> Autor </span>
                                        </a>
                                    </li>
                                </ul>
                            </div><!-- ends: .item-navigation -->
                            <div class="tab-content">
                                <div class="fade show tab-pane product-tab active" id="product-details" role="tabpanel" aria-labelledby="tab1">
                                    <div class="tab-content-wrapper">
                                        <h3 class="text-primary">Información:</h3>
                                        <p class="p-bottom-30">Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the
                                            mattis, leo quam aliquet congue placerat mi id nisi interdum mollis. Praesent
                                            pharetra,
                                            justo ut scel erisque the mattis, leo quam aliquet congue justo ut scelerisque.
                                            Praesent
                                            pharetra, justo ut scelerisque the mattis, leo quam aliquet congue justo ut
                                            scelerisque.</p>
                                        <img src="img/prodesc.jpg" alt="This is product description thumbnail">
                                    </div>
                                </div><!-- ends: .tab-content -->
                                <div class="fade tab-pane product-tab" id="product-comment" role="tabpanel" aria-labelledby="tab2">
                                    <div class="thread">
                                        <ul class="media-list thread-list">
                                            <li class="single-thread">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <a href="#">
                                                            <img class="media-object" src="img/m1.png" alt="Commentator Avatar">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <div>
                                                            <div class="media-heading">
                                                                <a href="author.html">
                                                                    <h4>Themexylum</h4>
                                                                </a>
                                                                <span>9 Hours Ago</span>
                                                            </div>
                                                            <span class="comment-tag buyer">Purchased</span>
                                                            <a href="#" class="reply-link">Reply</a>
                                                        </div>
                                                        <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut
                                                            sceleris que the mattis, leo quam aliquet congue placerat mi id nisi
                                                            interdum mollis. </p>
                                                    </div>
                                                </div><!-- ends: .media -->
                                                <!-- nested comment markup / replies -->
                                                <ul class="children">
                                                    <li class="single-thread depth-2">
                                                        <div class="media">
                                                            <div class="media-left">
                                                                <a href="#">
                                                                    <img class="media-object" src="img/m2.png" alt="Commentator Avatar">
                                                                </a>
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="media-heading">
                                                                    <h4>AazzTech</h4>
                                                                    <span>6 Hours Ago</span>
                                                                </div>
                                                                <span class="comment-tag author">Author</span>
                                                                <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra,
                                                                    justo ut sceleris que the mattis, leo quam aliquet congue
                                                                    placerat mi id nisi interdum mollis. </p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="single-thread depth-2">
                                                        <div class="media">
                                                            <div class="media-left">
                                                                <a href="#">
                                                                    <img class="media-object" src="img/m1.png" alt="Commentator Avatar">
                                                                </a>
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="media-heading">
                                                                    <h4>Themexylum</h4>
                                                                    <span>9 Hours Ago</span>
                                                                </div>
                                                                <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra,
                                                                    justo ut sceleris que the mattis, leo quam aliquet congue
                                                                    placerat mi id nisi interdum mollis. </p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul><!-- ends: .children -->
                                                <!-- comment reply -->
                                                <!-- <div class="media depth-2 reply-comment">
                                                    <div class="media-left">
                                                        <a href="#">
                                                            <img class="media-object" src="img/m2.png" alt="Commentator Avatar">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <form action="#" class="comment-reply-form">
                                                            <textarea class="bla" name="reply-comment" placeholder="Write your comment..."></textarea>
                                                            <button class="btn btn--md btn-primary">Post Comment</button>
                                                        </form>
                                                    </div>
                                                </div> -->
                                            </li><!-- ends: .single-thread-->
                                        </ul><!-- ends: .media-list -->
                                        <!-- Start Pagination -->
                                        <!-- <nav class="pagination-default ">
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
                                        </nav> -->
                                        <div class="comment-form-area">
                                            <h4>Leave a comment</h4>
                                            <div class="media comment-form">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object" src="img/m7.png" alt="Commentator Avatar">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <form action="#" class="comment-reply-form">
                                                        <textarea name="reply-comment" placeholder="Write your comment..."></textarea>
                                                        <button class="btn btn--sm btn-primary">Post Comment</button>
                                                    </form>
                                                </div>
                                            </div><!-- ends: .comment-form -->
                                        </div><!-- ends: .comment-form-area -->
                                    </div><!-- ends: .comments -->
                                </div><!-- ends: .product-comment -->
                                <div class="fade tab-pane product-tab" id="product-review" role="tabpanel" aria-labelledby="tab3">
                                    <div class="thread thread_review">
                                        <ul class="media-list thread-list">
                                            <li class="single-thread">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <!-- <a href="#"> -->
                                                            <img class="media-object rounded-circle" src="img/m1.png" alt="Commentator Avatar">
                                                        <!-- </a> -->
                                                    </div><!-- ends: .media-left -->
                                                    <div class="media-body">
                                                        <div class="clearfix">
                                                            <div class="pull-left">
                                                                <div class="media-heading">
                                                                    <!-- <a href="author.html"> -->
                                                                        <h4 class="text-primary mb-0">
                                                                            Autor:
                                                                        </h4>
                                                                        <h4>
                                                                            Daniel L Lewis P.
                                                                        </h4>
                                                                    <!-- </a> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- ends: .media-body -->
                                                </div><!-- ends: .media -->
                                                <div class="p-4">
                                                    <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut
                                                        sceleris que the mattis, leo quam aliquet congue placerat.</p>
                                                </div>
                                                <!-- comment reply -->
                                            </li><!-- end single comment thread-->
                                            
                                            <div class="ml-5">
                                                <button class="btn btn--md btn-primary">Ver Autor</button>
                                            </div>

                                        </ul><!-- ends: .media-list -->
                                        <!-- Start Pagination -->
                                    </div><!-- ends: .comments -->
                                </div><!-- ends: .product-comment -->

                            </div><!-- ends: .tab-content -->
                        </div><!-- ends: .item-info -->
                    </div><!-- ends: .col-md-8 -->
                    <div class="col-lg-4 col-md-12">
                        <aside class="sidebar sidebar--single-product card-specs">
                            <div class="sidebar-card card-pricing bg-primary text-white">
                                <div class="price border-none d-flex justify-content-end mb-0">
                                    <h1 class="text-white">
                                        20,00 <sup>$</sup>
                                    </h1>
                                </div>
                                <div class="d-flex justify-content-around mb-2">
                                    <a href="#" class="btn btn--sm btn-warning">Comprar</a>
                                    <a href="#" class="btn btn--sm btn-secondary">Agregar a carrito</a>
                                </div><!-- ends: .author-btn -->

                                <ul class="pricing-options border-bottom">
                                    <li>
                                        <div class="custom-radio d-flex">
                                            <div class="mt-2 mr-2">
                                                <img class="media-object rounded-circle" src="img/buyr1.png" alt="">
                                            </div>
                                            <div class="mt-2">
                                                <!-- <div> -->
                                                    <div class="text-weight-bold">Autor</div>
                                                    <p>Daniel L Lewis P.</p>
                                                <!-- </div> -->
                                            </div>
                                        </div>
                                    </li>
                                    <li class="border-none">
                                        <div class="custom-radio d-flex">
                                            <div class="mt-2 mr-2">
                                                <img class="media-object rounded-circle" src="img/buyr1.png" alt="">
                                            </div>
                                            <div class="mt-2">
                                                <!-- <div> -->
                                                    <div class="mb-0">Titulo obra:</div>
                                                    <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                                <!-- </div> -->
                                            </div>
                                        </div>
                                    </li>
                                </ul><!-- end .pricing-options -->
                                
                                <div class="">
                                    <h3 class="text-white">Atritutos.</h3>

                                    <ul class="pricing-options mb-0 border-bottom">
                                        <li 
                                            class="border-none"
                                            v-for="(item, i) in 
                                            [
                                                '20cm x 20xm',
                                                '1 kg.',
                                                'Tematica: Abstracta Contemporanea',
                                                'Estilo: Clasico, Lumisimo',
                                                'Tecnica: Oleo, Pastel, Barniz',
                                                'Fecha: Desconocida'
                                            ]
                                            " :key="i"
                                            >
                                            <div class="custom-radio d-flex align-items-center">
                                                <div class="mt-2 mr-2">
                                                    <img class="media-object rounded-circle" src="img/buyr1.png" alt="">
                                                </div>
                                                <div class="mt-2">
                                                   {{ item }}
                                                </div>
                                            </div>
                                        </li>
                                    </ul><!-- end .pricing-options -->
                                </div>


                            </div><!-- end .sidebar--card -->

                        </aside><!-- ends: .sidebar -->
                    </div><!-- ends: .col-md-4 -->
                </div><!-- ends: .row -->
            </div><!-- ends: .container -->
        </section>
    </div>
</template>

<script>
import Layout from "@/Layouts/Default/LayoutDefault"
import Header from "@/Layouts/Header"

export default {
    layout: Layout,
    components: {
        Header
    }
}
</script>

<style scoped>

 @media (min-width: 768px){
     .card-specs {
        /* position: absolute; */
     }
 }
</style>