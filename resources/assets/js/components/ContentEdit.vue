<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Example Component</div>

                    <div class="panel-body">
                        I'm an example component!
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                options: {
                    toolbar: {
                        buttons: ['bold', 'italic', 'underline', 'anchor', 'h2', 'h3', 'quote', 'justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull'],
                    }
                },
                content 
            }
        },
        mounted() {
        },
        components: {
            'medium-editor': editor.default
        },
        methods: {
            processEditOperation(operation) {
                this.text = operation.api.origElements.innerHTML
            }
        }
    }
</script>
