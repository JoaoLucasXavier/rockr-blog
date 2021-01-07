<template>
  <div>
    <modal>
      <div class="header">
        <h3 class="text-center">Contact</h3>
      </div>
      <form>
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Fill your full name">
        </div>
        <div class="form-group">
          <label for="email">E-mail</label>
          <input type="text" class="form-control" id="email" placeholder="Fill a valid e-mail">
        </div>
        <div class="form-group">
          <label for="phone">Phone</label>
          <input type="text" class="form-control" id="phone" aria-describedby="emailHelp" placeholder="Fill your phone">
        </div>
        <div class="form-group">
          <label for="post">Post</label>
          <textarea class="form-control" id="post" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary center">Submit</button>
      </form>
    </modal>
  </div>
</template>

<script>
import modal from '@/components/blog/components/modal/ModalComponent'

export default {
  name: 'contact',
  components: {
    modal
  }
}

</script>

<style scoped>

</style>