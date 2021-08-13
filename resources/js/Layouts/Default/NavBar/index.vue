<template>
    
    <div class="menu-area">
        <div class="top-menu-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="menu-fullwidth">
                            <div class="logo-wrapper">
                                <div class="logo logo-top">
                                    <a href="/"
                                        ><img
                                            src="/imagenes/Logo.png"
                                            alt="logo image"
                                            class="img-fluid"
                                    /></a>
                                </div>
                            </div>
                            <div class="menu-container">
                                <div class="d_menu">
                                    <nav
                                        class="navbar navbar-expand-lg mainmenu__menu"
                                    >
                                        <button
                                            class="navbar-toggler"
                                            type="button"
                                            data-toggle="collapse"
                                            data-target="#bs-example-navbar-collapse-1"
                                            aria-controls="bs-example-navbar-collapse-1"
                                            aria-expanded="false"
                                            aria-label="Toggle navigation"
                                        >
                                            <span
                                                class="navbar-toggler-icon icon-menu"
                                            ></span>
                                        </button>
                                        
                                        <div
                                            class="collapse navbar-collapse"
                                            id="bs-example-navbar-collapse-1"
                                        >
                                            <ul class="navbar-nav">
                                                <li>
                                                    <inertia-link
                                                        :href="
                                                            route('home')
                                                        "
                                                    >
                                                        Inicio
                                                    </inertia-link>
                                                </li>
                                                <li>
                                                    <inertia-link
                                                        :href="
                                                            route('search')
                                                        "
                                                    >
                                                        Obras
                                                    </inertia-link>
                                                </li>
                                                <li>
                                                    <inertia-link
                                                        :href="
                                                            route('profileAuthor')
                                                        "
                                                    >
                                                        Artistas
                                                    </inertia-link>
                                                </li>
                                            </ul>
                                        </div>
                                        
                                    </nav>
                                </div>
                            </div>
                            <div class="author-menu">
                                <div class="author-area">
                                    <div class="search-wrapper">
                                        <div
                                            class="nav_right_module search_module"
                                        >
                                            <span
                                                class="icon-magnifier search_trigger"
                                            ></span>
                                            <div class="search_area">
                                                <form action="#">
                                                    <div
                                                        class="input-group input-group-light"
                                                    >
                                                        <span
                                                            class="icon-left"
                                                            id="basic-addon1"
                                                        >
                                                            <i
                                                                class="icon-magnifier"
                                                            ></i>
                                                        </span>
                                                        <input
                                                            type="text"
                                                            class="form-control search_field"
                                                            placeholder="Type words and hit enter..."
                                                        />
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="author__notification_area">
                                        <ul>
                                            <li class="has_dropdown">
                                                <Notifications />
                                            </li>
                                            <!-- <li class="has_dropdown">
                                                <CardCart />
                                            </li> -->
                                        </ul>
                                    </div>

                                    <div
                                        class="author-author__info has_dropdown"
                                        v-if="user"
                                    >
                                        <div class="author__avatar online">
                                            <img
                                                :src="user.profile.avatar ? user.profile.avatar : '/img/user-avater.png'"
                                                alt="user avatar"
                                                class="rounded-circle"
                                                style="width: 50px;"
                                            />
                                        </div>
                                        <div class="dropdown dropdown--author">
                                            <ul>
                                                <li>
                                                    <inertia-link
                                                        :href="
                                                            route('account-profile')
                                                        "
                                                    >
                                                        <span
                                                            class="icon-user"
                                                        ></span
                                                        >Perfil
                                                    </inertia-link>
                                                    
                                                </li>
                                                <li>
                                                    <inertia-link :href="route('logout')">
                                                        <span
                                                            class="icon-logout"
                                                        ></span
                                                        >Salir
                                                    </inertia-link>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div v-else>
                                        <inertia-link
                                            :href="
                                                route('register')
                                            "
                                            class="btn--xs btn btn-primary"
                                        >
                                            Registrarse
                                        </inertia-link>
                                        <inertia-link
                                            :href="
                                                route('login')
                                            "
                                            class="ml-1 btn--xs btn btn-warning"
                                            style="background: #F4B731; color: white;"
                                        >
                                            Iniciar Sesion
                                        </inertia-link
                                        >
                                    </div>
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>
        
    </div>
</template>

<script>
import CardCart from './Cart'
import Notifications from './Notifications.vue'

export default ({
    components: {
        CardCart,
        Notifications
    },
    computed: {
        user() {
            return this.$page.props.auth.user
        }
    }
    
})
</script>
