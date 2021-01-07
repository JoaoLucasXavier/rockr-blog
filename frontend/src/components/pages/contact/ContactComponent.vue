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
          <textarea class="form-control" id="post" rows="3" v-model="data.message"></textarea>
        </div>
        <button type="submit" class="btn btn-primary center">Submit</button>
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
        alert("Salvo com sucesso!" + response)
      })
    }
  },
}

</script>

<style scoped>

</style>