<template>
  <div>
    <modal>
      <div class="header">
        <h3 class="text-center">Contact</h3>
      </div>
      <form @submit.prevent="save">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" placeholder="Fill your full name" v-model="data.name">
        </div>
        <div class="form-group">
          <label for="email">E-mail</label>
          <input type="text" class="form-control" id="email" placeholder="Fill a valid e-mail" v-model="data.email">
        </div>
        <div class="form-group">
          <label for="phone">Phone</label>
          <input type="text" class="form-control" id="phone" aria-describedby="emailHelp" placeholder="Fill your phone"
                 v-model="data.phone">
        </div>
        <div class="form-group">
          <label for="post">Post</label>
          <textarea class="form-control" id="post" rows="6" placeholder="Hello..." v-model="data.message"></textarea>
        </div>
        <div class="form-btn">
          <button type="submit" class="btn btn-dark center"><i class="fas fa-angle-double-right ico"></i> Submit
          </button>
        </div>
      </form>
    </modal>
  </div>
</template>

<script>
import modal from '@/components/blog/components/modal/ModalComponent'
import contact from "@/services/contact-service";

export default {
  name: 'contact',
  components: {
    modal
  },
  data() {
    return {
      data: {
        "name": "",
        "email": "",
        "phone": "",
        "message": "",
      }
    }
  },
  methods: {
    save() {
      contact.save(this.data).then(response => {
        console.log("Message sent successfully!" + response)
        alert("Message sent successfully!")
      })
    }
  },
}
</script>

<style lang="scss" scoped>
.header {
  margin-bottom: 20px;

  h3 {
    color: #F1A10A;
    font-weight: bold;
  }
}

form {
  label {
    color: black;
    margin-bottom: 5px;
  }

  input {
    margin-bottom: 30px;
  }

  .form-btn {
    display: flex;
    justify-content: center;
    margin-top: 40px;

    button {
      font-weight: bold;
      font-size: 18px;

      .ico {
        margin-right: 20px;
      }
    }
  }
}
</style>