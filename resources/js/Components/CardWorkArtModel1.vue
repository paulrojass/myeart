<template>
    <div class="product-single latest-single">
        <div class="product-thumb">
            <figure>
                <img :src="item.photo" alt="" class="img-fluid" />
                <figcaption>
                    <ul class="list-unstyled">
                        <li>
                            <a href=""><span class="icon-basket"></span></a>
                        </li>
                        <li>
                            <a href="">Live Demo</a>
                        </li>
                    </ul>
                </figcaption>
            </figure>
        </div>
        <!-- Ends: .product-thumb -->
        <div class="product-excerpt">
            <h5 class="mb-1">
                {{ item.title }}
            </h5>
            <div class="titlebtm">
                {{ item.author.name }}
            </div>
            <div class="row-cardWorkArt mt-2 pt-3 d-flex justify-content-between">
                <div class="d-flex align-items-center">
                    <span
                        class="icon-heart icon-cardWorkArt"
                        title="Add to collection"
                        data-toggle="tooltip"
                    />
                    <span class="ml-1"> 30 </span>
                </div>
                <div class="price"> {{ item.price }} $</div>
            </div>
        </div>

    </div>
</template>

<script>

export default {
    props: ['item'],
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

    .row-cardWorkArt .price {
        padding: 0 10px;
        line-height: 30px;
        border-radius: 3px; 
        background: rgba(110, 79, 246, 0.08);
    }
</style>