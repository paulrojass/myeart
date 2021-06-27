<template>
    <div class="product-single latest-single">
        <div class="product-thumb card-artist">
            <figure class="position-relative">
                <img :src="item.photo" alt="" class="" />
                <figcaption
                    style="
                        border-radius: 50%;
                        width: 350px;
                        height: 300px;
                        cursor: pointer;
                    "
                >
                    <div
                        class="p-5 text-center d-flex flex-column justify-content-between"
                        style="color: white; height: 100%"
                    >
                        <div class="cardBIO-text">Artista 1</div>
                        <div class="cardBIO-text">Pintor</div>
                        <div class="d-flex justify-content-center">
                            <div class="product-excerpt m-0 p-0 border-none">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <ul
                                            class="product-facts clearfix m-0 p-0 border-none position-relative"
                                            style="width: 100px"
                                        >
                                            <li class="product-rating">
                                                <ul class="list-unstyled">
                                                    <li>
                                                        <span
                                                            class="rate_active"
                                                        ></span>
                                                    </li>
                                                    <li>
                                                        <span
                                                            class="rate_active"
                                                        ></span>
                                                    </li>
                                                    <li>
                                                        <span
                                                            class="rate_active"
                                                        ></span>
                                                    </li>
                                                    <li>
                                                        <span
                                                            class="rate_active"
                                                        ></span>
                                                    </li>
                                                    <li>
                                                        <span
                                                            class="rate_disabled"
                                                        ></span>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <span
                                        class="icon-user icon-cardWorkArt"
                                        title="Add to collection"
                                        data-toggle="tooltip"
                                    />
                                    <span class="ml-1"> 30 </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </figcaption>
            </figure>
        </div>
    </div>
</template>

<script>
export default {
    props: ["item"],
    data() {
        return {
            item: {
                photo: "/img/product1.png",
                title: "Lorem ipsum dolor sit",
                subtitle: "",
                author: {
                    name: "Lorem inpum",
                    avatar: "/img/auth-img.png",
                },
                price: 10,
            },
        };
    },
};
</script>

<style scoped>
.cardBIO-text {
    font-weight: bold;
    font-size: 18px;
}

.product-thumb.product-thumb {
    overflow: revert;
}

.product-single .product-thumb figure img {
    border-radius: 50%;
    width: 350px;
    height: 300px;
}
</style>
