<template>
  <div class="container">
    <h2>BLOG</h2>
    <PostComponents />
  </div>
</template>

<script>
import PostComponents from '../components/PostComponents.vue';
export default {
    name: 'Blog',
    components: {
        PostComponents
    }
}
</script>

<style>

</style>