<template>
    <div class="d-flex flex-wrap">
        <div 
            class="d-flex"
            v-for="(item, i) in tags" :key="i"
            >
            <span 
                :class="`item ${selected.includes(item) && 'active'} m-1`" 
                @click="handleChange(item)"
            >
                {{ item.name }}
            </span>
        </div>
    </div>
</template>

<script>

export default ({
    props: ["tags"],
    data() {
        return {
            selected: []
        }
    },
    methods: {
        handleChange(item){
            if (this.selected.find(s => s.id === item.id)){
                this.selected = this.selected.filter(s => s.id !==  item.id)
            }else {
                this.selected = [...this.selected, item];
            }

            this.$emit('update', this.selected.map(s => s.id))
        }
    }
})
</script>

<style scoped>
    .item {
        cursor: pointer;
        background: rgba(82, 161, 225, 0.5);
        color: white;
        border-radius: 30px;
        padding: 5px 30px;
    }

    .item.active {
        background: #2566AE;
    }

    .item:hover {
        opacity: .6;
    }
</style>