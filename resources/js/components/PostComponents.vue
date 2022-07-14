<template>
  <div>
    <div class="container">
      <h2>Tutti i post</h2>
      <div class="row row-cols-3">
        <!-- card -->
        <div v-for="elem in posts" :key="elem.id" class="col">
          <CardPosts :elem="elem" />
        </div>
      </div>
      <!-- pagination -->
      <nav aria-label="Page navigation example">
        <ul class="pagination">
          <li class="page-item">
            <a class="page-link" :class="{ disabled: page === 1 }" @click="addPost(page - 1)" href="#" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
              <span class="sr-only"></span>
            </a>
          </li>
          <li v-for="n in last" :key="n" class="page-item" @click="addPost(n)" :class="{ active: page === n }" ><a class="page-link" href="#">{{ n }}</a></li>
          <li class="page-item">
            <a class="page-link" :class="{ disabled: page === last }" @click="addPost(page + 1)" href="#" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
              <span class="sr-only"></span>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
</template>

<script>
import CardPosts from './CardPosts.vue';

export default {
    name:'PostComponents',
    components: {
      CardPosts
    },
    data(){
      return{
        posts: [],
        page: 1,
        last: 0
      }
    },
    created() {
      this.addPost(1);
    },
    methods: {
      addPost(numPage) {
        axios
      .get('/api/posts', {
        params: {
          page: numPage,
        },
      })
      .then((resp)=>{
        this.posts = resp.data.results.data;
        this.page = resp.data.results.current_page;
        this.last = resp.data.results.last_page;
      })
      }
    }
}
</script>

<style>

</style>