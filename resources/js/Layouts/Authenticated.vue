<template>
  <div>
    <nav class="navbar navbar-expand-md navbar-light bg-white border-bottom sticky-top">
      <div class="container">

        <a class="navbar-brand" href="/">
          <inertia-link :href="route('dashboard')">
              <img src="/imagenes/Logo.png" alt="">
            <!-- <breeze-application-logo width="36" /> -->
          </inertia-link>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <ul class="navbar-nav mr-auto">
            <breeze-nav-link :href="route('dashboard')" :active="route().current('dashboard')">
              Panel Administrativo
            </breeze-nav-link>
          </ul>

          <ul class="navbar-nav ml-auto align-items-baseline">

            <breeze-dropdown id="settingsDropdown">
              <template #trigger>
                {{ $page.props.auth.user.name }}

                <svg class="ml-2" width="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
              </template>

              <template #content>

                <breeze-dropdown-link :href="route('logout')" method="post">
                  Log Out
                </breeze-dropdown-link>
              </template>
            </breeze-dropdown>
          </ul>
        </div>
      </div>
    </nav>


    <header class="d-flex py-3 bg-white shadow-sm border-bottom">
      <div class="container">
        <!-- <slot name="header" /> -->

        <nav class="navbar navbar-light">

            <inertia-link class="navbar-brand" :href="route('users.index')">Usuarios</inertia-link>
            <inertia-link class="navbar-brand" :href="route('artworks.index')">Obras</inertia-link>
            <inertia-link class="navbar-brand" :href="route('transactions.index')">Transacciones</inertia-link>

        </nav>
      </div>
    </header>

    <transition name="fade-in-up">
      <!--<router-view />-->
      <main class="container my-5">
        <slot />
      </main>
    </transition>
  </div>
</template>

<script>
import BreezeApplicationLogo from '@/Components/ApplicationLogo'
import BreezeDropdown from '@/Components/Dropdown'
import BreezeDropdownLink from '@/Components/DropdownLink'
import BreezeNavLink from '@/Components/NavLink'

export default {
  components: {
    BreezeApplicationLogo,
    BreezeDropdown,
    BreezeDropdownLink,
    BreezeNavLink
  },

  data() {
    return {
      showingNavigationDropdown: false,
    }
  },
}
</script>
