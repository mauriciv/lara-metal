<template>
    <div class="my-2 p-4 bg-grey-darkest rounded">
        <a :href="song.album.url" class="text-grey-light text-xl font-semibold no-underline"> {{ song.name }}
            <div class="text-base font-normal text-grey-light mt-4">
                <span> {{ song.album.band.name }}</span> - <span> {{ song.album.name }}</span>
            </div>
        </a>
    </div>
</template>

<script>
export default {
    props: ["initialSong"],
    computed: {
        song() {
            return this.initialSong;
        }
    },
};
</script>