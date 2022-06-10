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
            errors: Object
        },

        //define Composition Api
        setup() {
            //state urls
            const url = reactive({
                link_to_short: '',
            })

            //function storeUrl
            function storeUrl() {
                
                //define variable 
                let link = url.link_to_short

                //send data
                Inertia.post('/urls', {
                    link: link,
                })
            }

            return {
                url,
                storeUrl
            }
        }
    }
</script>

<template>

    <div>
        <div class="card border-0 rounded shadow">
            <div class="card-body">
                <h4>Buat Link</h4>
                <hr>
                <form @submit.prevent="storeUrl">
                    <div class="mb-3">
                        <label class="form-label">Link</label>
                        <input type="text" class="form-control" v-model="url.link_to_short" placeholder="Masukkan link Url">
                        <div v-if="errors.link_to_short" class="mt-2 alert alert-danger">
                            {{ errors.link_to_short }}
                        </div>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary btn-md shadow-sm me-2">Buat</button>
                        <button type="reset" class="btn btn-warning btn-md shadow-sm">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</template>

