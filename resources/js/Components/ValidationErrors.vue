<template>
    <div class="alert alert-danger text-sm p-2" role="alert" v-if="hasErrors">
        <div class="font-weight-bold">Existen errores de validación.</div>

        <ul>
            <li v-for="(error, key) in errors" :key="key">{{ error }}</li>
        </ul>
    </div>
</template>

<script>
    export default {
        computed: {
            errors() {
                return this.$page.props.errors
            },

            hasErrors() {
                return Object.keys(this.errors).length > 0;
            },
        }
    }
</script>
