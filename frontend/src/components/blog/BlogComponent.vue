<template>
  <section class="main">
    <navbar></navbar>
    <blogContent></blogContent>
  </section>
</template>
<script>

import navbar from './components/navBar/NavBarComponent'
import blogContent from './components/content/ContentComponent'

export default {
  name: 'blog',
  components: {
    navbar,
    blogContent,
  }
}
</script>

<style lang="scss" scoped>
@import './src/assets/scss/main';

.main {
  display: grid;
  grid-template-areas: "nav" "content";
  grid-template-rows: 100px 100%;
  font-family: "Rubik", sans-serif;
}

</style>

