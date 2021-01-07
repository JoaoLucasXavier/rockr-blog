<template>
  <article>

    <!--    <ul v-for="(post, index) of posts" :key="post.id">-->
    <!--      <li>{{ post.author }}</li>-->
    <!--      <li>{{ post.title }}</li>-->
    <!--      <li>{{ post.text }}</li>-->
    <!--      <li>{{ post.image }}</li>-->
    <!--      <li>-->
    <!--        <router-link class="item" :to="{ name: 'post', params: { postId: post.id } }"><i-->
    <!--            class="fas fa-angle-double-right ico"></i></router-link>-->
    <!--      </li>-->
    <!--      <li>{{ index + 1 }}</li>-->
    <!--      <br>-->
    <!--      <hr>-->
    <!--    </ul>-->


    <!--    <div v-for="(post) of posts" :key="post.id">-->
    <div v-for='index in Math.floor(((posts.length / 3) * 2))' :key='index'>
      <!--      <h1>{{posts.length}}</h1>-->
      <h1>{{ index - 1 }}</h1>
      <!--      <h6>{{ posts[index].image }}</h6>-->


      <div v-if="(index % 2 === 1)">


        <div v-if="(index % 2 === 0)">
          <div class="p-line-1">
            <div class="p-line-1-image">
              <img :src="imgsrc(posts[index].id)" height="326px" width="220px">
            </div>
            <div class="p-line-1-content"></div>
            <div class="p-line-1-image">
              <img :src="imgsrc(posts[index].id)" height="326px" width="220px">
            </div>
            <div class="p-line-1-content"></div>
          </div>
        </div>
        <div v-else>
          <div class="p-line-3">
            <div class="p-line-3-content"></div>
            <div class="p-line-3-image">
              <img :src="imgsrc(posts[index].id)" height="326px" width="220px">
            </div>
            <div class="p-line-3-content"></div>
            <div class="p-line-3-image">
              <img :src="imgsrc(posts[index].id)" height="326px" width="220px">
            </div>
          </div>
        </div>


      </div>
      <div v-else>


        <div v-if="(index % 2 === 0)">
          <div class="p-line-2">
            <div class="p-line-2-blank"></div>
            <div class="p-line-2-image">
              <img :src="imgsrc(posts[index].id)" height="326px" width="220px">
            </div>
            <div class="p-line-2-content"></div>
          </div>
        </div>
        <div v-else>
          <div class="p-line-4">
            <div class="p-line-4-image">
              <img :src="imgsrc(posts[index].id)" height="326px" width="220px">
            </div>
            <div class="p-line-4-blank"></div>
            <div class="p-line-4-content"></div>
          </div>
        </div>
      </div>


    </div>
    <!--    </div>-->

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
    // console.log(response.data['Posts'][1])
    post.listAll().then(response => {
      console.log(response.data['Posts'])
      this.posts = response.data['Posts']
    })
  },
  methods: {
    imgsrc(id) {
      // let result = `assets/movie_poster/${movieId}.jpg`;
      // return result;
      return this.posts[id].image;
    }
  }
}
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