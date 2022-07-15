<template>
  <div class="container">
    <section v-if="post">
        <h2>Titolo: {{ post.title }}</h2>
        <p>Categoria: {{ addCategory }}</p>
        <div>
            Tag:
            <router-link 
            :to="{ name: 'tag' }"
            v-for="elem in post.tags"
            :key="elem.id"
            
            > {{ elem.name }}</router-link>
        </div>
        <p>Descrizione: {{ post.description }}</p>
    </section>
    <section v-else>
        LOADING
    </section>
  </div>
</template>

<script>
export default {
    name: 'SinglePage',
    data(){
        return {
            post: null
        }
    },
    created(){
        this.addPost()
    },
    computed: {
        addCategory(){
            return this.post.category ? this.post.category.name : 'nessuna categoria'
        }
    },
    methods: {
        addPost(){
            const slug = this.$route.params.slug

            axios
            .get(`/api/posts/${slug}`)
            .then((resp) => {
                if(resp.data.success){
                    this.post = resp.data.results
                } else {
                    this.$router.push({ name: 'notFound' })
                }
            })
        }
    }
}
</script>

<style>

</style>