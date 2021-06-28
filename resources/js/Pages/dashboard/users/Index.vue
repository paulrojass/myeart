<template id="">
    <inertia-link :href="route('users.show', user.id)" v-for="user in this.users" :key="user.key">
        <p>{{user.name}} / {{user.email}}</p>
    </inertia-link>
</template>

<script>
export default {
    props:['users']
}
</script>
