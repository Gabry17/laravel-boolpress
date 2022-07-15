<template>
  <div class="container">
    <section v-if="tag">
        <h2>Tag: {{ tag.name }}</h2>
        <div v-for="elem in tag.posts" :key="elem.id" >
            <CardPosts :post="post"/>
        </div>
    </section>
    <section v-else>
        <div>LOADING</div>
    </section>
  </div>
</template>

<script>
import CardPosts from '../components/CardPosts.vue';

export default {
    name: 'Tag',
    components: {
        CardPosts
    },
    data(){
        return{
            tag: null
        }
    },
    created(){
        this.addTag();
    },
    methods: {
        addTag(){
            const slug = this.$route.params.slug
            axios
            .get(`/api/tags/${slug}`)
            .then((resp) => {
                this.tag = resp.data.results
            })
        }
    }
}
</script>

<style>

</style>