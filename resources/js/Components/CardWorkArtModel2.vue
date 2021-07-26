<template>
    <div class="product-single latest-single">
        <div class="product-thumb">
            <figure>
                <img :src="item.photo" alt="" class="img-fluid" />
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
        
        <div class="product-excerpt">
            <div class="d-flex justify-content-between align-items-center">
                <div class="col-">
                    <h5 class="mb-1">
                        {{ doc.name }}
                    </h5>
                    <div class="titlebtm">
                        {{ doc.seller.user.name }}
                    </div>
                </div>
                <div class="col-3">
                    <div class="price text-primary"> {{ item.price }}$</div>
                </div>

            </div>
            <div class="row-cardWorkArt mt-2 pt-3 d-flex justify-content-between">
                <div class="d-flex align-items-center">
                    <span
                        class="icon-user icon-cardWorkArt"
                        title="Add to collection"
                        data-toggle="tooltip"
                    />
                    <span class="ml-1"> 30 </span>
                </div>

                <div class="d-flex align-items-center">
                    <div class="mr-2">
                        4/5
                    </div>
                    <div>
                        <ul class="product-facts clearfix m-0 p-0  border-none">
                            <li class="product-rating">
                                <ul class="list-unstyled">
                                    <li>
                                        <span class="rate_active"></span>
                                    </li>
                                    <li>
                                        <span class="rate_active"></span>
                                    </li>
                                    <li>
                                        <span class="rate_active"></span>
                                    </li>
                                    <li>
                                        <span class="rate_active"></span>
                                    </li>
                                    <li>
                                        <span class="rate_disabled"></span>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>

<script>

export default {
    props: ['doc'],
    created(){ 
        this.photoTemplate();
        // console.log('doc', this.doc)
    },
    data(){
        return {
            item: {
                photo: '/img/product1.png',
                title: 'Lorem ipsum dolor sit',
                subtitle: '',
                author: {
                    name: "Lorem inpum",
                    avatar: "/img/auth-img.png"
                },
                price: 10
            }
        }
    },
    methods: {
        photoTemplate(){
            let indice = this.index + 1;
            if (!(indice <= 3))
            {
                indice = (indice - 3) ;
            }
            
            this.item.photo = `/imagenes/galerias/galeria-1.jpg`;
            
        }
    }
}
</script>

<style scoped>
    .row-cardWorkArt {
        border-top: 1px solid #ebedf2;
        font-size: 22px;
    }
    
    .icon-cardWorkArt {
        font-size: 25px;
    }

    .price {
        /* padding: 0 10px; */
        line-height: 30px;
        border-radius: 3px; 
        font-size: 25px;
    }

</style>