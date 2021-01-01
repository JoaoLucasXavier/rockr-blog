<template>
  <nav class="nav">
    <header>
      <span><a href="">Rockr Blog</a></span>
    </header>
    <article>
      <a class="item" href="">Post</a>
      <button id="contact-btn" class="modal-btn">Contact</button>
    </article>
  </nav>
</template>

<script>
export default {}

</script>

<style scoped>

.nav {
  grid-area: nav;
  background: #2d2d2d;
  display: flex;
  justify-content: space-around;
  align-items: center;
}

.nav > header > span > a {
  text-decoration: none;
  color: #fff;
  font-style: normal;
  font-weight: bold;
  font-size: 36px;
  line-height: 43px;
}

.nav > article .item {
  color: #fff;
  text-decoration: none;
  font-style: normal;
  font-weight: 500;
  font-size: 32px;
  line-height: 38px;
  padding: 0px 50px;
}

.modal-btn {
  color: #fff;
  text-decoration: none;
  font-style: normal;
  font-weight: 500;
  font-size: 32px;
  line-height: 38px;
  padding: 0px 50px;
  background-color: #2d2d2d;
  border:none;
  cursor: pointer;
  outline: none;
}

</style>