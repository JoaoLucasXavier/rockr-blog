<template>
  <article class="content">
    <div class="post">
      <header>
        <div class="p-image">IMAGE</div>
        <div class="p-infor">INFOR</div>
      </header>
      <article>texto</article>
    </div>
  </article>
</template>

<script>
export default {}

</script>

<style scoped>
.content {
  display: flex;
  justify-content: center;
  align-items: center;
}

.post {
  display: block;
  background-color: white;
  min-height: 80vh;
  width: 80vw;
  margin-top: 50px;
}

.post > header {
  display: flex;
}

.p-image {
  background-color: red;
  height: 640px;
  width: 640px;
}

.p-infor {
  padding: 200px;
}

.post > article {
  padding: 100px 200px;
  height: 640px;
  width: 640px;
}

</style>