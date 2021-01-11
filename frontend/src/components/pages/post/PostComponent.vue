<template>
  <article class="content">
    <div class="post">
      <div class="header">
        <div class="post-image">
          <img :src="imgsrc()" height="640" width="640" alt="Post"/>
        </div>
        <div class="post-info">
          <span>{{ new Date(post.created_at).toDateString() }}</span>
          <p>{{ post.author }}</p>
          <h3>{{ post.title }}</h3>
        </div>
      </div>
      <div class="content">
        <p>{{ post.text }}</p>
      </div>
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
    post.listById(this.$route.params.postId).then(response => {
      this.post = response.data[0]
    })
  },
  methods: {
    imgsrc() {
      return this.post.image;
    },
  }
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
  display: flex;
  flex-direction: column;
  background-color: $postContentBg;
  min-height: 80vh;
  width: 80vw;
  margin-top: 50px;

  .header {
    display: flex;
    height: 640px;
    width: 100%;

    .post-image {
      height: 100%;
      width: 50%;
    }

    .post-info {
      height: 100%;
      width: 50%;
      padding: 140px 80px;

      span {
        display: inline-block;
        padding-bottom: 30px;
        color: #032937;
        font-weight: 400;
        font-size: 18px;
      }

      p {
        padding-bottom: 30px;
        color: #2D2D2D;
        font-weight: 400;
        font-size: 24px;
      }

      h3 {
        color: #F1A10A;
        padding-bottom: 30px;
        font-weight: 700;
        font-size: 36px;
      }
    }
  }

  .content {
    padding: 80px 180px;
    width: 100%;
    background-color: white;

    p {
      color: #2D2D2D;
      font-weight: 400;
      font-size: 24px;
    }
  }
}
</style>