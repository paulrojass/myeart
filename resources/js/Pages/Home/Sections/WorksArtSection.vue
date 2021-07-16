<template>
    <section class="latest-product section--padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2 class="title">Obras</h2>
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
                                        class="col-md-6 col-lg-6 p-3"
                                        v-for="(item, i) in [1,2,3,4]"
                                        :key="i"
                                    >
                                        <CardWorkArtModel 
                                            color="color-pink"
                                            :index="i"
                                        />
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="text-center m-top-20">
                                                        <inertia-link
                                :href="
                                    route('search')
                                "
                                class="btn btn--lg btn-primary"
                            >
                                Ver mas
                            </inertia-link>
                            <!-- <a href="" class="btn btn--lg btn-primary"
                                >Ver mas</a
                            > -->
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
</template>

<script>
import CardWorkArtModel from "../../../Components/CardWorkArtModel1";
import Buttom from '../../../Components/ButtonCustom'

export default {
    components: {
        CardWorkArtModel,
        Buttom
    },
    data() {
        return {
            items: [1, 2, 3],
        };
    },
};
</script>
