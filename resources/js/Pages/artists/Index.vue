<template>
    <div>
        
        <section class="breadcrumb-area banner-author">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumb-contents d-flex justify-content-center">
                            <h2 class="page-title">Perfil del Autor</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="author-profile-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="author-profile">
                            <div class="row">
                                <div class="col-lg-5 col-md-7">
                                    <div class="author-desc">
                                        <img 
                                            :src="artist.seller.user.profile.avatar || '/imagenes/profile.png'" 
                                            alt="" 
                                            style="width: 150px; height: 150px;"
                                        >
                                        <div class="infos">
                                            <h4>{{artist.seller.user.name}}</h4>
                                            <span>Miembro desde {{moment(artist.seller.user.created_at).format('MM/YYYY')}}</span>
                                            <ul>
                                                <li>
                                                    <a href="" class="btn btn-danger btn--xs" data-toggle="modal" data-target="#author-contact">
                                                        <span class="icon-envelope-open"></span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="" class="btn btn-secondary btn--xs">
                                                        <span class="icon-globe"></span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 order-lg-1 col-md-12 order-md-2">
                                    <div class="author-social social social--color--filled">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <span class="fa fa-facebook"></span> Facebook
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="fa fa-twitter"></span> Twitter
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="fa fa-dribbble"></span> Dribble
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3 order-lg-2 col-md-5 order-md-1">
                                    <div class="author-stats">
                                        <ul>
                                            <li class="t_items">
                                                <span>146</span>
                                                <p>Articulos totales</p>
                                            </li>
                                            <li class="t_sells">
                                                <span>2426</span>
                                                <p>Ventas totales</p>
                                            </li>
                                            <li class="t_reviews">
                                                <div>
                                                    <span class="ratings">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                    <span class="avg_r">  5.0 </span>
                                                    <span>(226 opiniones)</span>
                                                </div>
                                                <p>Calificaciones de autor</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 author-info-tabs">
                        <ul class="nav nav-tabs" id="author-tab" role="tablist">
                            <li>
                                <a class="active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">Perfil</a>
                            </li>
                            <li>
                                <a id="items-tab" data-toggle="tab" href="#items" role="tab" aria-controls="items" aria-selected="false">Obras Destacadas</a>
                            </li>
                            <li>
                                <a id="reviews-tab" data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Reseñas</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="author-tab-content">
                            <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="author_module about_author">
                                    <h3>Hola,
                                        <span>soy {{ artist.seller.user.name }}</span>
                                    </h3>
                                    <p>{{ artist.seller.user.profile.biography}}</p>
                                </div>
                                <div class="author_featured_items" v-if="artworks">
                                    <h3>Productos
                                        <span>destacados del autor.</span>
                                    </h3>
                                    <div class="row">
                                        <div 
                                            v-for="doc in [...artworks].slice(0, 3)"
                                            :key="doc.id"
                                            class="col-lg-4 col-md-6"
                                        >
                                            <CardWordArtModel :doc="doc"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="items" role="tabpanel" aria-labelledby="items-tab">
                                <div class="row">
                                    <div 
                                        v-for="doc in artworks"
                                        :key="doc.id"
                                        class="col-lg-4 col-md-6"
                                    >
                                        <CardWordArtModel :doc="doc" />
                                    </div>
                                </div>
                                
                                
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
                                </nav>
                            </div>
                            <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="thread thread_review thread_review2">
                                            <ul class="media-list thread-list">
                                                <li class="single-thread">
                                                    <div class="media">
                                                        <div class="media-left">
                                                            <a href="#">
                                                                <img class="media-object" src="img/m1.png" alt="Commentator Avatar">
                                                            </a>
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="d-flex flex-wrap">
                                                                <div class="">
                                                                    <div class="media-heading">
                                                                        <a href="author.html">
                                                                            <h4>Themexylum</h4>
                                                                        </a>
                                                                        <a href="#" class="rev_item">Mini - Responsive Bootstrap Dashboard</a>
                                                                    </div>
                                                                    <div class="rating product--rating">
                                                                        <ul>
                                                                            <li>
                                                                                <span class="fa fa-star"></span>
                                                                            </li>
                                                                            <li>
                                                                                <span class="fa fa-star"></span>
                                                                            </li>
                                                                            <li>
                                                                                <span class="fa fa-star"></span>
                                                                            </li>
                                                                            <li>
                                                                                <span class="fa fa-star"></span>
                                                                            </li>
                                                                            <li>
                                                                                <span class="fa fa-star-half-o"></span>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <span class="review_tag">support</span>
                                                                </div>
                                                                <div class="rev_time">9 Hours Ago</div>
                                                            </div>
                                                            <p>Nunc placerat mi id nisi interdum mollis. Praesent
                                                                pharetra,
                                                                justo ut sceleris que the mattis, leo quam aliquet
                                                                congue placerat mi id nisi interdum mollis.</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="single-thread">
                                                    <div class="media">
                                                        <div class="media-left">
                                                            <a href="#">
                                                                <img class="media-object" src="img/m2.png" alt="Commentator Avatar">
                                                            </a>
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="d-flex flex-wrap">
                                                                <div class="">
                                                                    <div class="media-heading">
                                                                        <a href="author.html">
                                                                            <h4>Jhon Oliver</h4>
                                                                        </a>
                                                                        <a href="#" class="rev_item">Beidea - One Page Parallax</a>
                                                                    </div>
                                                                    <div class="rating product--rating">
                                                                        <ul>
                                                                            <li>
                                                                                <span class="fa fa-star"></span>
                                                                            </li>
                                                                            <li>
                                                                                <span class="fa fa-star"></span>
                                                                            </li>
                                                                            <li>
                                                                                <span class="fa fa-star"></span>
                                                                            </li>
                                                                            <li>
                                                                                <span class="fa fa-star"></span>
                                                                            </li>
                                                                            <li>
                                                                                <span class="fa fa-star-half-o"></span>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <span class="review_tag">Code Quality</span>
                                                                </div>
                                                                <div class="rev_time">18 Hours Ago</div>
                                                            </div>
                                                            <p>Nunc placerat mi id nisi interdum mollis. Praesent
                                                                pharetra,
                                                                justo ut sceleris que the mattis, leo quam aliquet
                                                                congue placerat mi id nisi interdum mollis.</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="single-thread">
                                                    <div class="media">
                                                        <div class="media-left">
                                                            <a href="#">
                                                                <img class="media-object" src="img/m3.png" alt="Commentator Avatar">
                                                            </a>
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="d-flex flex-wrap">
                                                                <div class="">
                                                                    <div class="media-heading">
                                                                        <a href="author.html">
                                                                            <h4>Adam Smith</h4>
                                                                        </a>
                                                                        <a href="#" class="rev_item">Carlos - Creative Agency Template</a>
                                                                    </div>
                                                                    <div class="rating product--rating">
                                                                        <ul>
                                                                            <li>
                                                                                <span class="fa fa-star"></span>
                                                                            </li>
                                                                            <li>
                                                                                <span class="fa fa-star"></span>
                                                                            </li>
                                                                            <li>
                                                                                <span class="fa fa-star"></span>
                                                                            </li>
                                                                            <li>
                                                                                <span class="fa fa-star"></span>
                                                                            </li>
                                                                            <li>
                                                                                <span class="fa fa-star-half-o"></span>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <span class="review_tag">Design</span>
                                                                </div>
                                                                <div class="rev_time">3 Days Ago</div>
                                                            </div>
                                                            <p>Nunc placerat mi id nisi interdum mollis. Praesent
                                                                pharetra,
                                                                justo ut sceleris que the mattis, leo quam aliquet
                                                                congue placerat mi id nisi interdum mollis.</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="single-thread">
                                                    <div class="media">
                                                        <div class="media-left">
                                                            <a href="#">
                                                                <img class="media-object" src="img/m4.png" alt="Commentator Avatar">
                                                            </a>
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="d-flex flex-wrap">
                                                                <div class="">
                                                                    <div class="media-heading">
                                                                        <a href="author.html">
                                                                            <h4>EcoTheme</h4>
                                                                        </a>
                                                                        <a href="#" class="rev_item">Appspress - applanding page</a>
                                                                    </div>
                                                                    <div class="rating product--rating">
                                                                        <ul>
                                                                            <li>
                                                                                <span class="fa fa-star"></span>
                                                                            </li>
                                                                            <li>
                                                                                <span class="fa fa-star"></span>
                                                                            </li>
                                                                            <li>
                                                                                <span class="fa fa-star"></span>
                                                                            </li>
                                                                            <li>
                                                                                <span class="fa fa-star"></span>
                                                                            </li>
                                                                            <li>
                                                                                <span class="fa fa-star-half-o"></span>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <span class="review_tag">support</span>
                                                                </div>
                                                                <div class="rev_time">1 Week Ago</div>
                                                            </div>
                                                            <p>Nunc placerat mi id nisi interdum mollis. Praesent
                                                                pharetra,
                                                                justo ut sceleris que the mattis, leo quam aliquet
                                                                congue placerat mi id nisi interdum mollis.</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="single-thread">
                                                    <div class="media">
                                                        <div class="media-left">
                                                            <a href="#">
                                                                <img class="media-object" src="img/m5.png" alt="Commentator Avatar">
                                                            </a>
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="d-flex flex-wrap">
                                                                <div class="">
                                                                    <div class="media-heading">
                                                                        <a href="author.html">
                                                                            <h4>Aazztech</h4>
                                                                        </a>
                                                                        <a href="#" class="rev_item">Rida-Onepage vcard portfolio theme</a>
                                                                    </div>
                                                                    <div class="rating product--rating">
                                                                        <ul>
                                                                            <li>
                                                                                <span class="fa fa-star"></span>
                                                                            </li>
                                                                            <li>
                                                                                <span class="fa fa-star"></span>
                                                                            </li>
                                                                            <li>
                                                                                <span class="fa fa-star"></span>
                                                                            </li>
                                                                            <li>
                                                                                <span class="fa fa-star"></span>
                                                                            </li>
                                                                            <li>
                                                                                <span class="fa fa-star-half-o"></span>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <span class="review_tag">support</span>
                                                                </div>
                                                                <div class="rev_time">2 Weeks Ago</div>
                                                            </div>
                                                            <p>Nunc placerat mi id nisi interdum mollis. Praesent
                                                                pharetra,
                                                                justo ut sceleris que the mattis, leo quam aliquet
                                                                congue placerat mi id nisi interdum mollis.</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="single-thread">
                                                    <div class="media">
                                                        <div class="media-left">
                                                            <a href="#">
                                                                <img class="media-object" src="img/m6.png" alt="Commentator Avatar">
                                                            </a>
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="d-flex flex-wrap">
                                                                <div class="">
                                                                    <div class="media-heading">
                                                                        <a href="author.html">
                                                                            <h4>MR9</h4>
                                                                        </a>
                                                                        <a href="#" class="rev_item">Tamabill - Multi-Purpose HTML Template</a>
                                                                    </div>
                                                                    <div class="rating product--rating">
                                                                        <ul>
                                                                            <li>
                                                                                <span class="fa fa-star"></span>
                                                                            </li>
                                                                            <li>
                                                                                <span class="fa fa-star"></span>
                                                                            </li>
                                                                            <li>
                                                                                <span class="fa fa-star"></span>
                                                                            </li>
                                                                            <li>
                                                                                <span class="fa fa-star"></span>
                                                                            </li>
                                                                            <li>
                                                                                <span class="fa fa-star-half-o"></span>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <span class="review_tag">Flexibility</span>
                                                                </div>
                                                                <div class="rev_time">1 Month Ago</div>
                                                            </div>
                                                            <p>Nunc placerat mi id nisi interdum mollis. Praesent
                                                                pharetra,
                                                                justo ut sceleris que the mattis, leo quam aliquet
                                                                congue placerat mi id nisi interdum mollis.</p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        
                                        
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
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
import Layout from "@/Layouts/Default/LayoutDefault"
import Header from "@/Layouts/Header"
import CardWordArtModel from "@/Components/CardWorkArtModel1"

export default {
    layout: Layout,
    props: ['artist', 'artworks'],
    components: {
        Header,
        CardWordArtModel
    },
    created(){
        console.log('artist', this.artist)
        console.log('artworks', this.artworks)
    },
    data(){
        return {
            
        }
    }
}
</script>

<style scoped>
    .banner-author {
        background-image: url('/imagenes/Banner-author.jpg');
    }
</style>
