<template>
    <inertia-link
        :href="
            route('detailsWorkArtist')
        "
    >
        <div :class="`product-single ${color}`">
            <div class="product-thumb">
                <figure>
                    <img 
                        :src="item.photo" 
                        alt="" 
                        class="img-fluid" 
                    />
                    <!-- <figcaption>
                        <ul class="list-unstyled">
                            <li>
                                <a href=""><span class="icon-basket"></span></a>
                            </li>
                            <li>
                                <a href="">Live Demo</a>
                            </li>
                        </ul>
                    </figcaption> -->
                </figure>
            </div>
            <!-- Ends: .product-thumb -->
            <div class="descCardWorkArt">
                <h5 class="mb-1 title-author-workArt">
                    {{ item.title }}
                </h5>
                <div class="subtitle-author-workArt">
                    {{ item.author.name }}
                </div>
                <div class="row-cardWorkArt my-2 pt-3 d-flex justify-content-between">
                    
                    <div class="d-flex align-items-center">
                        <span
                            class="icon-heart icon-cardWorkArt"
                            title="Add to collection"
                            data-toggle="tooltip"
                            style=""
                        />
                        <span class="ml-1"> 30 </span>
                    </div>
                    <div class="price"> {{ item.price }}$</div>
                </div>
            </div>

        </div>
    </inertia-link>
</template>

<script>

export default {
    props: ['item', 'color', 'index'],
    created(){
        this.photoTemplate();
    },
    data(){
        return {
            item: {
                photo: '/img/product1.png',
                title: 'Nombre de la obra',
                subtitle: '',
                author: {
                    name: "Nombre del autor",
                    avatar: "/img/auth-img.png"
                },
                price: 24
            }
        }
    },
    methods: {
        photoTemplate(){
            if (this.index < 6) {
                this.item.photo = `/imagenes/obras/obra-${this.index + 1}.jpg`
            }
        }
    }
}
</script>

<style scoped>
    .product-single.color-pink {
        background: #F3EAEE;
    }

    .product-single {
        padding: 10px;
    }

    .descCardWorkArt {
        padding: 10px;
        color: #125CA0;
    }

    .descCardWorkArt:hover {
        text-decoration: none;
    }

    .title-author-workArt {
        font-size: 1.5rem;
        color: black;
        font-weight: bolder;
    }
    .subtitle-author-workArt {
        font-size: 1.2rem;
        color: black;
        font-weight: bolder;
    }
    .row-cardWorkArt {
        border-top: 2px solid #125CA0;
        font-size: 22px;
    }
    
    .icon-cardWorkArt {
        font-size: 25px;
    }

    .row-cardWorkArt .price {
        padding: 0 10px;
        line-height: 30px;
        border-radius: 3px; 
        background: rgba(110, 79, 246, 0.08);
    }
</style>