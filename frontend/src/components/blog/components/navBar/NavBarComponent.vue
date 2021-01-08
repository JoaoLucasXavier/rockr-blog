<template>
  <nav class="nav">
    <header>
      <span><a href="">Rockr Blog</a></span>
    </header>
    <article>
      <router-link class="item" :to="{ name: 'home', params: { postId: 123 }}">Posts</router-link>
      <button type="button" id="modal-btn" class="modal-btn">Contact</button>
      <modal/>
    </article>
  </nav>
</template>

<script>

import modal from '@/components/pages/contact/ContactComponent'

export default {
  name: 'NavBarComponent',
  components: {
    modal,
  },
};
</script>

<style lang="scss" src='./style.scss' scoped/>
