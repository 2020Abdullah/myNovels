<template>
    <v-app>
        <v-locale-provider rtl>
            <router-view></router-view>
        </v-locale-provider>
    </v-app>
</template>


<script>
export default {
    name: "AppComponent"
}
</script>
