<template>
  <div class="container">
    <div class="card mt-3">
        <img v-if="post.cover" class="card-img-top" :src="post.cover" alt="Card image cap" />
        <h2>{{ elem.title }}</h2>
        <p>categorie: {{ addCategory }}</p>
        <p>{{ text(elem.description, 50) }}</p>
        <router-link :to="{ name: 'singlePage', params:{ slug: elem.slug } }">Dettagli Post</router-link>
    </div>
  </div>
</template>

<script>
export default {
    name: 'CardPosts',
    props: {
        elem: Object
    },
    computed: {
        addCategory(){
            return this.elem.category ? this.elem.category.name : 'nessuna categoria'
        }
    },
    methods: {
        text(elemArray, maxNum) {
        if(elemArray.length > maxNum){
          return elemArray.substring(0, maxNum) + '...';
        } else {
          return elemArray;
        }
      }
    }
}
</script>

<style>

</style>