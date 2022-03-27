<template>
    <div :style="{
        backgroundColor: internalValue
    }" @click="$refs.input.click()" class="min-h-4">
        <input ref="input" class="w-0 h-0 opacity-0" type="color" v-model="internalValue" :id="randomId" />
    </div>
</template>

<script>
    import debounce from 'lodash/debounce'

    export default {
        props: {
            value: {
                type: String,
                default: '#ffffff'
            }
        },

        data() {
            return {
                internalValue: this.value,

                randomId: Math.random().toString(36).substr(2, 9)
            }
        },

        watch: {
            value(newValue) {
                this.internalValue = newValue
            },

            internalValue(newValue) {
                this.onInternalValueChange()
            }
        },

        methods: {
            onInternalValueChange: debounce(function() {
                this.$emit('input', this.internalValue)
            }, 300)
        }

    }
</script>

<style lang="scss" scoped>

</style>