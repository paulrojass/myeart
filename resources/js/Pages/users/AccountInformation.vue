<template id="">
<div class="">
    <form class="form" @submit="submit">
        <button type="submit" name="button">enviar</button>
    </form>
</div>
</template>

<script>
export default {
    props: ['user'],
    data() {
      return {
        form: this.$inertia.form({
            avatar: this.user.profile.avatar,
            firstName: this.user.firstName,
            lastName: this.user.lastName,
            email: this.user.email,
            name: this.user.name,
            address: this.user.profile.address,
            country: this.user.profile.country,
            city: this.user.profile.city,
            region: this.user.profile.region,
            zip_code: this.user.profile.zip_code,
            card_brand: this.user.card_brand,
            card_last_four: this.user.card_last_four,
            trial_ends_at: this.user.trial_ends_at,
            facebook: this.user.profile.facebook,
            twitter: this.user.profile.twitter,
            google: this.user.profile.google,
            }),
        }
    },
    methods: {
        submit(evt) {
          evt.preventDefault()
          this.form.put(route('users.update', this.user.id))
        },
    }
}

</script>
