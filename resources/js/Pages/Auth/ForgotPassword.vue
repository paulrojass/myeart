<template>
  <div class="card-body">
    <div class="mb-2">
      ¿Olvidaste tu contraseña? No hay problema. Simplemente ingresa tu dirección de correo electrónico y enviaremos un enlace para restablecer la contraseña que le permitirá elegir una nueva.
    </div>

    <div v-if="status" class="alert alert-success" role="alert">
      {{ status }}
    </div>

    <breeze-validation-errors class="mb-2" />

    <form @submit.prevent="submit">
      <div>
        <breeze-label for="email" value="Email" />
        <breeze-input id="email" type="email" v-model="form.email" required autofocus />
      </div>

      <div class="d-flex justify-content-end mt-4">
        <breeze-button :class="{ 'text-white-50': form.processing }" :disabled="form.processing">
          Enviar
        </breeze-button>
      </div>
    </form>
  </div>
</template>

<script>
import BreezeButton from '@/Components/Button'
import BreezeGuestLayout from "@/Layouts/Guest"
import BreezeInput from '@/Components/Input'
import BreezeLabel from '@/Components/Label'
import BreezeValidationErrors from '@/Components/ValidationErrors'

export default {
  layout: BreezeGuestLayout,

  components: {
    BreezeButton,
    BreezeInput,
    BreezeLabel,
    BreezeValidationErrors,
  },

  props: {
    status: String
  },

  data() {
    return {
      form: this.$inertia.form({
        email: ''
      })
    }
  },

  methods: {
    submit() {
      this.form.post(this.route('password.email'))
    }
  }
}
</script>
