<template>
    <div>
        <HeaderAccount />
        <div class="dashboard_contents mt-5">
            <div class="container p-2" style="background:white;">
                <div class="px-2 mt-2">
                    <div>
                        <h4 class="title">Obras</h4>
                    </div>
                </div>
                <div v-if="artworks.length">
                    <div class="product_archive table-responsive table-custom">
                        <table class="table mx-3">
                            <thead>
                                <th class="text-muted">Nombre</th>
                                <th class="text-muted">ID</th>
                                <th class="text-muted">Precio</th>
                                <th class="text-muted">Categoria</th>
                                <th class="text-muted">Fecha</th>
                                <th class="text-muted"></th>
                            </thead>
                            <tbody>
                                <tr v-for="(item, i) in artworks" :key="i">
                                    <td>
                                        <div class="d-flex">
                                            <img 
                                                :src="`${item?.artwork_images[0]?.location}`"
                                                alt="Purchase image"
                                                style="width: 60px; height: 60px; border-radius: 50%;"
                                            >
                                            <div class="ml-2 d-flex align-items-center">
                                                <span class="text-primary">
                                                    {{ item.name }}
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-muted">
                                        <div>{{ item.id }}</div>
                                    </td>
                                    <td class="text-muted">
                                        <div class="">
                                            <span>{{ item.price }} $</span>
                                        </div>
                                    </td>
                                    <td class="text-muted">
                                        {{ item.name }}
                                    </td>
                                    <td class="text-muted">
                                        <div>
                                            {{ new Date(item.created_at).getDate() }}/
                                            {{ new Date(item.created_at).getMonth() + 1}}/
                                            {{ new Date(item.created_at).getFullYear() }}
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="product_archive">
                        <div class="row">
                            
                            <div class="col-md-12">
                                
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
                <div v-else class="text-center border-top">
                    <div class="my-5">
                        <div class="text-muted mt-2">
                            <h3>Sin Obras</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import layout from "@/Layouts/Default/LayoutDefault.vue"
import HeaderAccount from '@/Layouts/HeaderMenu.vue'

export default {
    props: ['artworks'],
    layout,
    created(){
        console.log('artworks', this.artworks)
    },
    components: {
        HeaderAccount
    }
}

</script>

<style scoped>
    .table-custom th{
        font-size: 1.2rem;
    }

    .table-custom td{
        font-weight: bolder;
        font-size: 1.2rem;
    }

</style>