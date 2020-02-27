<template>
    <div class="input-wrap" :class="layout">
        <label v-bind:for="attributes.id" v-if="layout != 'large'">{{ label }}</label>
        <input v-model="model" v-bind="attributes" ref="input"/>
        <span class="description" v-if="description">{{ description }}</span>
    </div>
</template>

<script>
export default {
    props: {
        name: String,
        readonly: Boolean,
        required: Boolean,
        disabled: Boolean,
        maxlength: Number,
        label: String,
        placeholder: String,
        description: {
            type: String,
            default: ''
        },
        layout: {
            type: String,
            default: 'default'
        },
        type: {
            type: String,
            default: 'text',
        },
        value: {}
    },
    data() {
        return {
            localValue: this.value,
        };
    },
    computed: {
        model: {
            get() {
                return this.localValue;
            },

            set(value) {
                this.localValue = value;
            }
        },

        attributes() {
            return {
                ...this.$attrs,
                type: this.type,
                id: this.id,
                name: this.name,
                disabled: this.disabled,
                required: this.required,
                readonly: this.readonly,
                maxlength: this.maxlength,
                placeholder: this.placeholder
            };
        },
    },
    watch: {
        localValue(value) {
            this.$emit('input', value);
        }
    }
};
</script>
