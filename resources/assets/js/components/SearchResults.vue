<template>
    <div>
        <div>
            <h2 class="text-grey-light text-center" v-if="typeof results.bands != 'undefined' && results.bands.length > 0">Bands</h2>
            <div class="md:flex md:flex-wrap">
                <band-search-result v-for="band in results.bands" v-if="band.metallumId" :initial-band="band" :key="band.id"></band-search-result>
            </div>
            <h2 class="text-grey-light" v-if="typeof results.albums != 'undefined' && results.albums.length > 0">Albums</h2>
            <div class="md:flex md:flex-wrap">
                <album-search-result v-for="album in results.albums" v-if="album.metallumId" :initial-album="album" :key="album.id"></album-search-result>
            </div>
            <h2 class="text-grey-light mb-2" v-if="typeof results.songs != 'undefined' && results.songs.length > 0">Songs</h2>
            <div class="">
                <song-search-result v-for="song in results.songs" v-if="song.metallumId" :initial-song="song" :key="song.id"></song-search-result>
            </div>
        </div>
    </div>
</template>

<script>
    import BandSearchResult from './BandSearchResult.vue';
    import AlbumSearchResult from './AlbumSearchResult.vue';
    import SongSearchResult from './SongSearchResult.vue';
    export default {
        components: {BandSearchResult, AlbumSearchResult, SongSearchResult},

        data() {
            return {
                results: [],
            }
        },

        created() {
            window.events.$on('search-results-fetched', results => {
                this.results = results;
            })
        },
        methods: {}
    }
</script>