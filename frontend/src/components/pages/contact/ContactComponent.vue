<template>
  <div id="contact-modal" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <p>Contact</p>
    </div>
  </div>
</template>

<script>
import modal from '../../../assets/js/contact-modal'

export default {
  mounted() {
    modal()
  },
}

</script>

<style scoped>
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgb(0, 0, 0);
  background-color: rgba(0, 0, 0, 0.4);
}

.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 500px;
  height: 620px;
}

.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>