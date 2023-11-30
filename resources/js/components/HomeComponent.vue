<template>
    <v-container>
        <!-- most posts -->
        <section class="best_novels mt-5">
            <div class="head">
                <h3>روايات رائجة هذا اليوم</h3>
            </div>
            <v-divider></v-divider>
            <carousel v-bind="settings" :breakpoints="breakpoints">
                <slide v-for="slide in 10" :key="slide">
                    <v-card class="novel_card mr-3" max-width="250">
                        <v-img src="https://cdn.vuetifyjs.com/images/cards/sunshine.jpg" cover width="250"></v-img>
                        <v-card-title>عنوان الرواية</v-card-title>
                        <v-card-actions>
                            <v-btn :ripple="true" variant="tonal" color="green" elevation="4" size="small" class="d-block mx-auto" :loading="loading" @click="changePage">
                                <v-icon size="20" color="green">
                                    mdi-check
                                </v-icon>
                                اكتشف الآن
                            </v-btn>
                        </v-card-actions>
                    </v-card>
                </slide>

                <template #addons>
                    <navigation />
                </template>
            </carousel>
        </section>
        <!-- latest posts -->
        <section class="All_novels">
            <div class="head">
                <h3>كل الروايات</h3>
            </div>
            <v-divider></v-divider>
            <v-row>
                <v-col cols="2">
                    <v-card class="novel_card">
                        <v-card-item>
                            <v-img src="https://picsum.photos/id/1/200/300"></v-img>
                            <v-card-title class="pb-2">عنوان الرواية</v-card-title>
                            <v-card-subtitle class="pb-2">تصنيف الرواية</v-card-subtitle>
                        </v-card-item>
                    </v-card>
                </v-col>
                <v-col cols="2">
                    <v-card class="novel_card">
                        <v-img src="https://picsum.photos/id/2/200/300"></v-img>
                        <v-card-title class="pb-2">عنوان الرواية</v-card-title>
                        <v-card-subtitle class="pb-2">>تصنيف الرواية</v-card-subtitle>
                    </v-card>
                </v-col>
                <v-col cols="2">
                    <v-card class="novel_card">
                        <v-img src="https://picsum.photos/id/3/200/300"></v-img>
                        <v-card-title class="pb-2">عنوان الرواية</v-card-title>
                        <v-card-subtitle class="pb-2">تصنيف الرواية</v-card-subtitle>
                    </v-card>
                </v-col>
                <v-col cols="2">
                    <v-card class="novel_card">
                        <v-img src="https://picsum.photos/id/4/200/300"></v-img>
                        <v-card-title class="pb-2">عنوان الرواية</v-card-title>
                        <v-card-subtitle class="pb-2">تصنيف الرواية</v-card-subtitle>
                    </v-card>
                </v-col>
                <v-col cols="2">
                    <v-card class="novel_card">
                        <v-img src="https://picsum.photos/id/5/200/300"></v-img>
                        <v-card-title class="pb-2">عنوان الرواية</v-card-title>
                        <v-card-subtitle class="pb-2">تصنيف الرواية</v-card-subtitle>
                    </v-card>
                </v-col>
                <v-col cols="2">
                    <v-card class="novel_card">
                        <v-img src="https://picsum.photos/id/6/200/300"></v-img>
                        <v-card-title class="pb-2">عنوان الرواية</v-card-title>
                        <v-card-subtitle class="pb-2">تصنيف الرواية</v-card-subtitle>
                    </v-card>
                </v-col>
            </v-row>
        </section>
        <!-- list novels -->
        <section class="list_novels">
            <v-row>
                <v-col cols="8">
                    <div class="head">
                        <h3>روايات رائجة هذا اليوم</h3>
                    </div>
                    <v-divider></v-divider>
                    <v-card>
                        <v-card-item>
                            <v-row>
                                <v-col cols="4" v-for="(item, i) in items" :key="i">
                                    <v-list>
                                        <v-list-item>
                                            <div class="d-flex flex-no-wrap justify-space-between">
                                                <v-img src="https://cdn.vuetifyjs.com/images/cards/foster.jpg"></v-img>
                                                <div class="content pr-2">
                                                   <v-list-item-title>{{ item.title }}</v-list-item-title>
                                                   <v-list-item-subtitle>{{ item.date }}</v-list-item-subtitle>
                                                </div>
                                            </div>
                                        </v-list-item>
                                    </v-list>
                                </v-col>
                            </v-row>
                        </v-card-item>
                    </v-card>
                </v-col>
                <v-col cols="4">مساحة</v-col>
            </v-row>
        </section>
    </v-container>
</template>

<script>
import 'vue3-carousel/dist/carousel.css'
import { Carousel, Slide, Navigation } from 'vue3-carousel'

export default {
    name: "HomeComponent",
    components: {
        Carousel,
        Slide,
        Navigation,
    },
    data: () => ({
        loading: false,
        items: [
            {
                title: "novel 1",
                date: "2023"
            },
            {
                title: "novel 2",
                date: "2023"
            },
        ],
        setting: {
            itemsToShow: 5,
            snapAlign: 'center',
        },
        breakpoints: {
            // 700px and up
            700: {
                itemsToShow: 3.5,
                snapAlign: 'center',
            },
            // 1024 and up
            1024: {
                itemsToShow: 5,
                snapAlign: 'start',
            },
        }
    }),
    methods: {
        changePage(){
            this.loading = true;
            setTimeout(() => {
                this.loading = false;
            }, 2000);
        }
    }
}
</script>

<style >
.best_novels .carousel__icon:hover {
    background-color: #fff!important;
    border-radius: 50px;
}
.head {
    padding: 10px;
}
</style>