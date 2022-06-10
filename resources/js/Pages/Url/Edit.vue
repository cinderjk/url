<script>
    //import layout
    import LayoutApp from '../../Layouts/App.vue'

    import { reactive } from 'vue'
    import { Inertia } from '@inertiajs/inertia'

    export default {

        //layout
        layout: LayoutApp,

        //props
        props: {
            url: Object,
            errors: Object
        },

        //define Composition Api
        setup(props) {

            //state urls
            const url = reactive({
                link: props.url.original_url,
            })

            //function updateUrl
            function updateUrl() {
                
                //define variable 
                let link   = url.link

                //send data
                Inertia.put(`/urls/${props.url.id}`, {
                    link: link
                })
             
            }

            return {
                url,
                updateUrl
            }

        }
    }
</script>

<template>

    <div>
        <div class="card border-0 rounded shadow">
            <div class="card-body">
                <h4>EDIT POST</h4>
                <hr>
                <form @submit.prevent="updateUrl">
                    <div class="mb-3">
                        <label class="form-label">TITLE POST</label>
                        <input type="text" class="form-control" v-model="url.link" placeholder="Masukkan Link">
                        <div v-if="errors.link" class="mt-2 alert alert-danger">
                            {{ errors.link }}
                        </div>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary btn-md shadow-sm me-2">UPDATE</button>
                        <button type="reset" class="btn btn-warning btn-md shadow-sm">RESET</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</template>
