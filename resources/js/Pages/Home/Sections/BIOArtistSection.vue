<template>
    <div style="background: #E3E9F3;">
        <section class="latest-product section--padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h2 class="title">BIO de Artistas</h2>
                        </div>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="m-1">
                                <Buttom
                                    text="obras destacadas"
                                />
                            </div>
                            <div class="m-1">
                                <Buttom
                                    text="ultimas obras"
                                    variant="secondary"
                                    size="lg"
                                />
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-12">
                        <div class="product-list">
                            <div class="tab-content" id="lp-tab-content">
                                <div
                                    class="tab-pane fade show active"
                                    id="tab1"
                                    role="tabpanel"
                                    aria-labelledby="tab-one"
                                >
                                    <div class="row">
                                        <div
                                            class="col-md-6 col-lg-4 my-2"
                                            v-for="doc in docs"
                                            :key="doc.id"
                                        >
                                            <CardBIOArtist 
                                                :doc="doc"
                                            />
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="text-center m-top-20">
                                <a href="" class="btn btn--lg btn-primary"
                                    >Ver mas</a
                                >
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
import CardBIOArtist from "../../../Components/CardBIOArtist";
import Buttom from '../../../Components/ButtonCustom'

export default {
    props: ['docs'],
    components: {
        CardBIOArtist,
        Buttom
    }
};
</script>

<style scoped>
    .product-single {
        background: none;
        height: auto;
    }
</style>