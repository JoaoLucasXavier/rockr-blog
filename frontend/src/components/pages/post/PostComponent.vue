<template>
  <article class="content">
    <div class="post">


      <ul>
        <li>{{ post.author }}</li>
        <li>{{ post.title }}</li>
        <li>{{ post.text }}</li>
        <li>{{ post.image }}</li>
        <br>
        <hr>
      </ul>


      <header>
        <div class="p-image">IMAGE</div>
        <div class="p-infor">INFOR</div>
      </header>
      <article>texto</article>
    </div>
  </article>
</template>

<script>
import post from '@/services/post-service'


export default {
  name: "Post",
  data() {
    return {
      post: []
    }
  },
  mounted() {
    // console.log(response.data['Posts'][1])
    // console.log(this.$route.params.postId)
    post.listById(this.$route.params.postId).then(response => {
      this.post = response.data.Post[0]
      console.log(this.post.text)
    })
  },
}
</script>

<style lang="scss" scoped>
@import './src/assets/scss/main';

.content {
  display: flex;
  justify-content: center;
  align-items: center;
}

.post {
  display: block;
  background-color: $postContentBg;
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