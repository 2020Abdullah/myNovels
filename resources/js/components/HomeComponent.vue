<template>
    <v-container>
        <!-- most today novel -->
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
                                        <v-btn variant="tonal" color="green" elevation="4" size="small" class="d-block mx-auto">
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
        <!-- completed novel -->
        <section class="completed_novel mt-4">
            <v-card>
                <v-card-item>
                        <div class="head">
                            <h3>روايات مكتملة</h3>
                        </div>
                        <v-divider></v-divider>
                        <carousel v-bind="settings" :breakpoints="breakpoints">
                            <slide v-for="slide in 10" :key="slide">
                                <v-card class="novel_card mr-3" max-width="250">
                                    <v-img src="https://cdn.vuetifyjs.com/images/cards/sunshine.jpg" cover width="250"></v-img>
                                    <v-card-title>عنوان الرواية</v-card-title>
                                    <v-card-actions>
                                        <v-btn variant="tonal" color="green" elevation="4" size="small" class="d-block mx-auto">
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
                <v-card-text>
                    <div class="text-center">
                        <v-pagination
                        v-model="page"
                        :length="10"
                        :total-visible="5"
                        ></v-pagination>
                    </div>
                </v-card-text>
            </v-card>
        </section>
        <!-- list novels -->
        <section class="list_novels mt-4">
            <v-row>
                <v-col cols="8">
                    <v-card>
                        <v-card-item>
                            <v-card-title>
                                <h3>آخر الروايات</h3>
                            </v-card-title>
                            <v-divider></v-divider>
                            <v-row>
                                <v-col cols="4" v-for="(item, i) in items" :key="i">
                                    <v-card>
                                        <v-card-item>
                                            <v-sheet class="d-flex flex-no-wrap">
                                                <div class="image">
                                                    <v-img src="https://cdn.vuetifyjs.com/images/cards/foster.jpg"></v-img>
                                                </div>
                                                <div class="content">
                                                    <v-list-item-title>{{ item.title }}</v-list-item-title>
                                                    <v-list-item-subtitle>{{ item.date }}</v-list-item-subtitle>
                                                </div>
                                            </v-sheet>
                                        </v-card-item>
                                    </v-card>
                                </v-col>
                            </v-row>
                        </v-card-item>
                    </v-card>
                </v-col>
                <v-col cols="4">
                    <v-card>
                        <v-tabs v-model="tab" bg-color="indigo-darken-2" fixed-tabs align-tabs="center">
                            <v-tab @click="activeTab = 1">اسبوعي</v-tab>
                            <v-tab @click="activeTab = 2">شهرى</v-tab>
                            <v-tab @click="activeTab = 3">الكل</v-tab>
                        </v-tabs>
                        <v-card-text>
                            <v-sheet class="tab-content">
                                <div class="tab-item" :class="activeTab === 1 ? 'active' : ''">
                                    <v-row>
                                        <v-col cols="12">
                                            <v-card>
                                                <v-card-item>
                                                    <v-sheet class="card-image d-flex no-wrap">
                                                        <div class="image">
                                                            <v-img src="https://picsum.photos/id/45/200/200"></v-img>
                                                        </div>
                                                        <div class="content">
                                                            <v-card-title>عنوان الرواية</v-card-title>
                                                            <v-card-subtitle>نبذة عن الرواية </v-card-subtitle>
                                                        </div>
                                                    </v-sheet>
                                                </v-card-item>
                                            </v-card>
                                        </v-col>
                                    </v-row>
                                </div>
                                <div class="tab-item" :class="activeTab === 2 ? 'active' : ''">
                                    <v-row>
                                        <v-col cols="12">
                                            <v-card>
                                                <v-card-item>
                                                    <v-sheet class="card-image d-flex no-wrap">
                                                        <div class="image">
                                                            <v-img src="https://picsum.photos/id/60/200/200"></v-img>
                                                        </div>
                                                        <div class="content">
                                                            <v-card-title>عنوان الرواية</v-card-title>
                                                            <v-card-subtitle>نبذة عن الرواية </v-card-subtitle>
                                                        </div>
                                                    </v-sheet>
                                                </v-card-item>
                                            </v-card>
                                        </v-col>
                                    </v-row>
                                </div>
                                <div class="tab-item" :class="activeTab === 3 ? 'active' : ''">
                                    <v-row>
                                        <v-col cols="12">
                                            <v-card>
                                                <v-card-item>
                                                    <v-sheet class="card-image d-flex no-wrap">
                                                        <div class="image">
                                                            <v-img src="https://picsum.photos/id/100/200/200"></v-img>
                                                        </div>
                                                        <div class="content">
                                                            <v-card-title>عنوان الرواية</v-card-title>
                                                            <v-card-subtitle>نبذة عن الرواية </v-card-subtitle>
                                                        </div>
                                                    </v-sheet>
                                                </v-card-item>
                                            </v-card>
                                        </v-col>
                                    </v-row>
                                </div>
                            </v-sheet>
                        </v-card-text>
                    </v-card>
                </v-col>
            </v-row>
        </section>
    </v-container>
    <!-- footer section -->
    <v-container fluid>
        <v-footer>
            <v-row justify="center" no-gutters>
                <v-col class="text-center" cols="12">
                    <v-btn
                        variant="text"
                        class="mx-2"
                        rounded="xl"
                    >
                    سياسة الخصوصية
                    </v-btn>
                    <v-btn
                        variant="text"
                        class="mx-2"
                        rounded="xl"
                    >
                     شروط الإستخدام
                    </v-btn>
                    <v-btn
                        variant="text"
                        class="mx-2"
                        rounded="xl"
                    >
                      اتصل بنا
                    </v-btn>
                </v-col>
                <v-col class="text-center mt-4" cols="12">
                    {{ new Date().getFullYear() }} — <strong>رواياتي</strong>
                </v-col>
            </v-row>
        </v-footer>
    </v-container>
</template>

<style scoped>
.tab-content .tab-item {
    display: none;
}
.tab-content .tab-item.active {
    display: block;
}
.list_novels .image {
    width: 100px;
    height: 100px;
    border: 1px solid #333;
}
.list_novels .content {
    padding-right: 10px;
}
.card-image img {
    width: 100px;
}
</style>

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
        activeTab: 1,
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
            {
                title: "novel 3",
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
}
</script>
