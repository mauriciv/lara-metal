<template>
    <div>
        <ul class="list-reset">
            <li class="text-green mx-8 my-4" v-for="(genre, index) in this.genres" :key="index">
                {{ genre }}
            </li>
        </ul>
    </div>
</template>

<script>
    // import BandSearchResult from './BandSearchResult.vue';
    // import AlbumSearchResult from './AlbumSearchResult.vue';
    // import SongSearchResult from './SongSearchResult.vue';
    export default {
        // components: {BandSearchResult, AlbumSearchResult, SongSearchResult},

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
        methods: {},
        computed: {
            genres() {
                let genres = _.map(this.results.bands, 'genre');
                return _.sortBy(_.uniq(genres));
            }
        }
    }
</script>