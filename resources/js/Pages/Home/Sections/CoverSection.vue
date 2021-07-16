<template>
    <section 
        class="hero-area bgimage"
        style="
            background-image: url('imagenes/Banner-home.jpg'); 
            background-size: cover;
        "
    >
        
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
                                                            opcion 1
                                                        </option>
                                                        <option value="">
                                                            opcion 2
                                                        </option>
                                                        <option value="">
                                                            opcion 3
                                                        </option>
                                                        <option value="">
                                                            opcion 4
                                                        </option>
                                                    </select>
                                                    <span
                                                        class="icon-arrow-down"
                                                    ></span>
                                                </div>
                                                
                                                <button
                                                    type="submit"
                                                    class="search-btn btn--lg btn-primary"
                                                >
                                                    Avanzada
                                                </button>
                                            </form>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                    
                </div>
                
            </div>
            
        </div>
        
    </section>
</template>
