<template id="alert-template">
            <div :class="['alert', 'alert-'+type, 'alert-dismissible']" role="alert" v-show="visible">
                <button v-on:click='visible = false' type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <slot></slot>
            </div>
</template>

<script>
export default {
        props: ['type'],
        data(){
            return {
                'visible': true
            }
        }
};


</script>