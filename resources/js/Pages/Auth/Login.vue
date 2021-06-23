<template>
  <div class="card-body">

    <breeze-validation-errors class="mb-3" />

    <div v-if="status" class="alert alert-success mb-3 rounded-0" role="alert">
      {{ status }}
    </div>

    <form @submit.prevent="submit">
      <div class="form-group">
        <breeze-label for="email" value="Email" />
        <breeze-input id="email" type="email" v-model="form.email" required autofocus />
      </div>

      <div class="form-group">
        <breeze-label for="password" value="Password" />
        <breeze-input id="password" type="password" v-model="form.password" required autocomplete="current-password" />
      </div>

      <div class="form-group">
        <div class="custom-control custom-checkbox">
          <breeze-checkbox id="remember_me" name="remember" v-model:checked="form.remember" />

          <label class="custom-control-label" for="remember_me">
            Remember Me
          </label>
        </div>
      </div>

      <div class="mb-0">
        <div class="d-flex justify-content-end align-items-baseline">
          <inertia-link v-if="canResetPassword" :href="route('password.request')" class="text-muted mr-3">
            Forgot your password?
          </inertia-link>

          <breeze-button class="ml-4" :class="{ 'text-white-50': form.processing }" :disabled="form.processing">
            Log in
          </breeze-button>
        </div>
      </div>

      <div class="flex items-center justify-end mt-4">
          <a class="ml-1 btn btn-primary" href="/redirect" style="margin-top: 0px !important;background: #4c6ef5;color: #ffffff;padding: 5px;border-radius:7px;" id="btn-fblogin">
              <i class="fa fa-facebook-square" aria-hidden="true"></i> Login with Facebook
          </a>
      </div>



    </form>
  </div>
</template>

<script>
import BreezeButton from '@/Components/Button'
import BreezeGuestLayout from "@/Layouts/Guest"
import BreezeInput from '@/Components/Input'
import BreezeCheckbox from '@/Components/Checkbox'
import BreezeLabel from '@/Components/Label'
import BreezeValidationErrors from '@/Components/ValidationErrors'

export default {
  layout: BreezeGuestLayout,

  components: {
    BreezeButton,
    BreezeInput,
    BreezeCheckbox,
    BreezeLabel,
    BreezeValidationErrors
  },

  props: {
    canResetPassword: Boolean,
    status: String
  },

  data() {
    return {
      form: this.$inertia.form({
        email: '',
        password: '',
        remember: false
      })
    }
  },

  methods: {
    submit() {
      this.form
          .transform(data => ({
            ... data,
            remember: this.form.remember ? 'on' : ''
          }))
          .post(this.route('login'), {
            onFinish: () => this.form.reset('password'),
          })
    }
  }
}
</script>
