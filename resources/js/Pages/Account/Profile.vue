<template>
    <div>
        <HeaderAccount title="Hola Daniel"/>

    </div>
</template>

<script>
import layout from "@/Layouts/Default/LayoutDefault.vue"
import HeaderAccount from './HeaderMenu.vue'

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

</style>
