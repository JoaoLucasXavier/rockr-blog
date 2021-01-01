<template>
  <article>
    <div class="p-line-1">
      <div class="p-line-1-image"></div>
      <div class="p-line-1-content"></div>
      <div class="p-line-1-image"></div>
      <div class="p-line-1-content"></div>
    </div>

    <div class="p-line-2">
      <div class="p-line-2-blank"></div>
      <div class="p-line-2-image"></div>
      <div class="p-line-2-content"></div>
    </div>

    <div class="p-line-3">
      <div class="p-line-3-content"></div>
      <div class="p-line-3-image"></div>
      <div class="p-line-3-content"></div>
      <div class="p-line-3-image"></div>
    </div>

    <div class="p-line-4">
      <div class="p-line-4-image"></div>
      <div class="p-line-4-blank"></div>
      <div class="p-line-4-content"></div>
    </div>
  </article>
</template>

<script>
export default {}
</script>

<style scoped>
.p-line-1 {
  display: flex;
  height: 320px;
  margin-top: 100px;
}

.p-line-1 > div {
  border: 1px solid black;
  height: 100%;
}

.p-line-1-image {
  width: 320px;
}

.p-line-1-content {
  flex-grow: 1;
}

.p-line-2 {
  display: flex;
  height: 320px;
  margin-top: 100px;
}

.p-line-2 > div {
  border: 1px solid black;
  height: 100%;
}

.p-line-2-blank {
  flex-grow: 1;
}

.p-line-2-image {
  width: 320px;
}

.p-line-2-content {
  flex-grow: 2;
}

.p-line-3 {
  display: flex;
  height: 320px;
  margin-top: 100px;
}

.p-line-3 > div {
  border: 1px solid black;
  height: 100%;
}

.p-line-3-image {
  width: 320px;
}

.p-line-3-content {
  flex-grow: 1;
}

.p-line-4 {
  display: flex;
  height: 320px;
  margin-top: 100px;
}

.p-line-4 > div {
  border: 1px solid black;
  height: 100%;
}

.p-line-4-blank {
  flex-grow: 1;
}

.p-line-4-image {
  width: 320px;
}

.p-line-4-content {
  flex-grow: 2;
}

</style>