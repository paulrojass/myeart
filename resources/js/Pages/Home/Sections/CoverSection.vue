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
                                            <div class="d-flex">
                                                <div class="col-6 d-flex align-items-center">
                                                    <h4 class="text-muted">Buscar Obra por Categoria</h4>
                                                </div>
                                                <div
                                                    class="search__select select-wrap"
                                                >
                                                    <select
                                                        name="category"
                                                        class="select--field "
                                                        v-model="form.category"
                                                    >
                                                        <option value="">
                                                           Categorias
                                                        </option>
                                                        <option 
                                                            v-for="category in categories" :key="category.id"
                                                            :value="category.id" 
                                                        >
                                                            {{ category.name }}
                                                        </option>
                                                    </select>
                                                    <span
                                                        class="icon-arrow-down"
                                                    ></span>
                                                </div>
                                                <inertia-link :href="`/obras`" class="search-btn">
                                                    <button
                                                        class=" btn--lg btn-primary"
                                                    >
                                                        Buscar
                                                    </button>
                                                </inertia-link>
                                            </div>
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

<script>
export default ({
    props: ['categories'],
    data(){
        return {
            form: this.$inertia.form({
                category: ""
            })
        }
    },
    methods: {
        submit() {
            this.form.get(this.route('search'))
        }
    }
})
</script>

