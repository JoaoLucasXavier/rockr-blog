<template>
  <section class="main">
    <navbar></navbar>
    <contact></contact>
    <section class="content">
      <router-view></router-view>
    </section>
  </section>
</template>

<script>

import navbar from './components/nav/NavBarComponent'
import contact from './components/pages/contact/ContactComponent'

export default {
  name: 'main',
  components: {
    navbar,
    contact
  }
}
</script>

<style>

* {
  margin: 0;
  padding: 0;
}

body {
  background: linear-gradient(90deg, #f1a10a 0%, #342303 100%);
  /*box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);*/
}

.main {
  display: grid;
  grid-template-areas: "nav" "content";
  grid-template-rows: 100px 100%;
  font-family: "Rubik", sans-serif;
}

.content {
  grid-area: content;
}
</style>
