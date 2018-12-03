<template>
    <div class="mb-4 flex justify-center">
        <input @input="fetchResults($event.target.value)" class="border rounded"/>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                timer: ''
            }
        },
        methods: {
            fetchResults(value) {
                if (value.length < 2) return;
                clearTimeout(this.timer);
                this.timer = setTimeout(() => {
                    window.axios.get(`/search?q=${value}`)
                        .then(({data}) => {
                            window.events.$emit('search-results-fetched', data);
                        });
                }, 500);
            }
        }
    }

</script>