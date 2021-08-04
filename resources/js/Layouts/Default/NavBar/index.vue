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
                                                <div class="icon_wrap">
                                                    <span
                                                        class="icon-bell"
                                                    ></span>
                                                    <span
                                                        class="notification_status noti"
                                                    ></span>
                                                </div>
                                                <div
                                                    class="dropdown notification--dropdown"
                                                >
                                                    <div
                                                        class="dropdown_module_header"
                                                    >
                                                        <h6>
                                                            My Notifications
                                                        </h6>
                                                    </div>
                                                    <div
                                                        class="notifications_module"
                                                    >
                                                        <div
                                                            class="notification"
                                                        >
                                                            <div
                                                                class="notification__info"
                                                            >
                                                                <div
                                                                    class="info_avatar"
                                                                >
                                                                    <img
                                                                        src="img/notification_head.png"
                                                                        alt=""
                                                                    />
                                                                </div>
                                                                <div
                                                                    class="info"
                                                                >
                                                                    <p>
                                                                        <span
                                                                            >Anderson</span
                                                                        >
                                                                        added to
                                                                        Favourite
                                                                        <a
                                                                            href="#"
                                                                            >Mccarther
                                                                            Coffee
                                                                            Shop</a
                                                                        >
                                                                    </p>
                                                                    <p
                                                                        class="time"
                                                                    >
                                                                        Just now
                                                                    </p>
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="notification__icons"
                                                            >
                                                                <span
                                                                    class="icon-heart loved noti_icon"
                                                                ></span>
                                                            </div>

                                                        </div>

                                                        <div
                                                            class="notification"
                                                        >
                                                            <div
                                                                class="notification__info"
                                                            >
                                                                <div
                                                                    class="info_avatar"
                                                                >
                                                                    <img
                                                                        src="img/notification_head2.png"
                                                                        alt=""
                                                                    />
                                                                </div>
                                                                <div
                                                                    class="info"
                                                                >
                                                                    <p>
                                                                        <span
                                                                            >Michael</span
                                                                        >
                                                                        commented
                                                                        on
                                                                        <a
                                                                            href="#"
                                                                            >DigiPro
                                                                            Extension
                                                                            Bundle</a
                                                                        >
                                                                    </p>
                                                                    <p
                                                                        class="time"
                                                                    >
                                                                        Just now
                                                                    </p>
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="notification__icons"
                                                            >
                                                                <span
                                                                    class="icon-bubble commented noti_icon"
                                                                ></span>
                                                            </div>

                                                        </div>

                                                        <div
                                                            class="notification"
                                                        >
                                                            <div
                                                                class="notification__info"
                                                            >
                                                                <div
                                                                    class="info_avatar"
                                                                >
                                                                    <img
                                                                        src="img/notification_head3.png"
                                                                        alt=""
                                                                    />
                                                                </div>
                                                                <div
                                                                    class="info"
                                                                >
                                                                    <p>
                                                                        <span
                                                                            >Khamoka </span
                                                                        >purchased
                                                                        <a
                                                                            href="#"
                                                                        >
                                                                            Visibility
                                                                            Manager
                                                                            Subscriptions</a
                                                                        >
                                                                    </p>
                                                                    <p
                                                                        class="time"
                                                                    >
                                                                        Just now
                                                                    </p>
                                                                </div>
                                                            </div>
    
                                                            <div
                                                                class="notification__icons"
                                                            >
                                                                <span
                                                                    class="icon-basket-loaded purchased noti_icon"
                                                                ></span>
                                                            </div>
    
                                                        </div>

                                                        <div
                                                            class="notification"
                                                        >
                                                            <div
                                                                class="notification__info"
                                                            >
                                                                <div
                                                                    class="info_avatar"
                                                                >
                                                                    <img
                                                                        src="img/notification_head4.png"
                                                                        alt=""
                                                                    />
                                                                </div>
                                                                <div
                                                                    class="info"
                                                                >
                                                                    <p>
                                                                        <span
                                                                            >Anderson</span
                                                                        >
                                                                        added to
                                                                        Favourite
                                                                        <a
                                                                            href="#"
                                                                            >Mccarther
                                                                            Coffee
                                                                            Shop</a
                                                                        >
                                                                    </p>
                                                                    <p
                                                                        class="time"
                                                                    >
                                                                        Just now
                                                                    </p>
                                                                </div>
                                                            </div>
    
                                                            <div
                                                                class="notification__icons"
                                                            >
                                                                <span
                                                                    class="icon-star reviewed noti_icon"
                                                                ></span>
                                                            </div>
    
                                                        </div>

                                                        <div
                                                            class="text-center m-top-30 p-left-20 p-right-20"
                                                        >
                                                            <a
                                                                href="notification.html"
                                                                class="btn btn-primary btn-md btn-block"
                                                                >View All</a
                                                            >
                                                        </div>

                                                    </div>

                                                </div>
                                            </li>
                                            <li class="has_dropdown">
                                                <div class="icon_wrap">
                                                    <span
                                                        class="icon-envelope-open"
                                                    ></span>
                                                    <span
                                                        class="notification_status msg"
                                                    ></span>
                                                </div>
                                                <div
                                                    class="dropdown messaging--dropdown"
                                                >
                                                    <div
                                                        class="dropdown_module_header"
                                                    >
                                                        <h6>My Messages</h6>
                                                    </div>
                                                    <div class="messages">
                                                        <a
                                                            href="message.html"
                                                            class="message recent"
                                                        >
                                                            <div
                                                                class="message__actions_avatar"
                                                            >
                                                                <div
                                                                    class="avatar"
                                                                >
                                                                    <img
                                                                        src="img/notification_head4.png"
                                                                        alt=""
                                                                    />
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="message_data"
                                                            >
                                                                <div
                                                                    class="name_time"
                                                                >
                                                                    <div
                                                                        class="name"
                                                                    >
                                                                        <p>
                                                                            NukeThemes
                                                                        </p>
                                                                        <span
                                                                            class="icon-envelope"
                                                                        ></span>
                                                                    </div>
                                                                    <span
                                                                        class="time"
                                                                        >Just
                                                                        now</span
                                                                    >
                                                                    <p>
                                                                        Hello
                                                                        John
                                                                        Smith!
                                                                        Nunc
                                                                        placerat
                                                                        mi ...
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            
                                                        </a>
                                                        
                                                        <a
                                                            href="message.html"
                                                            class="message recent"
                                                        >
                                                            <div
                                                                class="message__actions_avatar"
                                                            >
                                                                <div
                                                                    class="avatar"
                                                                >
                                                                    <img
                                                                        src="img/notification_head5.png"
                                                                        alt=""
                                                                    />
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="message_data"
                                                            >
                                                                <div
                                                                    class="name_time"
                                                                >
                                                                    <div
                                                                        class="name"
                                                                    >
                                                                        <p>
                                                                            Crazy
                                                                            Coder
                                                                        </p>
                                                                        <span
                                                                            class="icon-envelope"
                                                                        ></span>
                                                                    </div>
                                                                    <span
                                                                        class="time"
                                                                        >Just
                                                                        now</span
                                                                    >
                                                                    <p>
                                                                        Hi! Nunc
                                                                        placerat
                                                                        mi id
                                                                        nisi
                                                                        interum
                                                                        ...
                                                                    </p>
                                                                </div>
                                                            </div>

                                                        </a>

                                                        <a
                                                            href="message.html"
                                                            class="message"
                                                        >
                                                            <div
                                                                class="message__actions_avatar"
                                                            >
                                                                <div
                                                                    class="avatar"
                                                                >
                                                                    <img
                                                                        src="img/notification_head2.png"
                                                                        alt=""
                                                                    />
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="message_data"
                                                            >
                                                                <div
                                                                    class="name_time"
                                                                >
                                                                    <div
                                                                        class="name"
                                                                    >
                                                                        <p>
                                                                            Hybrid
                                                                            Insane
                                                                        </p>
                                                                    </div>
                                                                    <span
                                                                        class="time"
                                                                        >Just
                                                                        now</span
                                                                    >
                                                                    <p>
                                                                        Hi! Nunc
                                                                        placerat
                                                                        mi id
                                                                        nisi
                                                                        interum
                                                                        ...
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            
                                                        </a>
                                                        
                                                        <a
                                                            href="message.html"
                                                            class="message"
                                                        >
                                                            <div
                                                                class="message__actions_avatar"
                                                            >
                                                                <div
                                                                    class="avatar"
                                                                >
                                                                    <img
                                                                        src="img/notification_head3.png"
                                                                        alt=""
                                                                    />
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="message_data"
                                                            >
                                                                <div
                                                                    class="name_time"
                                                                >
                                                                    <div
                                                                        class="name"
                                                                    >
                                                                        <p>
                                                                            ThemeXylum
                                                                        </p>
                                                                    </div>
                                                                    <span
                                                                        class="time"
                                                                        >Just
                                                                        now</span
                                                                    >
                                                                    <p>
                                                                        Hi! Nunc
                                                                        placerat
                                                                        mi id
                                                                        nisi
                                                                        interum
                                                                        ...
                                                                    </p>
                                                                </div>
                                                            </div>

                                                        </a>

                                                        <a
                                                            href="message.html"
                                                            class="message"
                                                        >
                                                            <div
                                                                class="message__actions_avatar"
                                                            >
                                                                <div
                                                                    class="avatar"
                                                                >
                                                                    <img
                                                                        src="img/notification_head4.png"
                                                                        alt=""
                                                                    />
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="message_data"
                                                            >
                                                                <div
                                                                    class="name_time"
                                                                >
                                                                    <div
                                                                        class="name"
                                                                    >
                                                                        <p>
                                                                            NukeThemes
                                                                        </p>
                                                                        <span
                                                                            class="icon-envelope"
                                                                        ></span>
                                                                    </div>
                                                                    <span
                                                                        class="time"
                                                                        >Just
                                                                        now</span
                                                                    >
                                                                    <p>
                                                                        Hello
                                                                        John
                                                                        Smith!
                                                                        Nunc
                                                                        placerat
                                                                        mi ...
                                                                    </p>
                                                                </div>
                                                            </div>

                                                        </a>

                                                    </div>
                                                    <div
                                                        class="text-center m-top-30 m-bottom-30 p-left-20 p-right-20"
                                                    >
                                                        <a
                                                            href="message.html"
                                                            class="btn btn-primary btn-md btn-block"
                                                            >View All</a
                                                        >
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="has_dropdown">
                                                <CardCart />
                                            </li>
                                        </ul>
                                    </div>

                                    <div
                                        class="author-author__info has_dropdown"
                                        v-if="user"
                                    >
                                        <div class="author__avatar online">
                                            <img
                                                src="/img/user-avater.png"
                                                alt="user avatar"
                                                class="rounded-circle"
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

export default ({
    components: {
        CardCart
    },
    computed: {
        user() {
            return this.$page.props.auth.user
        }
    }
    
})
</script>
