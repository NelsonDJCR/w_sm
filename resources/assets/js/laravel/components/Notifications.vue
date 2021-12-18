<template>
    <div class="dropdown d-inline-block ml-2">
        <button type="button" class="btn btn-sm btn-dual" style="background: #E71C79;border:1px solid #E71C79;" id="page-header-notifications-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="si si-bell"></i>
            <span class="badge badge-danger badge-pill" v-if="notifications.length" v-text="notifications.length"></span>
        </button>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0 border-0 font-size-sm" aria-labelledby="page-header-notifications-dropdown">
            <div class="p-2 bg-primary text-center">
                <h5 class="dropdown-header text-uppercase text-white">Notificaciones</h5>
            </div>
            <ul class="nav-items mb-0">
                <li v-for="notification in notifications">
                    <a @click="markAsRead(notification)" class="text-dark media py-2" :href="notification.data.link">
                        <div class="mr-2 ml-3">
                            <i :class="notification.data.icon"></i>
                        </div>
                        <div class="media-body pr-2">
                            <div class="font-w600" v-text="notification.data.body"></div>
                            <small class="text-muted" v-text="notification.data.sender"></small>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
          return {
              notifications: []
          }
        },
        mounted() {
            axios.get('/adm-notifications').then(res => {
                this.notifications = res.data;
            })
        },

        methods : {
            markAsRead(notification){
                axios.patch('/adm-notifications/' + notification.id);
            }
        }
    }
</script>
