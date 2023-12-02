<template>
    <v-container>
        <!-- most posts -->
        <section class="best_novels mt-4">
            <v-card>
                <v-card-item>
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
                </v-card-item>
            </v-card>
        </section>
        <!-- latest posts -->
        <section class="All_novels mt-4">
            <v-card>
                <v-card-item> 
                        <div class="head">
                            <h3>كل الروايات</h3>
                        </div>
                        <v-divider></v-divider>
                        <v-row>
                            <v-col cols="2" v-for="(novel, i) in All_novels" :key="i">
                                <v-card class="novel_card">
                                    <v-img :src="novel.img"></v-img>
                                    <v-card-title class="pb-2">{{ novel.title }}</v-card-title>
                                    <v-card-subtitle class="pb-2">{{ novel.cate }}</v-card-subtitle>
                                </v-card>
                            </v-col>
                        </v-row>
                </v-card-item>
            </v-card>
        </section>
        <!-- list novels -->
        <section class="list_novels mt-4">
            <v-row>
                <v-col cols="8">
                    <v-card>
                        <v-card-item>
                            <v-card-title>
                                <h3>روايات رائجة هذا اليوم</h3>
                            </v-card-title>
                            <v-divider></v-divider>
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
                <v-col cols="4">
                    <v-card>
                        <v-card-text></v-card-text>
                    </v-card>
                </v-col>
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
        All_novels: [
            {
                img: "https://picsum.photos/id/1/200/300",
                title: "عنوان الرواية",
                cate: "تصنيف"
            },
            {
                img: "https://picsum.photos/id/300/200/300",
                title: "عنوان الرواية",
                cate: "تصنيف"
            },
            {
                img: "https://picsum.photos/id/200/200/300",
                title: "عنوان الرواية",
                cate: "تصنيف"
            },
            {
                img: "https://picsum.photos/id/10/200/300",
                title: "عنوان الرواية",
                cate: "تصنيف"
            },
            {
                img: "https://picsum.photos/id/50/200/300",
                title: "عنوان الرواية",
                cate: "تصنيف"
            },
            {
                img: "https://picsum.photos/id/60/200/300",
                title: "عنوان الرواية",
                cate: "تصنيف"
            },
        ],
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
