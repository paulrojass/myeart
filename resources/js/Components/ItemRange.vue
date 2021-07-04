<template>
    <div class="row">
        <!-- title -->
        <div class="col-12 mb-0">
            <div class="d-flex justify-content-between section-title-range">
                <div class="text-primary">
                    {{title}}
                </div>
                <div class="text-muted">
                    {{min}} - {{max}} {{prefix}}
                </div>
            </div>
        </div>  

        <div class="col-12 mb-3 mt-3">
            <Slider 
                v-model="value"
                :min="min"
                :max="max"
                :tooltips="true"
                :format="formatPrefix"
                showTooltip="focus"
                class="slider-custom"
            />
        </div>
    </div>
</template>

<script>
import Slider from '@vueform/slider'

export default {
    props:['title', 'prefix', 'min', 'max'],

    data() {
        return {
            value: [0, 100]
        }
    },
    created(){
        this.value = [this.min ?? 0, this.max ?? 100];
    },
    components: {
        Slider
    },
    methods: {
        formatPrefix(value){
            return `${value} $`;
        }
    }
}
</script>

<style scoped>
    .section-title-range {
        font-size: 25px;
    }
    
    .slider-custom {
        /* --slider-connect-bg: #3B82F6;
        --slider-tooltip-bg: #3B82F6; */
         --slider-connect-bg: #125CA0;
        --slider-tooltip-bg: #125CA0;
        --slider-handle-ring-color:#3B82F630;
         --slider-handle-width: 20px;
        --slider-handle-height: 20px;
        --slider-height: 10px;
        --slider-handle-bg: #125CA0;
    }


</style>
<style src="@vueform/slider/themes/default.css"></style>