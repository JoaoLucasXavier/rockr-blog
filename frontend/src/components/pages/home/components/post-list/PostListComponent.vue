<template>
  <article>
    <div class="inline" v-for='index in posts.length' :key='index'>
      <div class="inline" v-if="(index % 2 === 0)">

        <div class="big-box big-box-left" v-if="(index % 3 === 0)">
          <div class="post">
            <div class="img">
              <img :src="imgsrc(index -1)" alt=""/>
            </div>
            <div class="content">
              <span>{{ posts[index - 1].author }}</span>
              <h3>{{ posts[index - 1].title }}</h3>
              <p>{{ posts[index - 1].text.slice(0, 100) + " ....." }}</p>
              <router-link class="single-post" :to="{ name: 'post', params: { postId: posts[index - 1].id } }"><i
                  class="fas fa-angle-double-right ico" alt="View full post"></i></router-link>
            </div>
          </div>
        </div>

        <div class="small-box" v-else>
          <div class="post">
            <div class="img">
              <img :src="imgsrc(index -1)" alt=""/>
            </div>
            <div class="content">
              <span>{{ posts[index - 1].author }}</span>
              <h3>{{ posts[index - 1].title }}</h3>
              <p>{{ posts[index - 1].text.slice(0, 100) + " ....." }}</p>
              <router-link class="single-post" :to="{ name: 'post', params: { postId: posts[index - 1].id } }"><i
                  class="fas fa-angle-double-right ico" alt="View full post"></i></router-link>
            </div>
          </div>
        </div>

      </div>
      <div class="inline" v-else>

        <div class="big-box big-box-right" v-if="(index % 3 === 0)">
          <div class="post">
            <div class="img">
              <img :src="imgsrc(index -1)" alt=""/>
            </div>
            <div class="content">
              <span>{{ posts[index - 1].author }}</span>
              <h3>{{ posts[index - 1].title }}</h3>
              <p>{{ posts[index - 1].text.slice(0, 100) + " ....." }}</p>
              <router-link class="single-post" :to="{ name: 'post', params: { postId: posts[index - 1].id } }"><i
                  class="fas fa-angle-double-right ico" alt="View full post"></i></router-link>
            </div>
          </div>
        </div>

        <div class="small-box" v-else>
          <div class="post">
            <div class="img">
              <img :src="imgsrc(index -1)" alt=""/>
            </div>
            <div class="content">
              <span>{{ posts[index - 1].author }}</span>
              <h3>{{ posts[index - 1].title }}</h3>
              <p>{{ posts[index - 1].text.slice(0, 100) + " ....." }}</p>
              <router-link class="single-post" :to="{ name: 'post', params: { postId: posts[index - 1].id } }"><i
                  class="fas fa-angle-double-right ico" alt="View full post"></i></router-link>
            </div>
          </div>
        </div>
      </div>
    </div>
  </article>
</template>

<script>
import post from '@/services/post-service'

export default {
  name: 'PostList',
  data() {
    return {
      posts: []
    }
  },
  mounted() {
    post.listAll().then(response => {
      console.log(response.data['Posts'])
      this.posts = response.data['Posts']
    })
  },
  methods: {
    imgsrc(id) {
      return this.posts[id].image;
    },
  }
}
</script>

<style lang="scss" scoped>
article {
  max-width: 1920px;
  margin: 0 auto;
}

.inline {
  display: inline;
}

.small-box {
  display: inline-block;
  height: 320px;
  width: 50%;
  margin-top: 50px;

  .post {
    height: 100%;
    width: 100%;

    .img {
      height: 100%;
      width: 35%;
      float: left;

      img {
        position: relative;
        height: 100%;
        width: 100%;
      }
    }

    .content {
      position: relative;
      height: 100%;
      width: 65%;
      float: right;
      background-color: white;
      padding: 30px;

      span {
        color: #2D2D2D;
        font-weight: 400;
        font-size: 24px;
      }

      h3 {
        color: #F1A10A;
        font-weight: 700;
        font-size: 36px;
      }

      p {
        color: #2D2D2D;
        font-weight: 400;
        font-size: 20px;
      }

      .single-post {
        position: absolute;
        bottom: 10px;
        right: 0;
        width: 10%;
        margin-top: 10px;

        .ico {
          color: black;
          font-size: 24px;
        }
      }
    }
  }
}

.big-box {
  display: inline-block;
  height: 540px;
  width: 60%;
  margin-top: 50px;

  .post {
    height: 100%;
    width: 100%;

    .img {
      height: 100%;
      width: 50%;
      float: left;

      img {
        position: relative;
        height: 100%;
        width: 100%;
      }
    }

    .content {
      position: relative;
      height: 100%;
      width: 50%;
      float: right;
      background-color: white;
      padding: 50px;

      span {
        color: #2D2D2D;
        font-weight: 400;
        font-size: 24px;
      }

      h3 {
        color: #F1A10A;
        font-weight: 700;
        font-size: 36px;
      }

      p {
        color: #2D2D2D;
        font-weight: 400;
        font-size: 20px;
      }

      .single-post {
        position: absolute;
        bottom: 10px;
        right: 0;
        width: 10%;
        margin-top: 10px;

        .ico {
          color: black;
          font-size: 24px;
        }
      }
    }
  }
}

.big-box-left {
  float: left;
}

.big-box-right {
  float: right;
}
</style>