<template>
  <div id="modal" class="modal">
    <div class="modal-content">
      <div class="close">
        <span class="close">&times;</span>
      </div>
      <div>
        <slot></slot>
      </div>
    </div>

  </div>
</template>

<script>
import modal from '@/assets/js/contact-modal'

export default {
  name: 'modal',
  mounted() {
    modal()
  },
}

</script>

<style lang="scss" scoped>
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
  display: flex;
  flex-direction: column;
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 500px;
  height: 620px;

  span {
    float: right;
    color: #aaaaaa;
    font-size: 28px;
    font-weight: bold;
  }
}

.close {
  span:hover,
  span:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
  }
}
</style>