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
@import './src/assets/scss/main';

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
  background-color: $modalBg;
  margin: auto;
  padding: 20px 40px;
  border: 1px solid $modalBorder;
  width: 600px;
  height: 720px;

  span {
    float: right;
    color: #2D2D2D;
    font-size: 45px;
    font-weight: bold;
  }
}

.close {
  span:hover,
  span:focus {
    color: $modalHover;
    text-decoration: none;
    cursor: pointer;
  }
}
</style>