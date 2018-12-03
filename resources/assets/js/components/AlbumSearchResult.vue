<template>
<div class="md:p-1 md:w-1/4">
    <div class="search-result mx-8 md:mx-4">
        <a :href="album.url" class="">
            <img class="rounded h-32 w-32" v-if="album.artworkLocalPath" :src="`/storage/${album.artworkLocalPath}`" alt="artwork">
        </a>
        <a :href="album.url" class="search-result-text"> {{ album.name }}</a>
    </div>
</div>
</template>

<script>
export default {
    props: ["initialAlbum"],
    computed: {
        album() {
            return this.initialAlbum;
        }
    },
};
</script>