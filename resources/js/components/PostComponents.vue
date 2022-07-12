<template>
  <div>
    <div class="container">
      <div class="row row-cols-3">
        <div v-for="elem in posts" :key="elem.id" class="col">
          <div class="card">
            <h2>{{ elem.title }}</h2>
            <p>{{ elem.description }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
    name:'PostComponents',
    data(){
      return{
        posts: []
      }
    },
    created() {
      this.addPost();
    },
    methods: {
      addPost() {
        axios
      .get('/api/posts')
      .then((resp)=>{
        this.posts = resp.data.results;
      })
      }
    }
}
</script>

<style>

</style>