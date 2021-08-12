<template>
    <div>
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
                    Mis Notificaciones
                </h6>
            </div>
            <div
                class="notifications_module"
                v-for="notif in notifications"
                :key="notif.id"
            >
                <div class="notification">
                    <div class="notification__info">
                        <div class="info_avatar">
                            <i class="fa fa-shopping-cart"></i>
                        </div>
                        <div class="info">
                            <p>
                                <!-- <span>Anderson</span> -->
                                {{ notif.data.data }}
                            </p>
                            <p class="time mt-2">
                                {{ moment(notif.data.created_at).fromNow() }}
                            </p>
                        </div>
                    </div>

                    <!-- <div
                        class="notification__icons"
                    >
                        <span
                            class="icon-heart loved noti_icon"
                        ></span>
                    </div> -->

                </div>

                <!-- <div
                    class="text-center m-top-30 p-left-20 p-right-20"
                >
                    <a
                        href="notification.html"
                        class="btn btn-primary btn-md btn-block"
                        >View All</a
                    >
                </div> -->

            </div>

        </div>
    </div>
</template>

<script>

export default ({
    data() {
        return {
            
        } 
    },
    computed: {
        notifications() {
            return this.$page.props.auth.user ?  this.$page.props.auth.user.unread_notifications : [];
        }
    }
})
</script>
