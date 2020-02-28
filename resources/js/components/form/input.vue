<template>
    <div class="input-wrap" :class="{ layout, 'has-prefix' : prefix }">
        <label :for="attributes.id" v-if="layout != 'large'">{{ label }}</label>
        <div class="input-itself-wrap">
            <div class="prefix" v-if="prefix" :for="attributes.id">{{ prefix }}</div>
            <input v-model="model" :id="attributes.id" v-bind="attributes" ref="input"/>
        </div>
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
        prefix: {
            type: String,
            default: ''
        },
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
