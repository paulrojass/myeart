<template>
    <div>
        <HeaderAccount />
        <div class="dashboard_contents mt-5">
            <div class="container">
                <div class="row my-5">
                    <div class="col-12 col-md-6">
                        <CardSelectedType 
                            title="Artista"
                            desc="Si eres artista y quieres vender tu obra registra aqui"
                            icon="artist"
                            path=""
                        />
                    </div>

                    <div class="col-12 col-md-6">
                        <CardSelectedType
                            title="Galeria"
                            desc="Si eres una Galeria o gestionas multiples obras registrate aqui"
                            icon="gallery"
                            path=""
                        />
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import layout from "@/Layouts/Default/LayoutDefault.vue"
import HeaderAccount from '@/Layouts/Header'
import CardSelectedType from '../../Components/CardSelectedType'

export default {
    layout,
    components: {
        HeaderAccount,
        CardSelectedType
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
