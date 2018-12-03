<template>
<div class="md:p-1 md:w-1/4">
    <div class="search-result mx-8 md:mx-4">
        <a :href="`/bands/${band.metallumId}`" class="">
            <img class="rounded-full h-32 w-32 mb-2" v-if="image" :src="`/storage/${image}`" alt="photo">
        </a>
        <a :href="`/bands/${band.metallumId}`" class="search-result-text"> {{ band.name }}</a>
    </div>
</div>
</template>

<script>
export default {
    props: ["initialBand"],
    computed: {
        band() {
            return this.initialBand;
        },
        image() {
            if (this.band.photoLocalPath) {
                return this.band.photoLocalPath;
            } else if (this.band.logoLocalPath) {
                return this.band.logoLocalPath;
            } else {
                return null;
            }
        }
    },
};
</script>

<style scoped>
    .result-img-container {
        display: flex;
        justify-content: center;
    }
    .band-logo {
        max-height: 50%;
        max-width: 50%;
    }
</style>
