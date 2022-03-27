<template>
  <div>
    <h1>Colors</h1>

    <div class="flex">
      <ColorPicker class="w-full" />

      <ColorPicker class="w-full" />
    </div>
  </div>
</template>

<script>
import ColorPicker from './input-fields/ColorPicker.vue'

export default {
  components: {
    ColorPicker,
  },
}
</script>

<style lang="scss" scoped></style>
