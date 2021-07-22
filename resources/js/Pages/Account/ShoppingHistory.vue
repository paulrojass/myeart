<template>
    <div>
        <HeaderAccount />
        <div class="dashboard_contents mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="filter-bar clearfix filter-bar2 ">
                            <div class="dashboard__title d-flex align-items-center">
                                <span class="title">Historial de compras</span>
                            </div>
                            <div class="filter__items m-4 col-6">
                                <div class="filter__option filter--search w-100">
                                    <form action="#">
                                        <input type="text" placeholder="Buscar Productos">
                                        <button type="submit"><span class="icon-magnifier"></span></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product_archive table-responsive table-custom">
                    <table class="table mx-3">
                        <thead>
                            <th class="text-muted">Producto</th>
                            <th class="text-muted">Info</th>
                            <th class="text-muted">Precio</th>
                            <th class="text-primary">Certificado</th>
                            <th class="text-primary text-center">Estado</th>
                        </thead>
                        <tbody>
                            <tr v-for="(items, i) in [1,2,3,4]" :key="i">
                                <td>
                                    <div class="d-flex">
                                        <img src="/img/pur1.jpg"
                                             alt="Purchase image"
                                             style="width: 100px; height: 80px;"
                                        >
                                        <div class="ml-3">
                                            <span>
                                                Cuadro oleo verde
                                            </span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div>17/02/20</div>
                                    <div>Daniel Lewis</div>
                                </td>
                                <td>
                                    <div class="ml-3">
                                        <span>59 $</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="ml-4">
                                        <img
                                            src="/imagenes/icons/fl_downloader.png" 
                                            alt="" 
                                            style="width: 30px; height: 30px;"
                                        >
                                    </div>
                                </td>
                                <td class="text-primary p-3 text-center">
                                    <div>
                                        <div>
                                            En Progreso
                                        </div>
                                        <div class="btn-end">
                                            Finalizar
                                        </div>
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
        </div>
    </div>
</template>

<script>
import layout from "@/Layouts/Default/LayoutDefault.vue"
import HeaderAccount from '@/Layouts/HeaderMenu.vue'

export default {
    layout,
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

    .btn-end {
        color: white;
        background: #F8CF58;
        border-radius: 10px;
        text-align: center;
        cursor:pointer;
    }

    .btn-end:hover {
        opacity: .8;
    }
</style>