<template>
    <section 
        class="hero-area bgimage"
        style="
            background-image: url('imagenes/Banner.jpg'); 
            background-size: cover;
        "
    >
        <!-- <div class="bg-overlay"></div> -->
        <div class="hero-content content_above">
            <div class="content-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="hero__content__title">
                                <h1 class="display-3">
                                    El arte que todos
                                    <br />
                                    llevamos dentro...
                                </h1>
                                <p class="tagline">
                                    La Red Social donde podrás exponer, difundir y compartir el amor por el arte y tus creaciones
                                </p>
                            </div>
                            <!-- end .hero__btn-area-->
                            <div class="search-area">
                                <div class="row">
                                    <div class="col-md-10 offset-md-1">
                                        <div class="search_box">
                                            <form action="#">
                                                <input
                                                    type="text"
                                                    class="text_field"
                                                    placeholder="Realiza tu busqueda"
                                                />
                                                <div
                                                    class="search__select select-wrap"
                                                >
                                                    <select
                                                        name="category"
                                                        class="select--field"
                                                    >
                                                        <option value="">
                                                           Categorias
                                                        </option>
                                                        <option value="">
                                                            PSD
                                                        </option>
                                                        <option value="">
                                                            HTML
                                                        </option>
                                                        <option value="">
                                                            WordPress
                                                        </option>
                                                        <option value="">
                                                            Plugins
                                                        </option>
                                                    </select>
                                                    <span
                                                        class="icon-arrow-down"
                                                    ></span>
                                                </div>
                                                <!-- ends: .select-wrap -->
                                                <button
                                                    type="submit"
                                                    class="search-btn btn--lg btn-primary"
                                                >
                                                    Avanzada
                                                </button>
                                            </form>
                                        </div>
                                        <!-- end .search_box -->
                                    </div>
                                </div>
                            </div>
                            <!--start .search-area -->
                        </div>
                        <!-- ends: .col-md-12 -->
                    </div>
                    <!-- ends: .row -->
                </div>
                <!-- ends: .container -->
            </div>
            <!-- ends: .contact_wrapper -->
        </div>
        <!-- ends: hero-content -->
    </section>
</template>
